<?PHP
session_start();
include "config.php";

$lang = substr($_SERVER['HTTP_REFERER'],33,2);

$mail = htmlspecialchars($_POST['mail']);
$mdp = htmlspecialchars($_POST['mdp']);

if (isset($mail) && isset($mdp)) {


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
    if ($lang == "fr") {
      header("Location: ../vues/fr/connexion.php?msg=2");
    }

    elseif ($lang == "en") {
      header("Location: ../vues/en/signin.php?msg=2");
    }
  }

  else {
    $sql = "SELECT mot_de_passe FROM utilisateur WHERE mail='$mail'";
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
      $_SESSION['mail'] = $mail;
      $_SESSION['entreprise'] = $entreprise;
      $_SESSION['bienvenue'] = true;

      if ($type === 'pilote') {
        if ($lang == "fr") {
          header("Location: ../vues/fr/donnees.php");
        }

        elseif ($lang == "en") {
          header("Location: ../vues/en/data.php");
        }
      }

      elseif ($type === 'gestionnaire') {
        if ($lang == "fr") {
          header("Location: ../vues/fr/gestionnaire.php");
        }

        elseif ($lang == "en") {
          header("Location: ../vues/en/manager.php");
        }
      }

      elseif ($type === 'admin') {
        header("Location: ../vues/" . $lang . "/admin.php");
      }
    }

    else {
      if ($lang == "fr") {
        header("Location: ../vues/fr/connexion.php?msg=2");
      }

      elseif ($lang == "en") {
        header("Location: ../vues/en/signin.php?msg=2");
      }
    }
  }
}

else
{
  if ($lang == "fr") {
    header("Location: ../vues/fr/connexion.php?msg=2");
  }

  elseif ($lang == "en") {
    header("Location: ../vues/en/signin.php?msg=2");
  }
}
?>
