<?php /* Template name: mentions */ ?>
<?php get_header(); ?>
<!-- *********************************** -->
<!-- ************* Header ************* -->
<!-- *********************************** -->
<?php 
$currentClassName = get_the_title(); ?>



<main>
    <!-- ************* Présentation ************* -->
    <!-- ***************************************** -->

  

	
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