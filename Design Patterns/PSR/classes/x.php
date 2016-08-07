<?php
spl_autoload_register(function ($class){
	require_once(str_replace('\\','/',$class.'.class.php')); 
});

use Library\Widgets\Field;
var_dump( new Field );