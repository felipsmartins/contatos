<?php

namespace Contatos\Model\Contato;

interface ContatoInterface
{   
    /**
     * Retorna o id do registro de contato
     *
     * @return int
     */
    public function getId();

    /**
     * Retorna o nome (de uma pessoa, especificamente) do contato
     *
     * @return string
     */
    public function getNome();

    /**
     * Retorna o email do registro de contato
     *
     * @return string
     */
    public function getEmail();

    /**
     * Retorna o telefone do registro de contato (somente dígitos)
     *
     * @return string
     */
    public function getTelefone();   
}
