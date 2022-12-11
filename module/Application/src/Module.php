<?php

namespace Application;

use Application\Db\TableGateway\ConfigVendasTableGateway;
use Application\Db\TableGateway\PushNotificationTableGateway;
use Application\Db\TableGateway\RepresentanteTableGateway;
use Application\Db\TableGateway\RequestLogTableGateway;
use Application\Db\TableGateway\ConfigTableGateway;
use Application\Helper\S3UrlHelper;
use Application\Mail\Mail;
use Application\Model\ConfigVendas;
use Application\Model\PushNotification;
use Application\Model\Representante;
use Application\Model\RequestLog;
use Application\Service\ConfigService;
use Application\Service\ConfigVendasService;
use Application\Service\CorreiosService;
use Application\Service\FCMNotification;
use Application\Service\OneSignalService;
use Application\Service\OperacaoService;
use Application\Service\PreAutorizacaoService;
use Application\Service\PvRelatorioService;
use Application\Service\RepresentanteService;
use Application\Service\S3Service;
use Application\Service\SMSService;
use Application\Service\TempoEntregaService;
use Application\Service\TelselReportService;
use Application\Service\RedisService;
use Application\View\Helper\CdnUrlViewHelper;
use Application\View\Helper\ConfigViewHelper;
use Application\View\Helper\ExceptionMailViewHelper;
use Application\View\Helper\ExceptionTelegramViewHelper;
use Application\View\Helper\FormatDocumentViewHelper;
use Application\View\Helper\NextNetworkDayViewHelper;
use Application\View\Helper\S3UrlViewHelper;
use Application\View\Helper\SlugifyViewHelper;
use Application\View\Helper\YouTubeVideoIdViewHelper;
use Aws\Credentials\Credentials as AWSCredentials;
use Aws\S3\S3Client;
use Client\Db\TableGateway\ClientTableGateway;
use Client\Db\TableGateway\PaymentLinkTableGateway;
use Client\Db\TableGateway\RegisterTableGateway;
use Client\Db\TableGateway\TrackingConsumidorTableGateway;
use Exception;
use Getnet\Service\CreditPaymentService;
use GranitoPayment\Db\TableGateway\OperacaoDividaTableGateway;
use GranitoPayment\Db\TableGateway\OperacaoVendaTableGateway;
use GranitoPayment\Db\TableGateway\PagamentoTableGateway;
use GranitoPayment\Model\Pagamento;
use GSApi\Model\CondicaoPagamentoTable;
use GSApi\Model\LimiteCreditoTable;
use GuzzleHttp\Client;
use SAP\Db\TableGateway\LimiteCreditoTableGateway;
use SAP\Db\TableGateway\PedidoTableGateway;
use SRApi\Db\TableGateway\WsdlRequestsTableGateway;
use User\Auth\Authentication;
use User\Db\TableGateway\UserAuthenticationTableGateway;
use User\Db\TableGateway\UserTableGateway;
use Laminas\Authentication\AuthenticationService;
use Laminas\Authentication\Storage\Session;
use Laminas\Db\Adapter\Adapter;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\EventManager\EventInterface;
use Laminas\Mail\Transport\Sendmail;
use Laminas\Mail\Transport\Smtp;
use Laminas\Mail\Transport\SmtpOptions;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\ModuleManager\Feature\InitProviderInterface;
use Laminas\ModuleManager\Feature\ServiceProviderInterface;
use Laminas\ModuleManager\Feature\ViewHelperProviderInterface;
use Laminas\ModuleManager\ModuleManagerInterface;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Mvc\MvcEvent;
use Laminas\ServiceManager\Config;
use Laminas\ServiceManager\ServiceManager;
use Laminas\View\Renderer\PhpRenderer;
use CustomerRelationship\Db\TableGateway\ConfigPushsAppTableGateway;

use Client\Service\ClientService;
use SRApi\Wsdl\Source as WsdlSource;
use Application\Service\ReportService;

/**
 * Class Module
 * @package Application
 *
 * @codeCoverageIgnore
 */
class Module implements
    ConfigProviderInterface,
    ServiceProviderInterface,
    InitProviderInterface,
    ViewHelperProviderInterface
{
    const VERSION = '1.0.1-dev';
    const APPLICATION_NAME = 'START_PROJETO';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                // Services
                SMSService::class => function (ServiceManager $serviceManager) {
                    $config = $serviceManager->get('config')['sms'];
                    $adapter = $serviceManager->get(Adapter::class);

                    return new SMSService($config, new Client(), $adapter);
                },

                OneSignalService::class => function (ServiceManager $serviceManager) {
                    $config             = $serviceManager->get('config')['onesignal'];
                    $configOneSignal    = $serviceManager->get('config')['onesignal_consumidor'];

                    return new OneSignalService($config, $serviceManager->get(PushNotificationTableGateway::class), $configOneSignal, $serviceManager->get(ServiceManager::class));
                },
                TelselReportService::class => function (ServiceManager $serviceManager) {
                    return new TelselReportService(
                        $serviceManager->get(UserTableGateway::class),
                        $serviceManager->get(UserAuthenticationTableGateway::class),
                        $serviceManager->get(PaymentLinkTableGateway::class)
                    );
                },
                ConfigVendasService::class => function (ServiceManager $serviceManager) {
                    return new ConfigVendasService(
                        $serviceManager->get(ConfigVendasTableGateway::class),
                        $serviceManager->get(S3Service::class),
                        $serviceManager->get('config')['aws']['s3']['endpoint']
                    );
                },
                Mail::class => function (ServiceManager $serviceManager) {
                    $emailConfig = $serviceManager->get('config')['mail'];

                    $smtpOptions = new SmtpOptions($emailConfig);
                    $transport = new Smtp($smtpOptions);

                    try {
                        $renderer = $serviceManager->get('ViewRenderer');
                    } catch (Exception $e) {
                        $renderer = new PhpRenderer();
                    }

                    return new Mail($transport, $emailConfig, $renderer, 'contact');
                },
                ReportService::class => function (ServiceManager $serviceManager) {
                    $clientService = $serviceManager->get(ClientService::class);
                    $wsdlSource = $serviceManager->get(WsdlSource::class);
                    $wsdlRequestTableGateway = $serviceManager->get(WsdlRequestsTableGateway::class);

                    return new ReportService($clientService, $wsdlSource, $wsdlRequestTableGateway);
                },
                FCMNotification::class => function (ServiceManager $serviceManager) {
                    $config = $serviceManager->get('config')['fcm'];
                    $tableGateway = $serviceManager->get(PushNotificationTableGateway::class);
                    return new FCMNotification($config, $tableGateway);
                },
                RepresentanteService::class => function (ServiceManager $serviceManager) {
                    $representanteTableGateway = $serviceManager->get(RepresentanteTableGateway::class);
                    $smsService = $serviceManager->get(SMSService::class);

                    return new RepresentanteService($representanteTableGateway, $smsService);
                },
                OperacaoService::class => function (ServiceManager $serviceManager) {
                    return new OperacaoService(
                        $serviceManager->get(OperacaoVendaTableGateway::class),
                        $serviceManager->get(OperacaoDividaTableGateway::class)
                    );
                },
                RedisService::class => function (ServiceManager $serviceManager) {
                    return new RedisService(
                        $serviceManager->get('config')['redis']
                    );
                },
                PvRelatorioService::class => function (ServiceManager $serviceManager) {
                    return new PvRelatorioService(
                        $serviceManager->get(ClientTableGateway::class),
                        $serviceManager->get(RegisterTableGateway::class),
                        $serviceManager->get(LimiteCreditoTable::class),
                        $serviceManager->get(CondicaoPagamentoTable::class)
                    );
                },
                CorreiosService::class => function (ServiceManager $serviceManager) {
                    return new CorreiosService(
                        $serviceManager->get('config')['correios']
                    );
                },
                TempoEntregaService::class => function (ServiceManager $serviceManager) {
                    return new TempoEntregaService(
                        $serviceManager->get(PedidoTableGateway::class),
                        $serviceManager->get(TrackingConsumidorTableGateway::class)
                    );
                },

                // Table gateways
                PushNotificationTableGateway::class => function (ServiceManager $serviceManager) {
                    $adapter = $serviceManager->get(Adapter::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new PushNotification());

                    $tableGateway = new TableGateway(
                        PushNotificationTableGateway::TABLE,
                        $adapter,
                        null,
                        $resultSetPrototype
                    );

                    return new PushNotificationTableGateway($tableGateway);
                },
                ConfigTableGateway::class => function (ServiceManager $serviceManager) {
                    $adapter = $serviceManager->get(Adapter::class);
                    $tableGateway = new TableGateway(
                        ConfigTableGateway::TABLE,
                        $adapter
                    );

                    return new ConfigTableGateway($tableGateway);
                },
                ConfigPushsAppTableGateway::class => function (ServiceManager $serviceManager) {
                    $adapter = $serviceManager->get(Adapter::class);
                    $tableGateway = new TableGateway(
                        ConfigPushsAppTableGateway::TABLE,
                        $adapter
                    );

                    return new ConfigPushsAppTableGateway($tableGateway);
                },
                RepresentanteTableGateway::class => function (ServiceManager $serviceManager) {
                    $adapter = $serviceManager->get(Adapter::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Representante());

                    $tableGateway = new TableGateway(
                        RepresentanteTableGateway::TABLE,
                        $adapter,
                        null,
                        $resultSetPrototype
                    );

                    return new RepresentanteTableGateway($tableGateway);
                },
                ConfigVendasTableGateway::class => function (ServiceManager $serviceManager) {
                    $adapter = $serviceManager->get(Adapter::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new ConfigVendas());

                    $tableGateway = new TableGateway(
                        ConfigVendasTableGateway::TABLE,
                        $adapter,
                        null,
                        $resultSetPrototype
                    );

                    return new ConfigVendasTableGateway($tableGateway);
                },
                RequestLogTableGateway::class => function (ServiceManager $serviceManager) {
                    $adapter = $serviceManager->get(Adapter::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new RequestLog());

                    $tableGateway = new TableGateway(
                        RequestLogTableGateway::TABLE,
                        $adapter,
                        null,
                        $resultSetPrototype
                    );

                    return new RequestLogTableGateway($tableGateway);
                },
                S3Client::class => function (ServiceManager $serviceManager) {
                    $s3 = $serviceManager->get('config')['aws']['s3'];
                    $credentials = new AWSCredentials($s3['aws_access_key_id'], $s3['aws_secret_access_key']);

                    return new S3Client([
                        'version' => $s3['version'],
                        'region'  => $s3['region'],
                        'credentials' => $credentials,
                    ]);
                },
                S3Service::class => function (ServiceManager $serviceManager) {
                    return new S3Service(
                        $serviceManager->get(S3Client::class),
                        $serviceManager->get('config')['aws']['s3']
                    );
                },
                PreAutorizacaoService::class => function (ServiceManager $serviceManager) {
                    return new PreAutorizacaoService(
                        $serviceManager->get(Adapter::class),
                        $serviceManager->get(CreditPaymentService::class)
                    );
                },
                ConfigService::class => function (ServiceManager $serviceManager) {
                    return new ConfigService(
                        $serviceManager->get(Adapter::class),
                        $serviceManager->get(ConfigTableGateway::class)
                    );
                },
                S3UrlHelper::class => function (ServiceManager $serviceManager) {
                    return new S3UrlHelper(
                        $serviceManager->get('config')['aws']['s3']
                    );
                },
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function init(ModuleManagerInterface $manager)
    {
        $sharedEvents = $manager->getEventManager()
            ->getSharedManager();

        $sharedEvents->attach(__NAMESPACE__, MvcEvent::EVENT_DISPATCH, function (MvcEvent $event) {
            $auth = new AuthenticationService();
            $auth->setStorage(new Session(Authentication::SESSION_NAME));

            /** @var AbstractActionController $controller */
            $controller = $event->getTarget();
            $matchedRoute = $controller->getEvent()
                ->getRouteMatch()
                ->getMatchedRouteName();

            $config = $this->getConfig();
            $routes = $config['router']['routes'];

            $whitelist = [];

            foreach ($routes as $routeName => $routeConfig) {
                if (isset($routeConfig['public'])
                    && $routeConfig['public'] === true) {
                    $whitelist[] = $routeName;
                }

                if (isset($routeConfig['child_routes'])) {
                    foreach ($routeConfig['child_routes'] as $childRouteName => $childRoute) {
                        if (isset($childRoute['public'])
                            && $childRoute['public'] === true) {
                            $whitelist[] = $routeName . '/' . $childRouteName;
                        }
                    }
                }

            }

            if (! $auth->hasIdentity() && ! in_array($matchedRoute, $whitelist)) {
                return $controller->redirect()
                    ->toRoute('waitlist');
            }
        }, 100);
    }

    /**
     * Expected to return \Laminas\View\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|Config
     */
    public function getViewHelperConfig()
    {
        return [
            'invokables' => [
                NextNetworkDayViewHelper::class => NextNetworkDayViewHelper::class,
                SlugifyViewHelper::class => SlugifyViewHelper::class,
                FormatDocumentViewHelper::class => FormatDocumentViewHelper::class,
                ExceptionMailViewHelper::class => ExceptionMailViewHelper::class,
                YouTubeVideoIdViewHelper::class => YouTubeVideoIdViewHelper::class,
                ExceptionTelegramViewHelper::class => ExceptionTelegramViewHelper::class
            ],
            'aliases' => [
                'proximoDiaUtil' => NextNetworkDayViewHelper::class,
                'nextNetworkDay' => NextNetworkDayViewHelper::class,
                'slugify' => SlugifyViewHelper::class,
                'formatCnpj' => FormatDocumentViewHelper::class,
                'formatCpf' => FormatDocumentViewHelper::class,
                'exceptionMail' => ExceptionMailViewHelper::class,
                'exceptionTelegram' => ExceptionTelegramViewHelper::class,
                'youtubeVideoId' => YouTubeVideoIdViewHelper::class
            ],
            'factories' => [
                'config' => function (ServiceManager $serviceManager) {
                    return new ConfigViewHelper($serviceManager->get('config'));
                },
                's3Url' => function (ServiceManager $serviceManager) {
                    return new S3UrlViewHelper($serviceManager->get('config')['aws']['s3']);
                },
                'cdnUrl' => function (ServiceManager $serviceManager) {
                    return new CdnUrlViewHelper($serviceManager->get('config')['aws']['s3']);
                }
            ]
        ];
    }

    public function onBootstrap(EventInterface $e)
    {
        $app = $e->getApplication();
        $evt = $app->getEventManager();
        $evt->attach(MvcEvent::EVENT_DISPATCH_ERROR, [$this,'onDispatchError'], 100);
    }

    public function onDispatchError(MvcEvent $e)
    {
        $vm = $e->getViewModel();
        $vm->setTemplate('layout/error');
    }
}
