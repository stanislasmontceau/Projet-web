<?PHP
include "../modeles/utilisateur.php";
include "../controleurs/utilisateurC.php";

$utilisateur1C=new UtilisateurC();
$listeUtilisateurs=$utilisateur1C->afficherUtilisateurs();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>InfiniteMeasures</title>
  <link rel="stylesheet" href="css/nav2.css">
  <link rel="stylesheet" href="css/listeUtilisateurs.css">
  <link rel="stylesheet" href="css/menuGauche.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- barre de navigation -->

  <?php include('nav2.php'); ?>
  <div class="videNav"></div>

  <div class="contenu">
	<?php include('menuAdmin.php'); ?>

    <!-- contenu -->

    <div id="milieu">
      <table class="tableau" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Utilisateur</th>
            <th>Type</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Mail</th>
            <th>Entreprise</th>
            <!--<th>Mot de passe</th>-->
            <th>Supprimer</th>
            <th>Modifier</th>
          </tr>
        </thead>
        <!--
        <tfoot>
          <tr>
            <th>ID Utilisateur</th>
            <th>Type</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Mail</th>
            <th>Entreprise</th>
            <th>Mot de passe</th>
            <th>Supprimer</th>
            <th>Modifier</th>
          </tr>
        </tfoot>
      -->
        <tbody>
          <?PHP foreach($listeUtilisateurs as $row){ ?>
            <tr>
              <td><?PHP echo $row['idUtilisateur']; ?></td>
              <td><?PHP echo $row['type_utilisateur']; ?></td>
              <td><?PHP echo $row['nom']; ?></td>
              <td><?PHP echo $row['prenom']; ?></td>
              <td><?PHP echo $row['date_naissance']; ?></td>
              <td><?PHP echo $row['mail']; ?></td>
              <td><?PHP echo $row['entreprise']; ?></td>
              <td><a href="#">Supprimer</a></td>
              <td><a href="#">Modifier</a></td>
            </tr>
            <?PHP } ?>
          </tbody>

        </table>
    </div>

  </div>

  <?php include('footer.php') ?>

  <script src="js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
