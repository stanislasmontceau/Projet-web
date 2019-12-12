<?php
session_start();
include "../modeles/utilisateur.php";
include "../controleurs/utilisateurC.php";
/*$bdd = new PDO('mysql:host=localhost;dbname=hexanswers_db', 'root', '');*/
/*$bdd = new PDO('mysql-hexanswers.alwaysdata.net;dbname=hexanswers_db', 'root', '');*/
/*$bdd = new PDO('https://phpmyadmin.alwaysdata.com/phpmyadmin/db_structure.php?server=1&db=hexanswers_db&token=87654b3c36bd8aec813d8a760253b84a', 'root', '');*/

if(isset($_SESSION['idUtilisateur'])) {
    $requser = $bdd->prepare("SELECT * FROM utilisateur WHERE idUtilisateur = ?");
    $requser->execute(array($_SESSION['idUtilisateur']));
    $user = $requser->fetch();
    if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom']) {
        $newnom = htmlspecialchars($_POST['newnom']);
        $insertnom = $bdd->prepare("UPDATE utilisateur SET nom = ? WHERE idUtilisateur = ?");
        $insertnom->execute(array($newnom, $_SESSION['idUtilisateur']));
        header('Location: Profil.php?id='.$_SESSION['idUtilisateur']);
    }

    if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom']) {
        $newprenom = htmlspecialchars($_POST['newprenom']);
        $insertprenom = $bdd->prepare("UPDATE utilisateur SET prenom = ? WHERE idUtilisateur = ?");
        $insertprenom->execute(array($newprenom, $_SESSION['idUtilisateur']));
        header('Location: Profil.php?id='.$_SESSION['idUtilisateur']);
    }

    if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
        $newmail = htmlspecialchars($_POST['newmail']);
        $insertmail = $bdd->prepare("UPDATE utilisateur SET mail = ? WHERE idUtilisateur = ?");
        $insertmail->execute(array($newmail, $_SESSION['idUtilisateur']));
        header('Location: Profil.php?id='.$_SESSION['idUtilisateur']);
    }

    if(isset($_POST['newdob']) AND !empty($_POST['newdob']) AND $_POST['newdob'] != $user['date_naissance']) {
        $newdob = htmlspecialchars($_POST['newmail']);
        $insertdob = $bdd->prepare("UPDATE utilisateur SET date_naissance = ? WHERE idUtilisateur = ?");
        $insertdob->execute(array($newmail, $_SESSION['idUtilisateur']));
        header('Location: Profil.php?id='.$_SESSION['idUtilisateur']);
    }

    if(isset($_POST['newentreprise']) AND !empty($_POST['newentreprise']) AND $_POST['newentreprise'] != $user['entreprise']) {
        $newentreprise = htmlspecialchars($_POST['newentreprise']);
        $insertentrerpise = $bdd->prepare("UPDATE utilisateur SET entreprise = ? WHERE idUtilisateur = ?");
        $insertentrerpise->execute(array($newprenom, $_SESSION['idUtilisateur']));
        header('Location: Profil.php?id='.$_SESSION['idUtilisateur']);
    }

    if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
        $mdp1 = sha1($_POST['newmdp1']);
        $mdp2 = sha1($_POST['newmdp2']);
        if($mdp1 == $mdp2) {
            $insertmdp = $bdd->prepare("UPDATE utilisateur SET mot_de_passe = ? WHERE idUtilisateur = ?");
            $insertmdp->execute(array($mdp1, $_SESSION['idUtilisateur']));
            header('Location: Profil.php?id='.$_SESSION['idUtilisateur']);
        } else {
            $msg = "Vos deux mdp ne correspondent pas !";
        }
    }


if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
    $tailleMax = 2097152;
    $extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
    if ($_FILES['avatar']['size'] <= $tailleMax) {
        $extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
        if (in_array($extensionUpload, $extensionsValides)) {
            $chemin = "membres/avatars/" . $_SESSION['id'] . "." . $extensionUpload;
            $resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
            if ($resultat) {
                $updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
                $updateavatar->execute(array(
                    'avatar' => $_SESSION['id'] . "." . $extensionUpload,
                    'id' => $_SESSION['id']
                ));
                header('Location: Profil.php?id=' . $_SESSION['id']);
            } else {
                $msg = "Erreur durant l'importation de votre photo de profil";
            }
        } else {
            $msg = "Votre photo de profil doit être au format jpg, jpeg, gif ou png";
        }
    } else {
        $msg = "Votre photo de profil ne doit pas dépasser 2Mo";
    }
}
}
?>
