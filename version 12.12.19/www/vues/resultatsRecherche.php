<?PHP
session_start();
include "../modeles/utilisateur.php";
include "../modeles/recherche.php";

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "gestionnaire") {
  header('Location: connexion.php');
}

$resultatsRecherche=rechercherUtilisateurs($_POST['nom']);
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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>

  <!-- barre de navigation -->

  <?php include('nav2.php'); ?>
  <div class="videNav"></div>

  <div class="contenu">
	<?php include('menuGestionnaire.php'); ?>

    <!-- contenu -->

    <div id="milieu">
        <div class="recherche">
            <input class="search-text" type = "text" name="" placeholder="Tapez un nom...">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
        </div>
      <h2>Résultats de la recherche</h2>
      <?PHP if (rechercherUtilisateurs($_POST['nom'])->fetch()): ?>
      <table class="tableau" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Utilisateur</th>
            <th>Type</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
          </tr>
        </thead>
        <tbody>
          <?PHP foreach($resultatsRecherche as $row){ ?>
            <tr>
              <td><?PHP echo $row['idUtilisateur']; ?></td>
              <td><?PHP echo $row['type_utilisateur']; ?></td>
              <td><?PHP echo $row['nom']; ?></td>
              <td><?PHP echo $row['prenom']; ?></td>
              <td><?PHP echo $row['mail']; ?></td>
            </tr>
            <?PHP } ?>
          </tbody>

        </table>
        <?PHP else: ?>
        <p>Aucun résultat trouvé pour "<?PHP echo $_POST['nom']; ?>"</p>
        <?PHP endif; ?>
    </div>

  </div>

  <?php include('footer.php') ?>

  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/scriptJQuery.js"></script>
</body>
</html>
