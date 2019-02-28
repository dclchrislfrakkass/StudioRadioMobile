<?php
//Ajouter un menu wp pour admin
// add_theme_support( 'nav_menus' );
// register_nav_menus( 'main', 'Navigation principale' );

// Register Custom Navigation Walker
//require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

// Register Custom Navigation Walker
require_once('class-wp-bootstrap-navwalker.php');

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'mediacoms' ),
) );


/**
 * Enqueue scripts
 *
 * @param string $handle Script name
 * @param string $src Script url
 * @param array $deps (optional) Array of script names on which this script depends
 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
 */
function theme_mediacoms_scripts() {
	// déconnection à jquery avant de le recharger, pour éviter des conflits s'il est déjà appelé
	// wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'lightbox', get_theme_file_uri( '/assets/js/lightbox.min.js' ), array( 'jquery' ), false, true );
	wp_enqueue_script( 'mediacoms', get_theme_file_uri( '/assets/js/mediacoms.js' ), array( 'jquery' ), false, true );
	
	//////styles CSS
	wp_enqueue_style( 'bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css' );

	// Lien vers le style du thème
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lora|Open+Sans:300,400,700,800" rel="stylesheet"' );
	wp_enqueue_style( 'ligthbox-style', get_theme_file_uri( '/assets/css/lightbox.css' ) );
	wp_enqueue_style( 'mediacoms-style', get_stylesheet_uri() );
	wp_enqueue_style( 'mediacom-style-content', get_theme_file_uri( '/assets/css/mediacoms_content_styles.css' ));
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'theme_mediacoms_scripts' );



//ajout de colonnes en shortcodes pour les contacts forms
add_filter( 'wpcf7_form_elements', 'delicious_wpcf7_form_elements' );
 
function delicious_wpcf7_form_elements( $form ) {
$form = do_shortcode( $form );
return $form;
}





?>