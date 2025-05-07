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

function afficher_calendrier_google()
{
    $iframe = '<iframe src="https://calendar.google.com/calendar/embed?src=2951002953d202c4fd9e726923f7d29fbb626a75206b819dbcb4255512a6338c%40group.calendar.google.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>';
    return $iframe;
}
add_shortcode('calendrier_google', 'afficher_calendrier_google');
