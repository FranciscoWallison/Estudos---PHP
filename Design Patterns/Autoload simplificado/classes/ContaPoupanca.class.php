<?php
	/**
	* 
	*/
	class ContaPoupanca extends Conta{
		//verufucar se a conta contém saldo suficiente para se retirado
		function retirar($quantia){
			if ($this->saldo >= $quantia) {
				$this->saldo -= $quantia; 
			}else{
				return false; // retirada não permitida 
			}
			return true; // retirada permitida 
		}
		public function __construct($agencia,$conta,$saldo){
			parent::__construct($agencia,$conta,$saldo);
		}
	}
?>