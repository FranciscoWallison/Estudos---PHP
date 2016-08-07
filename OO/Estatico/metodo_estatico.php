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

	public static function getContador(){
		return self::$contador;
	}
}
//Criar novos objetos

new Software('Dia');
new Software('Gimp');
new Software('Dia');
//metodo
echo 'Quantidade criada = ' . Software::getContador();
?>
