<?php
require_once 'classes/Orcamento.class.php';
require_once 'classes/OrcavelInterface.class.php';
require_once 'classes/Produto.class.php';
require_once 'classes/Servico.class.php';


$o = new Orcamento;
$o->adiciona(new Produto('Máquina de Café',10,299),1);
$o->adiciona(new Produto('Barbeador',10,170),1);
$o->adiciona(new Produto('Barra de Chocolate',10,7),3);

$o->adiciona(new Servico('Corte de Grama',20),1);
$o->adiciona(new Servico('Corte de Cabelo',20),1);
$o->adiciona(new Servico('Limpseza do apto',50),1);

print $o->calculaTotal();
?>