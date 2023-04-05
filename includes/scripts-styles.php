<?php
/*
@package voovusa
@subpackage voovusa
@since 1.0
*/

//Registering styles ans scrips


function voovusa_theme_styles(){

  wp_register_style('styles',themepath.'/style.css','all');

  wp_register_style('style', get_stylesheet_uri(),array('styles'),'1.0','all');

  //CSS files

  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts','voovusa_theme_styles');



//Registering and loading scripts


function voovusa_theme_scripts(){


  if(is_page_template( 'template-services.php') || is_page_template( 'template-services-mk.php')|| is_page_template( 'template-services-excecute-va.php')):
    wp_register_script('services',themepath.'/js/services.js',array('jquery'),'1.5.1',true);
    wp_enqueue_script('services');
  endif;
  if(is_front_page()):
    wp_register_script('homepage',themepath.'/js/homepage.js',array('jquery'),'1.5.1',true);
    wp_enqueue_script('homepage');
  endif;
  //Loading scripts
  wp_register_script('mobile-menu',themepath.'/js/mobile-menu.js',array('jquery'),'1.5.1',true);
  wp_enqueue_script('mobile-menu');
  }

  add_action('wp_enqueue_scripts','voovusa_theme_scripts');
