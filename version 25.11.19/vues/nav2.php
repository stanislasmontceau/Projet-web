<?PHP
session_start();
?>

<nav>
  <div class="contenuNav">
    <div class="logoGauche">
      <h2>Infinite Measures</h2>
    </div>

    <button id="boutonMenuGauche">
      <ion-icon id="iconeMenuGauche" name="menu"></ion-icon>
    </button>

    <div class="contenuNavDroite">
      <div class="avatar">
        <img src="../img/avatars/<?PHP echo $_SESSION['idUtilisateur'];?>.png">
      </div>
      <p><?PHP echo '' . htmlspecialchars($_SESSION['nom']) . ' ' .  htmlspecialchars($_SESSION['prenom']) . ''; ?></p>
      <button id="boutonUtilisateur">
        <ion-icon name="arrow-dropdown" style = "cursor: pointer"></ion-icon>
      </button>
    </div>

    <div id="menuUtilisateur" class="cacherMenuUtilisateur">
      <p>
        <div class="objMenuUtilisateur">
          <ion-icon name="person"></ion-icon>
          <a href="profil.php">Mon profil</a>
        </div>
        <div class="objMenuUtilisateur">
          <ion-icon name="exit"></ion-icon>
          <a href="../../controleurs/deconnexion.php">Déconnexion</a>
        </div>
      </p>
    </div>
  </div>
</nav>
