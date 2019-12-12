<?PHP
session_start();
include "../config.php";

if (isset($_POST['mail']) && isset($_POST['mdp'])) {
  $mail = $_POST['mail'];
  $mdp = $_POST['mdp'];

  $sql = "SELECT COUNT(1) FROM utilisateur WHERE mail='$mail'";
  $db = config::getConnexion();

  try {
    $req = $db -> query($sql);
    $reqFetch = $req -> fetch();
    $existe = $reqFetch[0];
  }

  catch (Exception $e) {
    die('Erreur: '.$e->getMessage());
  }

  if ($existe == 0) {
    header("Location: ../vues/connexion.php?msg=2");
  }

  else {
    $sql = "SELECT hash FROM utilisateur WHERE mail='$mail'";
    $db = config::getConnexion();

    try {
      $req = $db -> query($sql);
      $reqFetch = $req -> fetch();
      $hash = $reqFetch[0];
    }

    catch (Exception $e) {
      die('Erreur: '.$e->getMessage());
    }

    if (password_verify($mdp, $hash)) {
      $sql = "SELECT idUtilisateur, type_utilisateur, nom, prenom, entreprise FROM utilisateur WHERE mail='$mail'";
      $db = config::getConnexion();

      try {
        $req = $db -> query($sql);
        $reqFetch = $req -> fetch();
        $id = $reqFetch[0];
        $type = $reqFetch[1];
        $nom = $reqFetch[2];
        $prenom = $reqFetch[3];
        $entreprise = $reqFetch[4];
      }

      catch (Exception $e) {
        die('Erreur: '.$e->getMessage());
      }

      $_SESSION['idUtilisateur'] = $id;
      $_SESSION['type'] = $type;
      $_SESSION['nom'] = $nom;
      $_SESSION['prenom'] = $prenom;
      $_SESSION['entreprise'] = $entreprise;
      $_SESSION['bienvenue'] = true;

      if ($type === 'pilote') {
        header("Location: ../vues/donnees.php");
      }

      elseif ($type === 'gestionnaire') {
        header("Location: ../vues/gestionnaire.php");
      }

      elseif ($type === 'admin') {
        header("Location: ../vues/admin.php");
      }
    }

    else {
      header("Location: ../vues/connexion.php?msg=2");
    }
  }
}

else
{
  header("Location: ../vues/connexion.php?msg=2");
}
?>
