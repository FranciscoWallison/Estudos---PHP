<?php
require 'classes/phpmailer/PHPMailerAutoload.php';
require 'classes/PHPMailerAdapter.php';

$mail = new PHPMailerAdapter;
$mail->setUseSmtp();
$mail->setSmtpHost('smtp.gmail.com',465);
$mail->setSmtpUser('pablo@dalloglio.net',	'minhasenha');
$mail->setFrom('pablo@dalloglio.net',		'Pablo Dall Oglio');
$mail->addAddress('destinatario@gmail.com',	'Destinatario');
$mail->setSubject('oi Cara');
$mail->setHtmlBody('<b>Isso é um <i>test</i></b>');
$mail->send();
?>