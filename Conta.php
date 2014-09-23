<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking Iniciando
  Author: Ana Correia
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/

Class Conta implements ContaInterface
{
  protected $saldo;
   
  public function depositar($valor)
  {
      $this->saldo += $valor;
  }
    
  public function sacar($valor)
  {
      if ($this->saldo  >=  $valor)
      {
          $this->saldo -= $valor;
          return true;
      }
      return false;
  }

  public function getSaldo()
  {
      return $this->saldo;
  }
}