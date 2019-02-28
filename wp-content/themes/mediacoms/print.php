<?php /* Template Name: Print */ ?>

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
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-1-xl.jpg" data-lightbox="galerie" data-title="Imprimer pas cher des cartes de visite, flyers, prospectus, affiches, plaquettes ou dépliants.">
						<figcaption>
							<h3>Cartes de visite</h3>
							<!-- <h4>Description du projet</h4> -->
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-1-xs.jpg" alt="Imprimer pas cher des cartes de visite, flyers, prospectus, affiches, plaquettes ou dépliants">
				</figure>
			</div>
			<!-- Fin image 1 -->
			<!-- Image 2 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-2-xl.jpg" data-lightbox="galerie" data-title="Goodies et objets pub pour événementiel, restauration, cadeaux d’entreprises… plus de 10 000 références.">
						<figcaption>
							<h3>Objets publicitaires</h3>
							<!-- <h4>Description du projet</h4> -->
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-2-xs.jpg" alt="Goodies et objets pub pour événementiel, restauration, cadeaux d’entreprises… plus de 10 000 références">
				</figure>
			</div>
			<!-- Fin image 2 -->
			<!-- Image 3 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-3-xl.jpg" data-lightbox="galerie" data-title="Imprimer pas cher des cartes de visite, flyers, prospectus, affiches, plaquettes ou dépliants.">
						<figcaption>
							<h3>Flyers et Dépliants</h3>
							<!-- <h4>Description du projet</h4> -->
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-3-xs.jpg" alt="Imprimer pas cher des cartes de visite, flyers, prospectus, affiches, plaquettes ou dépliants">
				</figure>
			</div>
			<!-- Fin image 3 -->
			<!-- Image 4 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-4-xl.jpg" data-lightbox="galerie" data-title="Imprimer pas cher des supports de grandes dimensions pour PLV, salon et exposition.">
						<figcaption>
							<h3>Roll Up – Kakémono</h3>
							<<!-- h4>Description du projet</h4> -->
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-4-xs.jpg" alt="Imprimer pas cher des supports de grandes dimensions pour PLV, salon et exposition">
				</figure>
			</div>
			<!-- Fin image 4 -->
			<!-- Image 5 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-5-xl.jpg" data-lightbox="galerie" data-title="Imprimer pas cher des cartes de visite, flyers, prospectus, affiches, plaquettes ou déplaints.">
						<figcaption>
							<h3>Cartes de fidélité</h3>
							<!-- <h4>Description du projet</h4> -->
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-5-xs.jpg" alt="Imprimer pas cher des cartes de visite, flyers, prospectus, affiches, plaquettes ou déplaints">
				</figure>
			</div>
			<!-- Fin image 5 -->
			<!-- Image 6 -->
			<div class="col-6 col-md-4">
				<figure>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-6-xl.jpg" data-lightbox="galerie" data-title="Signalétique extérieure sur véhicule ou fixe,  décoration, drapeaux, voiles, beach flag, totem…">
						<figcaption>
							<h3>Marquage personnalisé</h3>
							<!-- <h4>Description du projet</h4> -->
						</figcaption>
					</a>
					<img class="imgGalerie" src="<?php bloginfo( 'template_url' ); ?>/assets/images/realisations/print/galerie-print-6-xs.jpg" alt="Signalétique extérieure sur véhicule ou fixe,  décoration, drapeaux, voiles, beach flag, totem…">
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