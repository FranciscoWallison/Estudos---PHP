<?php
require_once 'classes/Preferencias.class.php';

//obtem uma instância
$p1 = Preferencias::getInstace();

print 'A linguagem é: '.$p1->getData('language')."<br> \n";

$p1->setData('language', 'pt');
print 'A liguagem é: '. $p1->getData('language'). "<br> \n";

//obtém a mesma instâcia
$p2 = Preferencias::getInstace();
print 'A linguagem é:'. $p2->getData('language')."<br> \n";

//Grava o valor
//$p1->save();


?>