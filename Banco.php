<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking | Criando getters e setters 
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/
require_once 'Conta.php';
require_once 'ContaPremium.php';

abstract Class Banco 
{
	protected $nome;
	protected $cnpj;
	protected $conta;
	protected $contaPremium;

	public function getNome()
	{
		return $this->nome;
	}

	public function getCnpj()
	{
		return $this->cnpj;
	}

	public function setConta(Conta $conta)
	{
		$this->conta = $conta;
	}

	public function getConta()
	{
		return $this->conta;
	}

	public function setContaPremium(ContaPremium $ContaPremium)
	{
		$this->contaPremium = $ContaPremium;
	}

	public function getContaPremium()
	{
		return $this->contaPremium;
	}
}