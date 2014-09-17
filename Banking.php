<?php 
/*
  Orientação a Objetos com PHP - Programming Basic Conta Bancária
  Author: Ana Correia
  Date: 17/09/2014
  Mail: anacorreia.dev@gmail.com
*/

Class Conta
{
  private $saldo;
  private $valor;
   
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
echo $conta->getSaldo();

?>