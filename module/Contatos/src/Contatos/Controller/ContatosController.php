<?php 

namespace Contatos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ContatosController extends AbstractActionController
{   

	/**
	 * Página de listagem de contatos
	 *
	 * @return ViewModel
	 */
    public function listAction()
    {
    	return new ViewModel();
    }

    public function addAction()
    {
    	return new ViewModel();
    }

    public function editAction()
    {
    	return new ViewModel();
    }

    public function deleteAction()
    {
    	return new ViewModel();
    }
}
