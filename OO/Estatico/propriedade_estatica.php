<?php
class Software {
	private $id;
	private $name;
	public static $contador;

	function __construct($name)	{
		self::$contador++;
		$this->id = self::$contador;
		$this->name = $name;
		print "Software {$this->id} - {$this->name} <br>\n";
	}
}
//Criar novos objetos

new Software('Dia');
new Software('Gimp');
new Software('Dia');
//atributo
echo 'Quantidade criada = ' . Software::$contador;
?>
