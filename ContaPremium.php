<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking | Herança, Modificadores e Classes abstratas
  Author: Ana Correia
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/
require_once 'Conta.php';
Class ContaPremium extends Conta
{
	public function depositar ($valor)
    {
      $this->saldo += $valor;
      $this->saldo++;
    }
  
}