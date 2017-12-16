<?php
function wp_theme_x_enqueue_style() {
 wp_enqueue_style( 'styles', 'css/wp_theme_x.css', false );
}

function wp_theme_x_enqueue_script() {
 wp_enqueue_script( 'javascripts', 'js/wp_theme_x.js', false );
}

add_action( 'wp_enqueue_scripts', 'wp_theme_x_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'wp_theme_x_enqueue_script' );
