<?php /* Template Name: Digital */ ?>

<?php get_header(); ?>


<!-- *********************************** -->
<!-- ************* Header ************* -->
<!-- *********************************** -->
<?php 
$currentClassName = get_the_title(); ?>
<header class="header-Digital">
	<div class="container headerText">
		<div class="row">
			<div class="col headerContent">
				<h1 class="headerTitleContent text-white anim-2"><?php echo( $currentClassName) ?></h1>
			</div>
		</div>
	</div>
	<!-- Dégragé au dessus de la vidéo pour lisser les couleurs -->
<!--	<div class="container-fluid headerGradient">-->
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
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-1-xl.jpg" data-lightbox="galerie" data-title="La réalisation complète d’un site de e-commerce, pour un commerce de loisirs créatifs de Bourges qui souhaitait une offre digitale.">
						<figcaption>
							<h3>Iloveperles.fr</h3>
							<h4>un site pour proposer une offre digitale</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-1-xs.jpg" alt="La réalisation complète d’un site de e-commerce, pour un commerce de loisirs créatifs de Bourges qui souhaitait une offre digitale">
				</figure>
			</div>
			<!-- Fin image 1 -->
			<!-- Image 2 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-2b-xl.jpg" data-lightbox="galerie" data-title="Démonstrations et explications pour exploiter les données fournies par un CMS de e-commerce pour optimiser les ventes.">
						<figcaption>
							<h3>Aide à l’utilisation</h3>
							<h4>des interfaces digitales</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-2b-xs.jpg" alt="Démonstrations et explications pour exploiter les données fournies par un CMS de e-commerce pour optimiser les ventes">
				</figure>
			</div>
			<!-- Fin image 2 -->
			<!-- Image 3 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-3-xl.jpg" data-lightbox="galerie" data-title="Iconographie et textes pour faciliter la diffusion d’informations, MédiaComs réalise la gestion externalisée de tous les réseaux.">
						<figcaption>
							<h3>Publication</h3>
							<h4>réseaux sociaux</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-3-xs.jpg" alt="Iconographie et textes pour faciliter la diffusion d’informations, MédiaComs réalise la gestion externalisée de tous les réseaux">
				</figure>
			</div>
			<!-- Fin image 3 -->
			<!-- Image 4 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-5-xl.jpg" data-lightbox="galerie" data-title="Pour donner de la visibilité aux produits et aux services, MédiaComs travaille sur les identités numériques et les contenus digitaux.">
						<figcaption>
							<h3>Montberry.fr</h3>
							<h4>un site vitrine</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-5-xs.jpg" alt="Pour donner de la visibilité aux produits et aux services, MédiaComs travaille sur les identités numériques et les contenus digitaux">
				</figure>
			</div>
			<!-- Fin image 4 -->
			<!-- Image 5 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-4-xl.jpg" data-lightbox="galerie" data-title="Conception d’identité sociale et visuelle, pour contrôler et donner, on line, le meilleur de l’image d’une marque ou d’un produit.">
						<figcaption>
							<h3>Photos et contenus</h3>
							<h4>optimisés</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-4-xs.jpg" alt="Conception d’identité sociale et visuelle, pour contrôler et donner, on line, le meilleur de l’image d’une marque ou d’un produit">
				</figure>
			</div>
			<!-- Fin image 5 -->
			<!-- Image 6 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-6-xl.jpg" data-lightbox="galerie" data-title="Pour donner de la visibilité à un événement et le partager efficacement très rapidement, mise en place d’un blog optimisé.">
						<figcaption>
							<h3>Un blog</h3>
							<h4>autour d’un événement</h4>
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/digital/galerie-digital-6-xs.jpg" alt="Pour donner de la visibilité à un événement et le partager efficacement très rapidement, mise en place d’un blog optimisé">
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