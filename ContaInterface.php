<?php
/*
  Orientação a Objetos com PHP - Módulo Banking | Interface
  Date: 23/09/2014
  Mail: anacorreia.dev@gmail.com
*/

interface ContaInterface
{
	public function depositar($valor);
	public function sacar($valor);
	public function getSaldo();	
}