<?php
// Supprime les styles CSS du thème parent Hello Elementor
function zest_child_dequeue_parent_styles() {
    wp_dequeue_style( 'hello-elementor' );
    wp_dequeue_style( 'hello-elementor-theme-style' );
}
add_action( 'wp_enqueue_scripts', 'zest_child_dequeue_parent_styles', 20 );

// Charge uniquement ton propre style.css
function zest_child_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'zest_child_enqueue_styles' );
