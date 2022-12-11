<?php

namespace Main;

use Application\Mail\Mail;
use Main\Controller\MainController;
use Main\Db\TableGateway\EmailMintTableGateway;
use Main\Db\TableGateway\GoalsTableGateway;
use Main\Db\TableGateway\ItsPayAccessGatewayContractExtraTableGateway;
use Main\Db\TableGateway\ItsPayAccessGatewayTableGateway;
use Main\Db\TableGateway\PixRfqTableGateway;
use Main\Db\TableGateway\ValidationEmailCodePixTableGateway;
use Main\Db\TableGateway\WaitListTableGateway;
use Main\Model\EmailMint;
use Main\Model\ItsPayAccessGateway;
use Main\Model\ItsPayAccessGatewayContractExtra;
use Main\Model\PixRfq;
use Main\Model\ValidationEmailCodePix;
use Main\Model\WaitList;
use Main\Service\MainService;
use Laminas\Db\Adapter\Adapter;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\ServiceManager\ServiceManager;
use Main\Service\RampService;

class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function getControllerConfig()
    {
        return [
            'factories' => [
                MainController::class => function ($container) {
                    return new MainController(
                        $container->get(ServiceManager::class)
                    );
                }
            ]
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                EmailMintTableGateway::class => function (ServiceManager $serviceManager) {
                    $adapter = $serviceManager->get(Adapter::class);
                    $tableGateway = $this->getTableGateway($adapter, new EmailMint(), EmailMintTableGateway::TABLE);

                    return new EmailMintTableGateway($tableGateway);
                },
                MainService::class => function (ServiceManager $serviceManager) {
                    $config          = $serviceManager->get('config');
                    $from            = $config['mail'];
                    $mail   = $serviceManager->get(Mail::class);
                    return new MainService($mail, $from);
                },
            ]
        ];
    }

    public function getTableGateway(Adapter $adapter, $model, $table)
    {
        $resultSetPrototype = new ResultSet();
        $resultSetPrototype->setArrayObjectPrototype($model);

        return new TableGateway(
            $table,
            $adapter,
            null,
            $resultSetPrototype
        );
    }
}
