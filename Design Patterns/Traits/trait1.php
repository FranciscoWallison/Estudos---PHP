<?php
	require_once 'Classes/Record.class.php';

	/**
	* Em cada opração, o SQL correspondente será apresentado em tela. 
	*/
	class Pessoa extends Record
	{
		const TABLENAME = 'pessoa';
	}
	class Fornecedor extends Record
	{
		const TABLENAME = 'fornecedores';
	}
	class Produto extends Record
	{
		const TABLENAME = 'produtos';
	}
	

	$p = new Pessoa;
	$p->load(1);
	print '<br>'.PHP_EOL;
	$p->nome 	= 'Maria da Silva';
	$p->endreco	= 'Rua das Flores';
	$p->numero 	= '123';

	$p->save();
	print '<br>'.PHP_EOL;

	$p->delete(3);
	print '<br>'.PHP_EOL;

