<?php
/*
Plugin Name: Word press cours pour radio lycée
Description: partie de cours avec slides
Version: 1.1
License: GPL
Author: Lacroix christophe
Author URI: https://lacroix-c.fr
*/

// define ( 'DEV_URL', plugin_dir_url ());
global $wpdb;

plugins_url( '/js/modernizr.js', __FILE__ );

$dir = plugin_dir_url( '/css/style.css', __FILE__ );

// $dirC = WP_PLUGIN_DIR();

function shortcode_flexSlide(){
    include "eleve.php"; 
   
    }

add_shortcode('flexSlide', 'shortcode_flexSlide');





function flexSlideCss(){
    // wp_enqueue_style( 'style', WP_PLUGIN_DIR );
    wp_enqueue_style( 'bootstrap',  plugins_url( 'css/bootstrap.min.css', __FILE__ ) );
    wp_enqueue_style( 'style',  plugins_url( 'css/style.css',  __FILE__ ) );
    wp_enqueue_style( 'flexslider',  plugins_url( 'css/flexslider.css',__FILE__ )  );
}

add_action('wp_enqueue_scripts', 'flexSlideCss');
    

function add_scripts() {
    
    wp_enqueue_script( 'jsDemo',  plugins_url('/js/demo.js', __FILE__ )  );
    wp_enqueue_script( 'jquery.flexslider',  plugins_url('js/jquery.flexslider.js', __FILE__ ) );
    wp_enqueue_script( 'modrn',  plugins_url('/js/modernizr.js', __FILE__ ) );
    wp_enqueue_script( 'jsCore',  plugins_url('/js/shCore.js', __FILE__ )  );
    wp_enqueue_script( 'jsbrushX',  plugins_url( '/js/shBrushXml.js', __FILE__ )  );
    wp_enqueue_script( 'jsbrushJS',  plugins_url( '/js/shBrushJScript.js', __FILE__ ) );
       
    
}
add_action('wp_enqueue_scripts', 'add_scripts');
?>