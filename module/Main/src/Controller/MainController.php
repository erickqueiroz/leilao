<?php

namespace Main\Controller;

use Laminas\Http\Response;
use Main\Db\TableGateway\WaitListTableGateway;
use Main\Service\BrazueraService;
use GuzzleHttp\Client;
use Laminas\Db\Adapter\Adapter;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Mvc\MvcEvent;
use Laminas\ServiceManager\ServiceManager;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ViewModel;
use Main\Service\RampService;
use ServiceManagerTrait\ServiceManagerTrait;

class MainController extends AbstractActionController
{
    use ServiceManagerTrait;

    private $serviceManager;

    public function __construct(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
    }

    public function indexAction()
    {
        return new ViewModel([]);
    }

    public function lanceAction()
    {
        $id = (int)$this->params()->fromRoute('idToken', 1);

        return new ViewModel([
            'id' => $id
        ]);
    }

    public function endsAction()
    {
        $id = (int)$this->params()->fromRoute('idToken', 1);

        return new ViewModel([
            'id' => $id
        ]);
    }


    public function onDispatch(MvcEvent $e)
    {
        $this->layout('layout/main');
        return parent::onDispatch($e);
    }
}
