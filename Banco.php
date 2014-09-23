<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking | Criando getters e setters 
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/

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

	public function setConta(ContaInterface $conta)
	{
		$this->conta = $conta;
	}

	public function getConta()
	{
		return $this->conta;
	}

	public function setContaPremium(ContaInterface $contaPremium)
	{
		$this->contaPremium = $contaPremium;
	}

	public function getContaPremium()
	{
		return $this->contaPremium;
	}
}