<?php
include "../config.php";

if(isset($_POST['texte'])) {
  $id = $_POST['texte'];

  $sql="DELETE FROM utilisateur where idUtilisateur=$id";
  $db = config::getConnexion();
  $req=$db->prepare($sql);
  $req->bindValue(':idUtilisateur',$idUtilisateur);
  try{
    $req->execute();
    // header('Location: index.php');
  }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
  }
  header("Location: http://infinitemeasures.fr/vues/gererUtilisateurs.php");
}

?>
