<?php
function __autoload($classe){
	//busca classe no duretório de classes...
	require_once "classes/{$classe}.class.php";
}
//instanciando novo Produto
$cafe = new Produto('Máquina de café',10,299);
echo '<pre>';
var_dump($cafe);
?>