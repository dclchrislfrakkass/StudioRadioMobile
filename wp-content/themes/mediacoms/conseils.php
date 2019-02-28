<?php /* Template Name: Conseils */ ?>

<?php get_header(); ?>


<!-- *********************************** -->
<!-- ************* Header ************* -->
<!-- *********************************** -->
<?php 
$currentClassName = get_the_title(); ?>
<header class="header-Conseils">
	<div class="container headerText">
		<div class="row">
			<div class="col headerContent">
				<h1 class="headerTitleContent text-white anim-2"><?php echo( $currentClassName) ?></h1>
			</div>
		</div>
	</div>
	<!-- Dégragé au dessus de la vidéo pour lisser les couleurs -->
<!--	<div class="container-fluid headerGradient270">-->
	</div>
</header>


<main>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; else : ?>
	
	<h4 class="text-center text-orange">Désolé, mais la page que vous recherchez n'existe pas ou plus.</h4><br/>
	<p class="text-center"><a href="<?php bloginfo( 'url' ); ?>" class="btn btn-warning">Retour à l'accueil</a></p>

<?php endif; ?>

<!-- ************* Galerie ************* -->
<!-- *********************************** -->
<section class="galerie bg-lightGrey">
	<div class="container">
		<h1 class="contentTitle">
			Quelques-unes<br /> de <span class="text-orange">nos</span> réalisations
		</h1>

		<div class="row">
			<!-- Image 1 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-1-xl.jpg" data-lightbox="galerie" data-title="Cours de communication corporate et digitale pour les IUT de Bourges, Tours, Blois et Issoudun.">
						<figcaption>
							<h3>L’université</h3>
							<h4>nous fait confiance</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-1-xs.jpg" alt="Cours de communication corporate et digitale pour les IUT de Bourges, Tours, Blois et Issoudun">
				</figure>
			</div>
			<!-- Fin image 1 -->
			<!-- Image 2 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-2-xl.jpg" data-lightbox="galerie" data-title="Session de formation à destination des futurs commandant d’unités de l’Armée Française.">
						<figcaption>
							<h3>Communication</h3>
							<h4>de crise et sensible</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-2-xs.jpg" alt="Session de formation à destination des futurs commandant d’unités de l’Armée Française">
				</figure>
			</div>
			<!-- Fin image 2 -->
			<!-- Image 3 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-3-xl.jpg" data-lightbox="galerie" data-title="La stratégie de communication expliquée aux futurs journalistes de l’Ecole Publique de Journaliste de Tours.">
						<figcaption>
							<h3>Intervention</h3>
							<h4>stratégie pour l’EPJT</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-3-xs.jpg" alt="La stratégie de communication expliquée aux futurs journalistes de l’Ecole Publique de Journaliste de Tours">
				</figure>
			</div>
			<!-- Fin image 3 -->
			<!-- Image 4 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-4-xl.jpg" data-lightbox="galerie" data-title="Définition et réflexion de campagne de communication, ici pour la sécurité routière du Cher.">
						<figcaption>
							<h3>Campagne</h3>
							<h4>institutionnelle</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-4-xs.jpg" alt="Définition et réflexion de campagne de communication, ici pour la sécurité routière du Cher">
				</figure>
			</div>
			<!-- Fin image 4 -->
			<!-- Image 5 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-5-xl.jpg" data-lightbox="galerie" data-title="Définition et réflexion de campagne de communication, ici pour la sécurité routière du Cher.">
						<figcaption>
							<h3>La presse</h3>
							<h4>parle de MédiaComs</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-5-xs.jpg" alt="Définition et réflexion de campagne de communication, ici pour la sécurité routière du Cher">
				</figure>
			</div>
			<!-- Fin image 5 -->
			<!-- Image 6 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>//assets/images/realisations/conseil/galerie-conseil-6-xl.jpg" data-lightbox="galerie" data-title="MédiaComs partage l’aventure des créateurs du territoire, ici pour une jeune marque de produits laitiers fermiers.">
						<figcaption>
							<h3>Identité visuelle</h3>
							<h4>pour MontBerry</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/conseil/galerie-conseil-6-xs.jpg" alt="L’agence MédiaComs partage l’aventure des créateurs du territoire, ici pour une jeune marque de produits laitiers fermiers">
				</figure>
			</div>
			<!-- Fin image 6 -->
		</div>
		<!-- Fin row -->
	</div>
	<!-- Fin container -->
</section>


<!-- ************* Les liens ************* -->
<!-- ************************************ -->
<section class="nosLiens">
	<div class="container">
		<h2 class="contentTitle">Nos liens <span class="text-orange">préférés</span></h2>
		<div class="row align-items-center">
			<div class="col-6 col-md-3 text-center">
				<a href="http://www.studioradiomobile.com"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/studioradiomobile.png" alt="Logo Studio Radio Mobile" ></a>
			</div>
			<div class="col-6 col-md-3 text-center">
				<a href="http://www.estacom.fr"><img class="logoLien" src="<?php bloginfo( 'template_url' ); ?>/assets/images/logos-liens/estacom.png" alt="Logo estacom" ></a>
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