<?php

include "../config.php";

if(isset($_POST['utilisateurs'])) {
  foreach($_POST['utilisateurs'] as $user) {
    $idUtilisateur=$user['idUtilisateur'];
    $type_utilisateur=$user['type_utilisateur'];
    $nom=$user['nom'];
    $prenom=$user['prenom'];
    $date_naissance=$user['date_naissance'];
    $mail=$user['mail'];
    $entreprise=$user['entreprise'];

    $sql="UPDATE utilisateur SET type_utilisateur='$type_utilisateur', nom='$nom', prenom='$prenom', date_naissance='$date_naissance', mail='$mail', entreprise='$entreprise' WHERE idUtilisateur='$idUtilisateur'";

    $db = config::getConnexion();
    $req=$db->prepare($sql);
    try{
      $req->execute();
    }
    catch (Exception $e){
      die('Erreur');
    }
  }

  header("Location: http://infinitemeasures.fr/vues/listeUtilisateurs.php");
}

?>
