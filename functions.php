<?php
function wp_theme_x_enqueue_style() {
 wp_enqueue_style( 'styles',  get_template_directory_uri().'/css/wp_theme_x.css', false );
}
function wp_theme_x_enqueue_script() {
 wp_enqueue_script( 'javascripts', get_template_directory_uri(). '/js/wp_theme_x.js', false );
}
add_action( 'wp_enqueue_scripts', 'wp_theme_x_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'wp_theme_x_enqueue_script' );

/////////////////////////////////////
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
