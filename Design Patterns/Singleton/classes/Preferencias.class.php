<?php
	class Preferencias{
		private $data;
		private static $instace;
		private function __construct(){
			//armazenara no vetor $data 
			$this->data = parse_ini_file('application.ini');
		}
		//
		public static function getInstace(){
			if(empty(self::$instace)){
				self::$instace = new self;
			}
			return self::$instace;
		}
		public function setData($key, $value) {
			$this->data[$key] = $value;
		}
		public function getData($key){
			return $this->data[$key];
		}
		//grava a alteração 
		public function save(){
			$string = '';
			if($this->data){
				foreach ($this->data as $key => $value) {
					$string .= "{$key} = \"{$value}\" \n";
				}
			}
			file_put_contents('application.ini', $string);
		}
	}
?>