<?PHP
include "../config.php";

function recupererDonnees($idUtilisateur){
	$sql="SELECT * FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur');
	}
}

function recupererDernieresDonnees($idUtilisateur){
	$sql="SELECT * FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur AND idTest=(SELECT idTest FROM donnees WHERE Utilisateur_idUtilisateur=1 ORDER BY idTest DESC LIMIT 1 )";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
	}
	catch (Exception $e){
		die('Erreur');
	}
}

function nomCapteur($idCapteur) {
	$sql = "SELECT typeCapteur FROM capteur WHERE idCapteur=$idCapteur";
	$db = config::getConnexion();
	try{
		$type = $db->query($sql);
		$resultat = $type->fetch();
		return $resultat[0];
	}
	catch (Exception $e){
		die('Erreur');
	}
}

?>
