<?php

include "../config.php";

if(isset($_POST['questionPosee'])) {
  $questionPosee = $_POST['questionPosee'];

  $sqlDernierId = "SELECT idQuestionPosee FROM `questionsPosees` ORDER BY idQuestionPosee DESC LIMIT 1";
  $db = config::getConnexion();
	try{
		$dernierId=$db->query($sqlDernierId);
    $tmp = $dernierId->fetch();
    $dernierId = $tmp[0];
	}
	catch (Exception $e){
		die('Erreur');
	}

  $dernierId = $dernierId + 1;

  $sql="INSERT INTO questionsPosees (idQuestionPosee, questionPosee) VALUES ('$dernierId', '$questionPosee')";

  $db = config::getConnexion();
  $req=$db->prepare($sql);
  try{
    $req->execute();
  }
  catch (Exception $e){
    die($e);
  }

  header('Location: ../vues/questionPilote.php?msg=1');
}

else {
  header('Location: ../vues/questionPilote.php?msg=2');
}

?>
