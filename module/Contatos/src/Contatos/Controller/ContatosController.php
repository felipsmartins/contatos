<?php

namespace Contatos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ContatosController extends AbstractActionController
{
    /**
     * @var Contatos\Model\Contato\ContatoTable
     */
    protected $contatoTable;

    /**
     * Página de listagem de contatos.
     *
     * @return ViewModel
     */
    public function listAction()
    {
        $data = [
            'title' => 'Contatos',
            'zfpath' => file_exists('data/database/contatos.sqlite') ? 'existe!' : 'Não encontrado!',
            'contatos' => $this->getContatoTable()->getAll(),
        ];

        return new ViewModel($data);
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

    public function getContatoTable()
    {
        if (!$this->contatoTable) {
            $sm = $this->getServiceLocator();
            $this->contatoTable = $sm->get('contatos.model.contatoTable');
        }

        return $this->contatoTable;
    }
}
