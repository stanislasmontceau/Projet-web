<?PHP
class Newsletter{
	private $nombre_mails;
	private $mail;
	private $type;
	function __construct($nombre_mails,$mail,$type){
		$this->nombre_mails=$nombre_mails;
		$this->mail=$mail;
		$this->type=$type;
	}
	
	function getNombreMails(){
		return $this->nombre_mails;
	}
	function getMail(){
		return $this->mail;
	}
	function getType(){
		return $this->type;
	}


	function setMail($mail){
		$this->mail=$mail;
	}
	function setType($type){
		$this->type=$type;
	}
	
	
}

?>