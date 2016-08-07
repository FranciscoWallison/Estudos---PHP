<?php
	require_once 'Classes/Record.class.php';

	/**
	* 
	*/
	class JSONExporter
	{
		
		public function export($data)
		{
			return json_encode($data);
		}

	}

	/**
	* 
	*/
	class Pessoa extends Record
	{
		const TABLENAME = 'pessoa';
		public function toJSON(){
			$je = new JSONExporter;
			return $je->export($this->data);
		}
	}

	$p = new Pessoa;
	$p->nome 		='Francisco Wallison';
	$p->endereco	='Barroso';
	$p->numero 		='123';

	print $p->toJSON();