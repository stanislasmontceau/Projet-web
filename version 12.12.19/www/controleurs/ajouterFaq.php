<?php

include "../config.php";

if(isset($_POST['idDerniereQuestion'])) {
  $id = $_POST['idDerniereQuestion'] + 1;

  $sql="INSERT INTO faq (idQuestion, question, reponse) VALUES ('$id', NULL, NULL)";

  $db = config::getConnexion();
  $req=$db->prepare($sql);
  try{
    $req->execute();
  }
  catch (Exception $e){
    die('Erreur');
  }
}

header("Location: ../vues/gererFaq.php?idQuestion=$id");

?>
