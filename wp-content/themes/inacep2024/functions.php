<?php

function load_css(){
    wp_register_style( 'style', get_stylesheet_directory_uri() . '/css/styles.css' );
    wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_scripts', 'load_css' );

function load_js(){
    wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', 'jquery', false, true );
    wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'load_js' );
