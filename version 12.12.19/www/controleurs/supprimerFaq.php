<?php

include "../config.php";

if(isset($_POST['idPopup'])) {
  $idQuestion = $_POST['idPopup'];

  $sql="DELETE FROM faq WHERE idQuestion = '$idQuestion'";
  $db = config::getConnexion();
  $req=$db->prepare($sql);
  try{
    $req->execute();
  }
  catch (Exception $e){
    die('Erreur');
  }
}

header('Location: ../vues/listeFaq.php');

?>
