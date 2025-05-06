<?php
add_action('wp_enqueue_scripts', 'zest_child_enqueue_styles');
function zest_child_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function afficher_calendrier_google()
{
    $iframe = '<iframe src="https://calendar.google.com/calendar/embed?src=2951002953d202c4fd9e726923f7d29fbb626a75206b819dbcb4255512a6338c%40group.calendar.google.com&ctz=Europe%2FParis" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>';
    return $iframe;
}
add_shortcode('calendrier_google', 'afficher_calendrier_google');
