<?php
/**
 * functions.php
 */

add_action( 'wp_enqueue_scripts', function () {
    /**
     * Styles
     */
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'roboto', get_template_directory_uri() . '/assets/css/font/roboto.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font/fontawesome.min.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', array( 'bootstrap', 'roboto', 'fontawesome' ) );

    /**
     * Scripts
     */
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', [], '3.5.1', true );
    wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], '1.16.0', true );
    wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array( 'jquery', 'popper' ), '4.5.0', true );
} );

add_action( 'after_setup_theme', function () {
    add_theme_support( 'html5' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
} );
