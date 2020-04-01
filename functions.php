<?php
 
function loadHeader () {
    wp_enqueue_script("slide_scripts", get_theme_file_uri("/js/scripts-bundled.js"), NULL, microtime(), true);
    wp_enqueue_style('cstm_fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());
 }

function features() {
    add_theme_support("title-tag");
}

add_action('wp_enqueue_scripts', 'loadHeader');
add_action('after_setup_theme', 'features');
