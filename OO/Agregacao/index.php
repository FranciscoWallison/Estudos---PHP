<?php
require_once 'classes/Cesta.class.php';
require_once 'classes/Produto.class.php';

//criação da cesta 
$cesta = new Cesta;
//agrgação dos produtos
$cesta->addItem( $produto1 = new Produto('Chocolate',10,5)	);
$cesta->addItem( $produto2 = new Produto('Café',100,7)		);
$cesta->addItem( $produto3 = new Produto('Mostarda',50,3)	);

foreach ($cesta->getItens() as $item) {
 	print $item->getEstoque();
}
?>