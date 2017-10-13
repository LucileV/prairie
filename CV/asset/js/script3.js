$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 800; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			$('nav ul').slideToggle(500);
		});



setTimeout(function() { 
	$(".progress-bar-info").animate({left: '0px'} , 3000);
}, 500);




//button return
//
		// Add return on top button
	    $('body').append('<div id="returnOnTop" title="Retour en haut"></div>');
	    
	    // On button click, let's scroll up to top
	    $('#returnOnTop').click( function() {
	        $('html,body').animate({scrollTop: 0}, 'slow');
	    });
//fin button return






//form
  $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    }); 

//fin form
	$(".formcontact").slideToggle();
	$(".send").click(function(){
	    $(this).next().slideToggle();
	});

//fin form


	

});


