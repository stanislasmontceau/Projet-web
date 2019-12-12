<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi">
  <meta http-equiv="Cache-control" content="private" />
  <title>InfiniteMeasures</title>
  <link rel="stylesheet" href="css/nav2.css">
  <link rel="stylesheet" href="css/recherche.css">
  <link rel="stylesheet" href="css/menuGauche.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
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
        <div class="txtMilieu">
          <h1>Recherche</h1>
        </div>
          <form>
            <div class="formulaire">
              <ion-icon name="person"></ion-icon>
              <input type="text" name="user" placeholder="Nom du pilote"><br>
            </div>
            <div class="envoyer">
              <input type="submit" name="env" value="Rechercher">
            </div>
          </form>
        </div>
      </div>

  </div>

  <?php include('footer.php'); ?>

  <script src="js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
