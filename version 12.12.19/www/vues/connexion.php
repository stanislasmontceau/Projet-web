<?PHP
session_start();

if (isset($_SESSION['type'])) {
  if ($_SESSION['type'] == "pilote") {
    header('Location: donnees.php');
  }
  if ($_SESSION['type'] == "gestionnaire") {
    header('Location: gestionnaire.php');
  }
  if ($_SESSION['type'] == "admin") {
    header('Location: admin.php');
  }
}
?>

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
      <div class="message">
        <?PHP if($_GET['msg'] == 1): ?>
        <p class="inscription">Votre compte a été créé !<br>
          Vous pouvez vous connecter.</p>

        <?PHP elseif($_GET['msg'] == 2): ?>
        <p class="invalide">L'adresse e-mail ou le mot de passe que vous avez entré n'est pas valide.<br>
          Veuillez réessayer.</p>

        <?PHP else: ?>
        <?PHP endif; ?>
      </div>
      <form action="../controleurs/connexion.php" method="post">
        <div class="formulaire">
          <ion-icon name="person"></ion-icon>
          <input type="text" name="mail" placeholder="Adresse mail"><br>
        </div>
        <div class="formulaire">
          <ion-icon name="lock"></ion-icon>
          <input type="password" name="mdp" placeholder="Mot de passe"><br><br><br>
        </div>
        <div class="envoyer">
          <input type="submit" name="env" value="Se connecter">
        </div>
      </form>
    </div>

    <?php include('footer.php'); ?>

  <script src="js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/scriptJQuery.js"></script>
</body>
</html>
