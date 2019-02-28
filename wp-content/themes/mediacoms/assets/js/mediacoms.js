// SCROLL
////////////////////////
jQuery('.smooth').click(function () {
	var page = jQuery(this).attr('href');
        	var coordonnees = jQuery(page).offset().top; // $(page) = $('#footer')
        	var speed = 750; // 1000 = 1s

       jQuery('html, body').animate({scrollTop: coordonnees}, speed); // Go
     });
