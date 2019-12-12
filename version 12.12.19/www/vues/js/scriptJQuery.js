$("#bienvenue").delay(1300).slideUp();

// -------------------------------------------------------------------------

$window = $(window);

var hauteurPrecedente = 0;

$window.on('scroll', function(){
  var scrollTop = $window.scrollTop();
  $('nav').toggleClass('cacherDefilement', scrollTop > hauteurPrecedente);
  $('#menuDeroulant').toggleClass('cacherDefilement', scrollTop > hauteurPrecedente);

  if (scrollTop < hauteurPrecedente) {
    $('#backtotop').fadeOut(300);
  }
  else if (scrollTop > hauteurPrecedente) {
    $('#backtotop').fadeIn(300);
  }
  hauteurPrecedente = scrollTop;

// -------------------------------------------------------------------------

  $('.animer').each( function(){

    var hautObjet = $(this).offset().top;
    var basObjet = $(this).offset().top + $(this).outerHeight();
    var basFenetre = $window.scrollTop() + $window.height();

    if (basFenetre > basObjet) {
      $(this).animate({'opacity':'1'},500);
    }
  });

});

$("#bouton").on('click', function(){
  $("#menuDeroulant").slideToggle("fast").toggleClass("cacherMenuDeroulant");
})

$("#boutonMenuGauche").on('click', function(){
  $("#iconeMenuGauche").toggleClass("blanc");
  $("#menuGauche").animate({width:'toggle'},200).toggleClass("cacherMenuGauche");
})

$("#boutonUtilisateur").on('click', function(){
  $("#menuUtilisateur").slideToggle("fast").toggleClass("cacherMenuUtilisateur");
})
