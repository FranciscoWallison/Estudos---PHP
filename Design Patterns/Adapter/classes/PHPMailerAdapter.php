<?php
require 'phpmailer/PHPMailerAutoload.php';
class PHPMailerAdapter{
	private $pm;
	public function __construct(){
		$this->pm = new PHPMailerAutoload;
		$this->pm-> CharSet 	= 'utd-8';
	}
	public function setDebug($bool){
		$this->pm-> SMTPDebug = $bool;
	}
	public function setFrom($from, $name){
		$this->pm-> From 	 	= $from;
		$this->pm-> FromName 	= $name;
	}
	public function setSubject($subject){
		$this->pm-> Subject 	= $subject;
	}
	public function setTextBody($body){
		$this->pm-> Body 	= $body;
		$this->pm-> IsHTML(false);
	}
	public function setHtmlBody($html){
		$this->pm-> MsgHTML($html);
	}
	public function addAddress($address, $name = ''){
		$this->pm-> AddAddress($address,$name);
	}
	public function setUseSmtp($auth = true){
		$this->pm-> IsSMTP();
		$this->pm-> SMTPAuth = $auth;
	}
	public function setSmtpHost($host, $port = 25){
		$this->pm-> Host = $host;
		$this->pm-> Port = $port;
		$this->pm-> SMTPSecure = "ssl";
	}
	public function setSmtpUser($user, $pass){
		$this->pm-> Username = $user;
		$this->pm-> Password = $pass;
	}
	public function send(){
		if(!$this->pm-> Send()){
			if($this->pm-> SMTPDebug){
				throw new Exception('E-mail not send: '. $this->pm->ErrorInfo);
			}else{
				throw new Exception('E-mail not send');
				
			}
		}
		return TRUE;
	}
}
?>