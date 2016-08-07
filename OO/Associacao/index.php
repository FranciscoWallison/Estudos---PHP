<?php
require_once 'classes/Produto.class.php';
require_once 'classes/Fabricante.class.php';
	
	//Criação dos obgetos
	$prduto =new Produto('Chocolate',10,7);
	$fab = new Fabricante('wallison','test',123456); 

	//Associação
	$prduto->setFabricante($fab);
	echo $prduto->getFabricante()->getNome();
?>