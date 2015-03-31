<?php 

namespace Contatos\Model;

class Contato 
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
	 * @param array $data
	 */
	public function exchangeArray($data)
	{
		$this->id       = $data['id'] ? $data['id'] : null;
		$this->nome     = $data['nome'] ? $data['nome'] : null;
		$this->email    = $data['email'] ? $data['email'] : null;
		$this->telefone = $data['telefone'] ? $data['telefone'] : null;
	}
}
