<?php

include "../config.php";

if(isset($_POST['utilisateurModifie'])) {
  $utilisateurModifie = $_POST['utilisateurModifie'];

  $idUtilisateur=$utilisateurModifie['idUtilisateur'];
  $type_utilisateur=$utilisateurModifie['type_utilisateur'];
  $nom=$utilisateurModifie['nom'];
  $prenom=$utilisateurModifie['prenom'];
  $date_naissance=$utilisateurModifie['date_naissance'];
  $mail=$utilisateurModifie['mail'];
  $entreprise=$utilisateurModifie['entreprise'];

  $sql="UPDATE utilisateur SET type_utilisateur=:type_utilisateur, nom=:nom, prenom=:prenom, date_naissance=:date_naissance, mail=:mail, entreprise=:entreprise WHERE idUtilisateur=:idUtilisateur";

  $db = config::getConnexion();

  $req=$db->prepare($sql);

  $req->bindValue(':idUtilisateur',$idUtilisateur);
  $req->bindValue(':type_utilisateur',$type_utilisateur);
  $req->bindValue(':nom',$nom);
  $req->bindValue(':prenom',$prenom);
  $req->bindValue(':date_naissance',$date_naissance);
  $req->bindValue(':mail',$mail);
  $req->bindValue(':entreprise',$entreprise);

  try{
    $req->execute();
  }
  catch (Exception $e){
    die($e);
  }
}

header('Location: http://infinitemeasures.fr/vues/listeUtilisateurs.php');

?>
