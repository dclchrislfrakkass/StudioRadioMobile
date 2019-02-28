<?php get_header(); ?>

<!-- *********************************** -->
<!-- ************* Header ************* -->
<!-- *********************************** -->
<header>
	<div class="headerVideo">
		<!-- Dégragé au dessus de la vidéo pour lisser les couleurs -->
		<div class="container-fluid headerGradient">
		</div>



		<!-- Vidéo -->
		<video class="" height="100%" autoplay muted="muted" loop>
			<source src="<?php bloginfo( 'template_url' ); ?>/assets/videos/header-video.mp4" type="video/mp4">    					
			</video>
		</div>


		<div class="container headerText">
			<div class="row">
				<div class="col-lg-7 mediaQuery-center-end">
					<h1 class="headerTitleBold text-white text-lg-left anim-1">Qualité</h1>
					<h1 class="headerTitleLight text-white anim-2">Pédagogie</h1>
					<h1 class="headerTitleBold text-white text-lg-right anim-3">Passion</h1>
					<h1 class="headerTitleLight text-white text-lg-left anim-4">Dynamisme</h1>
				</div>
			</div>
		</div>

	</header>

	<main>

		<!-- ************* Présentation ************* -->
		<!-- ***************************************** -->
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else : ?>

		<h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
		<p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>


	<?php endif; ?>

	

	<!-- ************* Les liens ************* -->
	<!-- ************************************ -->




</main>


<?php get_footer(); ?>