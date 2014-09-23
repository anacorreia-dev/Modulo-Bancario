<?php
/*
  Orientação a Objetos com PHP - Módulo Banking | Index
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/

define('CLASS.DIR',__DIR__,'/');
set_include_path(get_include_path().PATH_SEPARATOR);
spl_autoload_register();

$banco = new BancoSantander();
$banco->setConta(new Conta());
$banco->setContaPremium(new ContaPremium());

$banco->getConta()->depositar(10000);
$banco->getConta()->sacar(1000);
echo ('Saldo da Conta R$: '.$banco->getConta()->getSaldo());
