<?php
require_once 'classes/Produto.class.php';
require_once 'classes/Caracteristicas.class.php';

//Criação dos objetos
$produto = new Produto('Chocolate', 10 ,7);

//Composição
$produto->addCaracteristicas('Cor', 'Branco');
$produto->addCaracteristicas('Peso', '2.6 kg');
$produto->addCaracteristicas('Potencia', '20 watts RMS');

print 'Produto: '.$produto->getDescricao()."</br>";
foreach ($produto->getCaracteristicas() as $value) {
	print 'Caracteristica: '.$value->getNome().' - '. $value->getValor().'</br>';
}

?>