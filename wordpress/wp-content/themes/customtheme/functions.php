<?php
function custom_theme_assets() {
    wp_register_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-style');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('bootstrap');
	
    wp_enqueue_style( 'style', get_stylesheet_uri());
}
    add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

    //pots thumbnail 
    add_theme_support( 'post-thumbnails' );

