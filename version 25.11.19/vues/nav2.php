<nav>
    <div class="contenuNav">
      <div class="logoGauche">
        <h2>Infinite Measures</h2>
      </div>

      <button id="boutonMenuGauche" onclick="menuGauche()">
        <ion-icon name="menu"></ion-icon>
      </button>

      <div class="contenuNavDroite">
        <img src="https://i.imgur.com/N3SX8or.png">
        <p>Nom Prénom</p>
        <button id="boutonUtilisateur" onclick="menuUtilisateur()">
          <ion-icon name="arrow-dropdown"></ion-icon>
        </button>
      </div>

      <div id="menuUtilisateur">
        <p>
          <div class="objMenuUtilisateur">
            <ion-icon name="person"></ion-icon>
            <a href="profil.php">Mon profil</a>
          </div>
          <div class="objMenuUtilisateur">
            <ion-icon name="settings"></ion-icon>
            <a href="parametres.php">Paramètres</a>
          </div>
          <div class="objMenuUtilisateur">
            <ion-icon name="exit"></ion-icon>
            <a href="index.php">Déconnexion</a>
          </div>
        </p>
      </div>
    </div>
  </nav>
