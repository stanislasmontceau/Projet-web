<?PHP
class Panier{
	private $id_client;
	private $id_pdt;
	private $nb_article;
	private $prix_unit;
	function __construct($id_client,$id_pdt,$nb_article,$prix_unit){
		$this->id_client=$id_client;
		$this->id_pdt=$id_pdt;
		$this->nb_article=$nb_article;
		$this->prix_unit=$prix_unit;

	}
	
	function getId_client(){
		return $this->id_client;
	}
	function getId_pdt(){
		return $this->id_pdt;
	}
	function getNb_article(){
		return $this->nb_article;
	}
	function getPrix_unit(){
		return $this->prix_unit;
	}


	function setId_client($id_client){
		$this->id_client=$id_client;
	}
	function setId_pdt($id_pdt){
		$this->id_pdt=$id_pdt;
	}
	function setNb_article($nb_article){
		$this->nb_article=$nb_article;
	}
	function setPrix_unit($prix_unit){
		$this->prix_unit;
	}
	
	
}

?>