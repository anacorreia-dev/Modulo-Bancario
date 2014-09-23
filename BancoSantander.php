<?php 
/*
  Orientação a Objetos com PHP - Módulo Banking | Classe Abstrata 
  Date: 18/09/2014
  Mail: anacorreia.dev@gmail.com
*/

Class BancoSantander extends Banco
{
	public function __construct()
	{
		$this->nome = 'Santander';
		$this->cnpj = '0001/123.456 -78';
	}
}