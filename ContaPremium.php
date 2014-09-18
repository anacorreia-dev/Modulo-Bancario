<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking | Herança, Modificadores e Classes abstratas
  Author: Ana Correia
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/
require'Conta.php';
Class Premium extends Conta
{
	public function depositar ($valor)
    {
      $this->saldo += $valor;
      $this->saldo++;
    }
  
}

$conta = new Conta();
$conta->depositar(10000);
$conta->sacar(1000);
echo $conta->getSaldo();
?>