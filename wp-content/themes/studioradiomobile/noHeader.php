<?php /* Template name: noHeader */ ?>
<style>
html {
scroll-behavior: smooth;
}

#btnUp {
display: none;
position: fixed;
bottom: 20px;
right: 30px;
z-index: 99;
font-size: 18px;
border: none;
outline: none;
background-color: #e85a32;
color: white;
cursor: pointer;
padding: 15px;
border-radius: 4px;
}

#btnUp:hover {
background-color: #ffa500;
}
</style>

<?php get_header(); ?>
<!-- *********************************** -->
<!-- ************* Header ************* -->
<!-- *********************************** -->
<?php 
$currentClassName = get_the_title(); ?>


<main>
    <!-- ************* Présentation ************* -->
    <!-- ***************************************** -->
	

    <!--button to scroll up -->
    <button onclick="topFunction()" id="btnUp" title="Go to top">Top</button>

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
