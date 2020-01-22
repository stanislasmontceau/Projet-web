<?PHP
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

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

function recupererScores($idUtilisateur){
	$sql="SELECT score FROM test WHERE Utilisateur_idUtilisateur=$idUtilisateur";
	$db = config::getConnexion();
	try{
		$listeScores=$db->query($sql);
		return $listeScores;
	}
	catch (Exception $e){
		die('Erreur');
	}
}

function recupererCardiaque($idUtilisateur){
	$sql="SELECT valeur FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur AND Capteur_idCapteur=1";
	$db = config::getConnexion();
	try{
		$listeScores=$db->query($sql);
		return $listeCardiaque;
	}
	catch (Exception $e){
		die('Erreur');
	}
}

function recupererTemp($idUtilisateur){
	$sql="SELECT valeur FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur AND Capteur_idCapteur=2";
	$db = config::getConnexion();
	try{
		$listeTemp=$db->query($sql);
		return $listeTemp;
	}
	catch (Exception $e){
		die('Erreur');
	}
}

function recupererReaction($idUtilisateur){
	$sql="SELECT valeur FROM donnees WHERE Utilisateur_idUtilisateur=$idUtilisateur AND Capteur_idCapteur=3";
	$db = config::getConnexion();
	try{
		$listeReaction=$db->query($sql);
		return $listeReaction;
	}
	catch (Exception $e){
		die('Erreur');
	}
}

?>
