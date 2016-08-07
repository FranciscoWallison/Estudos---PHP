<?php
require_once 'classes/Orcamento.class.php';
require_once 'classes/Produto.class.php';

$o = new Orcamento;
$o->adiciona(new Produto('Máqui na de Café',10,299),1);
$o->adiciona(new Produto('Barbeador Elétricro',10,170),1);
$o->adiciona(new Produto('Barra de Chocolate',10,7),3);

print $o->calculaTotal();
?>