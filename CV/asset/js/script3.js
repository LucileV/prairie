$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 1000; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});

$(".progress-bar-info").animate({left: '0px'} , 1000);
		 


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

jQuery(function($){
    	$( '.menu-btn' ).click(function(){
    		$('.responsive-menu').addClass('expand')
    		$('.menu-btn').addClass('btn-none')
    	})
    	
    	 $( '.close-btn' ).click(function(){
    		$('.responsive-menu').removeClass('expand')
    		$('.menu-btn').removeClass('btn-none')
    	})
  	})
	

});


