<?php
/**
* 
*/
class ClienteService{
	public static function informaInadimplentes( $mailer ){
		$inadiplentes = Cliente::getInadimplentes();

		foreach ($inadimplentes as $cliente) {
			$mailer->setHtmlBody();
			$mailer->addAddress( $cliente->email);
			$mailer->setHtmlBody("Hei <b> $cliente </b>, cumpra com suas obrigaçoes");
			$mailer->send();
		}
	}
}
?>