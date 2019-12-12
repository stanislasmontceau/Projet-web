<?PHP
session_start();
include "../modeles/utilisateur.php";
include "../controleurs/utilisateurC.php";

if(!isset($_SESSION['idUtilisateur']) OR $_SESSION['type'] != "admin") {
  header('Location: connexion.php');
}

$utilisateur1C=new UtilisateurC();
$listeUtilisateurs=$utilisateur1C->afficherUtilisateurs();
$listeUtilisateurs2=$utilisateur1C->afficherUtilisateurs();
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
  <link rel="stylesheet" href="css/popup.css">
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
  <?php include('popup.php'); ?>

    <!-- contenu -->

    <div id="milieu">
      <h2>Liste des utilisateurs</h2>

      <div id="tableauMobile">
        <?PHP foreach ($listeUtilisateurs2 as $row) { ?>
        <div class="cellule">
          <p class="titre">ID UTILISATEUR</p>
          <p class="valeur"><?PHP echo $row['idUtilisateur']; ?></p>

          <p class="titre">TYPE D'UTILISATEUR</p>
          <p class="valeur"><?PHP echo $row['type_utilisateur']; ?></p>

          <p class="titre">NOM</p>
          <p class="valeur"><?PHP echo $row['nom']; ?></p>

          <p class="titre">PRÉNOM</p>
          <p class="valeur"><?PHP echo $row['prenom']; ?></p>

          <p class="titre">DATE DE NAISSANCE</p>
          <p class="valeur"><?PHP echo $row['date_naissance']; ?></p>

          <p class="titre">MAIL</p>
          <p class="valeur"><?PHP echo $row['mail']; ?></p>

          <p class="titre">ENTREPRISE</p>
          <p class="valeur"><?PHP echo $row['entreprise']; ?></p>

          <p class="titre">ACTIONS</p>
          <p class="valeur">
            <form method="post" action="gererUtilisateurs.php" style="display:inline">
              <input type="hidden" name="idUtilisateur" value="<?PHP echo $row['idUtilisateur']; ?>">
              <button type="submit" name="btnModif" title="Envoyer"><img src="img/edit.png"></button>
            </form>

            <button type="submit" name="btnSupp" title="<?PHP echo $row['idUtilisateur']; ?>"><img src="img/supp.png"></button>

          </p>
        </div>
        <?PHP } ?>
      </div>

      <table class="tableau" cellspacing="0">
        <thead>
          <tr>
            <th>ID Utilisateur</th>
            <th>Type</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Mail</th>
            <th>Entreprise</th>
            <th>Actions</th>
          </tr>
        </thead>
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
              <td class="btnsTableau">
                <form method="post" action="gererUtilisateurs.php" style="display:inline">
                  <input type="hidden" name="idUtilisateur" value="<?PHP echo $row['idUtilisateur']; ?>">
                  <button type="submit" name="btnModif" title="Envoyer"><img src="img/edit.png"></button>
                </form>

                <button type="submit" name="btnSupp" title="<?PHP echo $row['idUtilisateur']; ?>"><img src="img/supp.png"></button>

              </td>
            </tr>
            <?PHP } ?>
          </tbody>
        </table>
    </div>

  </div>

  <?php include('footer.php'); ?>

  <script src="js/script.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/scriptJQuery.js"></script>
  <script>
    $("button[name='btnSupp']").on('click', function() {
      var id = $(this).attr('title');
      $(".message").text("Vous allez supprimer l'utilisateur " + id);
      $("#formPopup").attr("action", '../controleurs/supprimerUtilisateur.php');
      $("input[name='idPopup']").val(id);
      $('#popup').css("display", "block");
    })

    $("button[name='btnAnnuler']").on('click', function() {
      $('#popup').css("display", "none");
    })
  </script>
</body>
</html>
