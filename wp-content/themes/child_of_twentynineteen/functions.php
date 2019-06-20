<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentynineteen-style' for the Twenty Nineteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
 function wpb_add_google_fonts() {
 	wp_enqueue_style( 'wpb-google-fonts','https://fonts.googleapis.com/css?family=Montserrat|Noto+Sans&display=swap', false ); 
 }
 		add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
 }