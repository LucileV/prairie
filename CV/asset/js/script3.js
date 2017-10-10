$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 1000; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});

$(".progress-bar-info").animate({left: '0px'} , 1000);
		 
			








});




$(window).scroll(function() {
		    // If on top fade the bouton out, else fade it in
		    if ( $(window).scrollTop() == 0 )
		        $('#returnOnTop').fadeOut();
		    else
		        $('#returnOnTop').fadeIn();
		});


