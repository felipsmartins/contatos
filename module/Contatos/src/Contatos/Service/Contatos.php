<?php 
namespace Contato\Service;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
// use Zend\ServiceManager\ServiceLocatorInterface; #ServiceManager
//Zend\ServiceManager\FactoryInterface
#mod
use Contatos\Model\Contato;


class Contatos 
{
	public function createService(ServiceLocatorInterface $serviceLocator) 
	{ 
		return new \stdClass(); 
	}
}