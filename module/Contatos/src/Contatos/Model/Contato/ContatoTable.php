<?php

namespace Contatos\Model\Contato;

use Zend\Db\TableGateway\TableGateway;

class ContatoTable
{
    /**
     * @var TableGateway
     */
    protected $tableGateway;

    /**
     * Construtor.
     */
    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    /**
     * @return Zend\Db\ResultSet\ResultSet
     */
    public function getAll()
    {
        $resultSet = $this->tableGateway->select();

        return $resultSet;
    }

    /**
     * Obtém um contato pelo seu identificador.
     *
     * @param int $id Identificador do registro
     */
    public function getContato($id)
    {
        $id  = (int) $id;
        $rowset = $this->tableGateway->select(array('id' => $id));
        $row = $rowset->current();

        if (!$row) {
            throw new \Exception("Could not find row $id");
        }

        return $row;
    }

    /**
     * Adiciona/atualiza um contato.
     *
     * @param Contato $contato
     */
    public function saveContato(Contato $contato)
    {
        $data = array(
             'artist' => $contato->artist,
             'title'  => $contato->title,
         );
        $id = (int) $contato->id;

        if ($id == 0) {
            $this->tableGateway->insert($data);
        } else {
            if ($this->getAlbum($id)) {
                $this->tableGateway->update($data, array('id' => $id));
            } else {
                throw new \Exception('Contato id does not exist');
            }
        }
    }

    /**
     * Exclui contato pelo seu identificador.
     *
     * @param int $id Identificador do registro
     */
    public function deleteContato($id)
    {
        $this->tableGateway->delete(array('id' => (int) $id));
    }
}
