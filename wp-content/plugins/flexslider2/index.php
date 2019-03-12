<?php
/*
Plugin Name: Word press cours pour radio lycée
Description: partie de cours avec slides
Version: 1.1
License: GPL
Author: Lacroix christophe
Author URI: https://lacroix-c.fr
*/

// define ( 'DEV_URL', plugin_dir_path ());
global $wpdb;

plugins_url( '/js/modernizr.js', __FILE__ );

$dir = plugin_dir_path( '/css/style.css', __FILE__ );

// $dirC = WP_PLUGIN_DIR();

function shortcode_flexSlide(){
    include "eleve.php"; 
   
    }

add_shortcode('flexSlide', 'shortcode_flexSlide');

$url = plugins_url();



// function flexSlideCss(){
//     // wp_enqueue_style( 'style', WP_PLUGIN_DIR );
//     wp_enqueue_style( 'bootstrap',  plugins_dir_url( '/css/bootstrap.min.css', __FILE__ ) );
//     wp_enqueue_style( 'style',  plugin_dir_url( '/css/style.css',  __FILE__ ) );
//     wp_enqueue_style( 'flexslider',  plugin_dir_url( __FILE__ ) . '/flexslider.css');
// }

// add_action('wp_head', 'flexSlideCss');
    

// function add_scripts() {

//     wp_enqueue_script( 'script',  plugin_dir_url( __FILE__ ) . '/js/script.js');
//     wp_enqueue_script( 'modrn',  plugin_dir_url( __FILE__ ) . '/js/modernizr.js');
//     wp_enqueue_script( 'jsCore',  plugin_dir_path( __FILE__ ) . '/js/shCore.js');
//     wp_enqueue_script( 'jsbrushX',  plugin_dir_path( __FILE__ ) . '/js/shBrushXml.js');
//     wp_enqueue_script( 'jsbrushJS',  plugin_dir_path( __FILE__ ) . '/js/shBrushJScript.js');
//     wp_enqueue_script( 'jsDemo',  plugin_dir_path( __FILE__ ) . '/js/demo.js');
       
    
// }
// add_action('wp_enqueue_scripts', 'add_scripts');
?>