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
					<h1 class="headerTitleBold text-white text-lg-left anim-1">Proximité</h1>
					<h1 class="headerTitleLight text-white anim-2">Confiance</h1>
					<h1 class="headerTitleBold text-white text-lg-right anim-3">Expertise</h1>
					<h1 class="headerTitleLight text-white text-lg-left anim-4">Réactivité</h1>
				</div>
			</div>
		</div>

	</header>

	<main>
		<!-- ************* Présentation ************* -->
		<!-- ***************************************** -->
		<section class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-10  ">
					<h1 class="sectionTitle sectionTitle360">
						La communication
						<!-- Div supplémentaire pour gérer le positionnement de l'image sur petits écrans(passage à la ligne) -->
						<div class="globale360 text-left">
							<div class="globale">globale
								<img class="img360" src="<?php bloginfo( 'template_url' ); ?>/assets/images/360.svg" alt="Illustration 360 de l'agence de communication MédiaComs">
							</div>
						</div>
					</h1>
					<h1 class="sectionTitle">
						by <span class="text-black fontWeight700">Média</span><span class="text-orange fontWeight700">Coms</span>
					</h1>
				</div>
			</div>
		</section>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; else : ?>

		<h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
		<p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>


	<?php endif; ?>

	

	<!-- ************* Les liens ************* -->
	<!-- ************************************ -->
	<section class="nosLiens bg-lightGrey">
		<div class="container">
			<h2 class="contentTitle">Nos liens <span class="text-orange">préférés</span></h2>
			<div class="row align-items-center">
				<div class="col-6 col-md-3 text-center">
					<a href="http://www.studioradiomobile.com"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/studioradiomobile.png" alt="Logo Studio Radio Mobile" ></a>
				</div>
				<div class="col-6 col-md-3 text-center">
					<a href="http://www.estacom.fr"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/estacom-fonce.png" alt="Logo estacom" ></a>
				</div>
				<div class="col-6 col-md-3 text-center">
					<a href="http://spheredigitale.fr"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/spheredigitale.png" alt="Logo Sphère Digitale" ></a>
				</div>
				<div class="col-6 col-md-3 text-center">
					<a href="http://www.jeunesocentre.fr"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/joc.png" alt="Logo JeunesOcentre" ></a>
				</div>
			</div>
		</div>
	</section>



</main>


<?php get_footer(); ?>