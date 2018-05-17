$(window).load(function() {
  var duration = 1000;


  $('#ancre_partenaire').click(function()
  {
    $('html,body').animate({scrollTop: $("#footer_partenaire").offset().top}, 'slow'      );
  });
  //$('html,body').animate({scrollTop: $("#ancre_nav").offset().top}, 'slow'      );

  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      // Si un défillement de 100 pixels ou plus.
      // Ajoute le bouton
      $('.cRetour').fadeIn(duration);
    } else {
      // Sinon enlève le bouton
      $('.cRetour').fadeOut(duration);
    }
  });

  $('.cRetour').click(function(event) {
    // Un clic provoque le retour en haut animé.
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, duration);
    return false;
  });

});
