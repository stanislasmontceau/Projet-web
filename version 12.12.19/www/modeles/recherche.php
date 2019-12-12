<?PHP
include "../config.php";

function rechercherUtilisateurs($nom) {
  $sql="SELECT idUtilisateur,type_utilisateur,nom,prenom,mail FROM utilisateur WHERE nom='$nom'";
  $db=config::getConnexion();
  try {
    $liste=$db->query($sql);
    return $liste;
  }
  catch (Exception $e){
    die('Erreur: '.$e->getMessage());
  }
}

?>
