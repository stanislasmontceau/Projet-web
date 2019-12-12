<?PHP
class Utilisateur{
	private $idUtilisateur;
	private $type_utilisateur;
	private $nom;
	private $prenom;
	private $date_naissance;
	private $mail;
	private $entreprise;
	private $mot_de_passe;
	function __construct($idUtilisateur,$type_utilisateur,$nom,$prenom,$date_naissance,$mail,$entreprise,$mot_de_passe){
		$this->idUtilisateur=$idUtilisateur;
		$this->type_utilisateur=$type_utilisateur;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date_naissance=$date_naissance;
		$this->mail=$mail;
		$this->entreprise=$entreprise;
		$this->mot_de_passe=$mot_de_passe;
	}
	
	function getIdUtilisateur(){
		return $this->idUtilisateur;
	}
	function getTypeUtilisateur(){
		return $this->type_utilisateur;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getDateNaissance(){
		return $this->date_naissance;
	}
	function getMail(){
		return $this->mail;
	}
	function getEntreprise(){
		return $this->entreprise;
	}
	function getMotDePasse(){
		return $this->mot_de_passe;
	}

	function setTypeUtilisateur($type_utilisateur){
		$this->type_utilisateur=$type_utilisateur;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setDateNaissance($date_naissance){
		$this->date_naissance=$date_naissance;
	}
	function setMail($mail){
		$this->mail=$mail;
	}
	function setEntreprise($entreprise){
		$this->entreprise=$entreprise;
	}
	function setMotDePasse($mot_de_passe){
		$this->mot_de_passe=$mot_de_passe;
	}
	
}

?>