<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking | Criando getters e setters 
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/
require_once 'Conta.php';
require_once 'ContaPremium.php';

Class Banco 
{
	private $nome;
	private $cnpj;
	private $conta;
	private $contaPremium;

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setCnpj($cnpj)
	{
		$this->cnpj = $cnpj;
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

$banco = new Banco();
$Conta = new Conta();
$ContaPremium = new ContaPremium();

$banco->setNome('Santander');
$banco->setCnpj(00001.123);
$banco->setConta($conta);
$banco->setContaPremium($ContaPremium);

$banco->getConta()->depositar(500);
echo ('Saldo Atualizado´da Conta R$: '.$banco->getConta()->getSaldo());