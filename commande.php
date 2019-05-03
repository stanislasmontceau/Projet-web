<?PHP
class Commande{
	private $id_client;
	private $id_cmd;
	private $date_cmd;
	private $prix_cmd;
	function __construct($id_client,$id_cmd,$date_cmd,$prix_cmd){
		$this->id_client=$id_client;
		$this->id_cmd=$id_cmd;
		$this->date_cmd=$date_cmd;
		$this->prix_cmd=$prix_cmd;

	}
	
	function getId_client(){
		return $this->id_client;
	}
	function getId_cmd(){
		return $this->id_cmd;
	}
	function getDate_cmd(){
		return $this->date_cmd;
	}
	function getPrix_cmd(){
		return $this->prix_cmd;
	}




	
	function setId_cmd($id_cmd){
		$this->id_cmd=$id_cmd;
	}
	function setDate_cmd($date_cmd){
		$this->date_cmd=$date_cmd;
	}
	function setPrix_cmd($prix_cmd){
		$this->prix_cmd;
	}
	
	
}

?>