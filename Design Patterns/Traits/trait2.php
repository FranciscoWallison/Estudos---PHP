<?php
require_once 'Classes/Record.class.php';


	trait ObjectConversionTrait{
		public function toXML(){
			$data = array_flip($this->data);
			$xml = new SimpleXMLElement('<'.get_class($this).'/>');
			array_walk_recursive($data, array ($xml,'addChild'));
			return $xml->asXML();
		}

		public function toJSON(){
			return json_encode($this->data);
		}
	}


	class Pessoa extends Record
	{
		const TABLENAME = 'pessoa';	
		use ObjectConversionTrait{
			//Método da trait disponibilizádo com outro nome
			toJSON as exportToJSON;
		}
	}

	class Produtos extends Record
	{
		const TABLENAME = 'produtos';	
		use ObjectConversionTrait{
			//Método da trait disponibilizádo com outro nome
			toJSON as exportToJSON;
		}
	}

	$p = new Pessoa;
	$p->nome 		=	'Maria da Silva';
	$p->endereco 	= 	'Rua das Flores';
	$p->numero 		= 	'123'; 

	var_dump($p->toXML());
		print '<br>';
	print $p->toJSON();


	print '<br>';
	print '<br>';
	$p2 = new Produtos;
	$p2->descricao 	= 	'Chocolate';
	$p2->preco 		=	7;
	print $p2->exportToJSON();