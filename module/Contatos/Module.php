<?php

namespace Contatos;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
#mod
use Contatos\Model\Contato;

class Module
{
    public function getConfig()
    {
        return include __DIR__.'/config/module.config.php';
    }

    /**
     * @see Zend\ModuleManager\Feature\AutoloaderProviderInterface::getAutoloaderConfig()
     */
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__.'/src/'.__NAMESPACE__,
                ],
            ],
        ];
    }

    /**
     * @see Zend\ModuleManager\Feature\ConfigProviderInterface::getConfig()
     */
    public function getServiceConfig()
    {
        #TODO: Separar em services, ao invés (DiC/Servive Locator...)
        return [
            'factories' => [
                'contatos.model.contatoTable' => function ($sm) {
                 $tableGateway = $sm->get('ContatoTableGateway');
                 $table = new Contato\ContatoTable($tableGateway);

                 return $table;
                },
                'ContatoTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('zend_db_adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Contato\Contato());

                    return new TableGateway('contatos', $dbAdapter, null, $resultSetPrototype);
                },
            ],
        ];
    }
}
