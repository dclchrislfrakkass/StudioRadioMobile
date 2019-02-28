    

// <a href="#footer" class="smooth">contact</a>

    $('.smooth').click(function () {
        var page = $(this).attr('href');
        var coordonnees = $(page).offset().top; // $(page) = $('#footer')
        var speed = 750; // 1000 = 1s
       
        $('html, body').animate({scrollTop: coordonnees}, speed); // Go
    });