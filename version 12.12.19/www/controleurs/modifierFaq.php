<?php

include "../config.php";

if(isset($_POST['faq'])) {
  $faq = $_POST['faq'];

  $idQuestion=$faq['idQuestion'];
  $question=$faq['question'];
  $reponse=$faq['reponse'];

  $sql="UPDATE faq SET question=:question, reponse=:reponse WHERE idQuestion=:idQuestion";

  $db = config::getConnexion();
  $db->exec("SET CHARACTER SET utf8");

  $req=$db->prepare($sql);

  $req->bindValue(':question',$question);
  $req->bindValue(':reponse',$reponse);
  $req->bindValue(':idQuestion',$idQuestion);

  try{
    $req->execute();
  }
  catch (Exception $e){
    print_r($e);
    die('Erreur');
  }
}


header('Location: ../vues/listeFaq.php');

?>
