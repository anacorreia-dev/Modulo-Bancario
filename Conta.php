<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking Iniciando
  Author: Ana Correia
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/

Class Conta
{
  protected $saldo;
   
  public function depositar ($valor)
  {
    $this->saldo += $valor;
  }
    
  public function sacar ($valor)
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

$conta = new Conta();
$conta->depositar(10000);
$conta->sacar(1000);
echo ('Saldo Anterior da Conta R$: '.$conta->getSaldo());
echo '<pre>';
?>