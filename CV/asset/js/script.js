$(document).ready(function(){

		alert('coucou');

	    // au clic sur un lien
	    $('a.scroll').on('click', function(evt){
	       // bloquer le comportement par défaut: on ne rechargera pas la page
	       evt.preventDefault(); 
	       // enregistre la valeur de l'attribut  href dans la variable target
		var target = $(this).attr('href');
	       /* le sélecteur $(html, body) permet de corriger un bug sur chrome 
	       et safari (webkit) */
		$('html, body')
	       // on arrête toutes les animations en cours 
	       .stop()
	       /* on fait maintenant l'animation vers le haut (scrollTop) vers 
	        notre ancre target */
	       .animate({scrollTop: $(target).offset().top}, 1000 );
	    });


		$("h3").toggleClass("selected");

		$("#sticker").sticky({topSpacing:0});

		//$('.fadeIn').fadeIn(1000);

		//$(".bar").hide();
		//$(".bar").show( 1000);
		$(".bar").animate({left: '0px'} , 1000);
		 
				


		//
		//
		//
		//
		//

		$( "h3" ).css( 'cursor', 'pointer' );


		
		$('h3').click( function(event)
		       {	
				   
				    $(this).toggleClass('orange'); 
				    $(this).next().slideToggle( 1000);

		        }
		 );


		// Add return on top button
	    $('body').append('<div id="returnOnTop" title="Retour en haut"></div>');
	    
	    // On button click, let's scroll up to top
	    $('#returnOnTop').click( function() {
	        $('html,body').animate({scrollTop: 0}, 'slow');
	    });




	// Test for placeholder support
    $.support.placeholder = (function(){
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('.form-label').each(function(){
            $(this).addClass('js-hide-label');
        });  

        // Code for adding/removing classes here
        $('.form-group').find('input, textarea').on('keyup blur focus', function(e){
            
            // Cache our selectors
            var $this = $(this),
                $parent = $this.parent().find("label");

            if (e.type == 'keyup') {
                if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label'); 
                } else {
                    $parent.removeClass('js-hide-label');   
                }                     
            } 
            else if (e.type == 'blur') {
                if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label');
                } 
                else {
                    $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                }
            } 
            else if (e.type == 'focus') {
                if( $this.val() !== '' ) {
                    $parent.removeClass('js-unhighlight-label');
                }
            }
        });
    } 

    $(".container").fadeIn(8000);




});


		$(window).scroll(function() {
		    // If on top fade the bouton out, else fade it in
		    if ( $(window).scrollTop() == 0 )
		        $('#returnOnTop').fadeOut();
		    else
		        $('#returnOnTop').fadeIn();
		});


