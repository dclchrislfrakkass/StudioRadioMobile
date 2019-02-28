<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo('title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body>

	<!-- *************************************** -->
	<!-- ************* Navigation ************* -->
	<!-- *************************************** -->
	<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo( 'template_url' ); ?>/assets/images/studioradiomobile.png" height="45" alt="Studio Radio">
			</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<?php
			wp_nav_menu( array(
				'menu'              => 'primary',
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'navbar-collapse collapse justify-content-end',
				'container_id'      => 'navbar',
				'menu_class'        => 'navbar-nav',
				
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker()
			));
			?>
		</div>
	</nav>
