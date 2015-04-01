<?php

namespace Contatos\Model\Contato;

class Contato implements ContatoInterface
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $nome;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $telefone;

    /**
     * Popula objeto a partir de um array.
     *
     * @param array $data
     */
    public function exchangeArray($data)
    {
        $this->id       = $data['id'] ? $data['id'] : null;
        $this->nome     = $data['nome'] ? $data['nome'] : null;
        $this->email    = $data['email'] ? $data['email'] : null;
        $this->telefone = $data['telefone'] ? $data['telefone'] : null;
    }

    /** {@inheritdoc} */
    public function getId()
    {
    	return $this->id;
    }

    /** {@inheritdoc} */
    public function getNome()
    {
    	return $this->nome;
    }

    /** {@inheritdoc} */
    public function getEmail()
    {
    	return $this->email;
    }

    /** {@inheritdoc} */
    public function getTelefone()
    {
    	return $this->telefone;
    }
}
