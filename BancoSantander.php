<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking | Classe Abstrata 
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/
require_once 'Banco.php';
Class BancoSantander extends Banco
{
	public function __construct()
	{
		$this->nome = 'Santander';
		$this->cnpj = '0001/123.456 -78';
	}
}

$banco = new BancoSantander();
$Conta = new Conta();
$ContaPremium = new ContaPremium();

$banco->setConta($conta);
$banco->setContaPremium($ContaPremium);

$banco->getConta()->depositar(500);
echo ('Deposito efetuado com sucesso, Saldo Atualizado da Conta R$: '.$banco->getConta()->getSaldo());