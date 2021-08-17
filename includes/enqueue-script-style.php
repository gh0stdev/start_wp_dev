<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'sp_styles' );
function sp_styles() {
    wp_enqueue_style( 'sp-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'sp-style', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'sp_scripts' );
function sp_scripts() {
    wp_enqueue_script( 'sp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
