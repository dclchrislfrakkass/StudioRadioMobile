<?php
/*
Plugin Name: Word press cours pour radio lycée
Description: partie de cours avec slides
Version: 0.1
License: GPL
Author: Lacroix christophe
Author URI: https://lacroix-c.fr
*/
function shortcode_flexSlide(){
    include "eleves/index.php"; 
   
    }

add_shortcode('flexSlide', 'shortcode_flexSlide');



?>