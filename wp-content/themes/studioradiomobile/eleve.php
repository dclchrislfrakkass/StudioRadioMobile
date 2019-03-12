<?php /* Template name: Page_eleve */ ?>


<!-- Syntax Highlighter -->
    <link href="css/shCore.css" rel="stylesheet" type="text/css" />
    <link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
    <!-- Demo CSS -->
        <link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Modernizr -->
    <script src="js/modernizr.js"></script>

    <style type="text/css">
        .flex-caption {
        width: 96%;
        padding: 2%;
        left: 0;
        bottom: 0;
        background: rgba(0,0,0,.5);
        color: #fff;
        text-shadow: 0 -1px 0 rgba(0,0,0,.3);
        font-size: 14px;
        line-height: 18px;
        }
        li.css a {
        border-radius: 0;
        }
        main {
            justify-content: center;
        }
    </style>



<body class="loading">

<div id="container" class="cf">
    <header role="navigation">
    <a class="logo" href="" title="Radio Lycée">
        <img src="images/logo.png" alt="radio lycée" />
    </a>
    <h1>Découvrir la radio</h1>
    <h2>Un premier pas.</h2>
    <!-- <a class="button green" href="https://github.com/woothemes/FlexSlider/zipball/master">Download Flexslider</a>
    <h3 class="nav-header">Other Examples</h3>
    <nav>
        <ul>
        <li><a href="index.html">Basic Slider</a></li>
        <li><a href="basic-slider-with-custom-direction-nav.html">Basic Slider customDirectionNav</a></li>
        <li class="active"><a href="basic-slider-with-caption.html">Basic Slider with Simple Caption</a></li>
        <li><a href="thumbnail-controlnav.html">Slider w/thumbnail controlNav pattern</a></li>
        <li><a href="thumbnail-slider.html">Slider w/thumbnail slider</a></li>
        <li><a href="basic-carousel.html">Basic Carousel</a></li>
        <li><a href="carousel-min-max.html">Carousel with min and max ranges</a></li>
        <li><a href="dynamic-carousel-min-max.html">Carousel with dynamic min/max ranges</a></li>
        <li><a href="video.html">Video & the api (vimeo)</a></li>
        <li><a href="video-wistia.html">Video & the api (wistia)</a></li>
        </ul>
    </nav>
    <h3 class="nav-header">RTL Examples</h3>
    <nav>
        <ul>
        <li><a href="index-rtl.html">Basic Slider</a></li>
        <li><a href="asnavfor-rtl.html">Slider with Simple Caption w/thumbnail slider</a></li>
        <li><a href="basic-carousel-rtl.html">Basic Carousel</a></li>
        </ul>
    </nav> -->
    </header>

    <div id="main" role="main">
    <section class="slider">
        <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="/wp-content/themes/studioradiomobile/images/generalite/ecriture.001.jpg" />
            <p class="flex-caption">AAAA <a href="test.html"><i class="fas fa-angle-double-down"></i>test</a></p>
                </li>
                <li>
                <img src="images/generalite/ecriture.001.jpg" />
            <p class="flex-caption">Adventurer Lemon</p>
                </li>
                <li>
                <img src="images/generalite/ecriture.001.jpg" />
            <p class="flex-caption">Adventurer Donut</p>
                </li>
                <li>
                <img src="images/generalite/ecriture.001.jpg" />
            <p class="flex-caption">Adventurer Caramel</p>
                </li>
        </ul>
        </div>
    </section>

    </div>

</div>

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>

<script type="text/javascript">
    $(function(){
    SyntaxHighlighter.all();
    });
    $(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
        $('body').removeClass('loading');
        }
    });
    });
</script>


<!-- Syntax Highlighter -->
<script type="text/javascript" src="js/shCore.js"></script>
<script type="text/javascript" src="js/shBrushXml.js"></script>
<script type="text/javascript" src="js/shBrushJScript.js"></script>

<!-- Optional FlexSlider Additions -->
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script defer src="js/demo.js"></script>

</body>

<!-- 
<?php 
$currentClassName = get_the_title(); ?> -->


<main class="d-flex auto-mx mt-5">


    <!--button to scroll up -->
    <button onclick="topFunction()" id="btnUp" title="Go to top"><i class="fas fa-angle-double-up"></i></button>

    <script>
    // after scrolling down from 20px, button become visible
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("btnUp").style.display = "block";
    } else {
        document.getElementById("btnUp").style.display = "none";
    }
    }

    // after clicking going to top
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    </script>

	
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else : ?>
	
    <h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
    <p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>

<?php endif; ?>

<section>









</section>




</main>


<?php get_footer(); ?>
