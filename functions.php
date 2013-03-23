<?php

function fss_load_assets() {
  // Styles
  wp_register_style( 'webfont', get_stylesheet_directory_uri() . '/webfonts/stylesheet.css' );
  wp_enqueue_style('fss', get_stylesheet_uri(), array('webfont'));

  // Scripts
  wp_enqueue_script( 'modernizer', get_stylesheet_directory_uri() . '/js/modernizr.custom.79639.js' );
  wp_register_script( 'bacond', get_stylesheet_directory_uri() . '/js/jquery.ba-cond.min.js', array('jquery'));
  wp_register_script( 'slitslider', get_stylesheet_directory_uri() . '/js/jquery.slitslider.js', array('jquery', 'bacond'));
  wp_enqueue_script( 'fsscustom', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery', 'bacond', 'slitslider'));
}
add_action('wp_enqueue_scripts', 'fss_load_assets');