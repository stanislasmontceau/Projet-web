<?PHP
class Restaurant{
	private $cin;
	private $nom;
	private $nom_restaurant;
	private $type;
	private $description;
	function __construct($cin,$nom,$nom_restaurant,$type,$description){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->nom_restaurant=$nom_restaurant;
		$this->type=$type;
		$this->description=$description;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getNomRestaurant(){
		return $this->nom_restaurant;
	}
	function getType(){
		return $this->type;
	}
	function getDescription(){
		return $this->description;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setNomRestaurant($nom_restaurant){
		$this->nom_restaurant;
	}
	function setType($type){
		$this->type=$type;
	}
	function setDescription($description){
		$this->description=$description;
	}
	
}

?>