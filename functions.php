<?php
/**
 * Cyberpunk Resume Theme Functions
 */

function cyberpunk_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'cyberpunk-fonts', 'https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap', array(), null );
    
    // Enqueue Main Stylesheet
    wp_enqueue_style( 'cyberpunk-style', get_stylesheet_uri(), array('cyberpunk-fonts') );
    
    // Enqueue Main Script
    wp_enqueue_script( 'cyberpunk-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'cyberpunk_scripts' );

function cyberpunk_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'cyberpunk_setup' );
