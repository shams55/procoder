<?php
/*
    
*My Theme Functions

*/

// Theme support
// add_theme_support('title-tag');

// Theme css and jquery fiel calling

function all_css_js__file_calling(){
    wp_enqueue_style('all-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.3.5', 'all');

    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // jQuery

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.bundle.min.js', array(), '5.3.5', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
    // wp_enqueue_script('jquery');
    
}

add_action('wp_enqueue_scripts', 'all_css_js__file_calling');


?>