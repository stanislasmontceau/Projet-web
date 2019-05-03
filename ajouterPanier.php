
<?php
session_start();
if(isset($_SESSION['login_user']) and $_SESSION['login_user']=="sarra"){
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Anti-Gaspinisie</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href=accueil.php>Anti-gaspinisie</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="notre histoire.html">Notre histoire</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Professionnels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Nos partenaires</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Panier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        <li class="nav-item">
           <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#logoutModal" >Logout
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i></a>
        </li>
          </li>
        </ul>
      </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>





<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Appuyez sur "Logout" pour quitter votre session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>






  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Panier <i class="fas fa-shopping-cart"></i></h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">


<body>
<form method="POST" action="ajoutPanier.php">
  <form method="post" class="user">



      <p>
      <label>*ID Client</label>
       <div class="form-group">
      <input type="number" name="id_client" placeholder="Entrer votre identifiant" class="form-control form-control-user" required="">
      <span id='missIDClient'></span>
      </div></p>


      <p>
      <label>ID Produit</label>
      <div class="form-group">
      <input type="number" name="id_pdt" placeholder="entrer id pdt" class="form-control form-control-user" >
      </div></p>

      <p>
      <label>Quantité</label>
      <div class="form-group">
      <input type="number" name="nb_article" placeholder="quantite" class="form-control form-control-user" >
      </div></p>

      <p>
      <label>Prix du produit</label>
      <div class="form-group">
      <input type="number" name="prix_unit" placeholder="prix unité" class="form-control form-control-user" >
      </div></p>

                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">

                         <td><input type="submit" name="ajouter" class="btn btn-primary btn-xl js-scroll-trigger" value="Valider et passer à la commande" id="ajouter"></td>

                         
                       </div>
                    </div>
                   </form>
                </form>
              </body>




          
          
         
        </div>
      </div>
    </div>
  </header>


  <script>
            var formValid = document.getElementById('ajouter');
            var pseudo = document.getElementById('pseudo');
            var sujet = document.getElementById('sujet');
            var description = document.getElementById('description');
            var missPrenom = document.getElementById('missPrenom');
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (((prenom.validity.valueMissing)&&(prenom.validity.valueMissing)&&(prenom.validity.valueMissing))){
                    event.preventDefault();
                }
            }
        </script>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Etudiants</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Choisissez votre restaurant, commandez votre plat, allez le chercher et déguster!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">En apprendre plus</a>
        </div>
      </div>
    </div>
  </section>


   <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails2/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Ecole
              </div>
              <div class="project-name">
                Esprit
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails2/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Fast-food
              </div>
              <div class="project-name">
                Hafood
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails2/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Boulangerie
              </div>
              <div class="project-name">
                Paul
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails2/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Hôtle 
              </div>
              <div class="project-name">
                Ibis
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails2/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Association humanitaire
              </div>
              <div class="project-name">
                Coeur et ACT
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="img/portfolio/thumbnails2/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Restons en contact!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Vous voulez nous contacter, nous donner votre avis? N'hésitez pas!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>
        </div>
        <div class="col-sm-6 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:stanislas.montceau@esprit.com">stanislas.montceau@esprit.com</a>
          </div>
        </div>
        <br>
      <div class="row">
        <div class="col-sm-6 ml-auto text-center">
          <a href="https://www.facebook.com/search/top/?q=gaspillage%20alimentaire%20tunisie&epa=SEARCH_BOX" class="fa fa-facebook fa-3x"></a>
          <div>Facebook</div>
        </div>
        <div class="col-sm-6 mr-auto text-center">
          <a href="https://www.mavoix.info/project/101/" class="fas fa-comments" style='font-size:36px'></a>
          <div>Forum</div>
        </div>
      </div>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

<?php
}
else{
    header("location: login.php"); 
}
?>


</HTMl>