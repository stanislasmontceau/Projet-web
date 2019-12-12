<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="private" />
  <title>InfiniteMeasures</title>
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/connexion.css">
  <link rel="stylesheet" href="css/footer.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="videNav"></div>

    <div id="milieu">
      <div class="txtMilieu">
        <h1>Bienvenue</h1>
        <ion-icon name="contact"></ion-icon>
      </div>
        <form action="../modeles/login.php" method="post">
          <div class="formulaire">
            <ion-icon name="person"></ion-icon>
            <input type="text" name="user" placeholder="Nom d'utilisateur"><br>
          </div>
          <div class="formulaire">
            <ion-icon name="lock"></ion-icon>
            <input type="password" name="pass" placeholder="Mot de passe"><br><br><br>
          </div>
          <div class="envoyer">
            <input type="submit" name="env" value="Se connecter">
          </div>
        </form>
    </div>

    <?php include('footer.php'); ?>

  <script src="js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
