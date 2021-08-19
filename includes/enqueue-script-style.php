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
    wp_enqueue_style('main-style',  get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('core-style',  get_template_directory_uri() . '/assets/css/core.min.css');
    wp_enqueue_style('ss-style',  get_template_directory_uri() . '/assets/css/ss.min.css');
    wp_enqueue_style('template-style',  get_template_directory_uri() . '/assets/css/template_styles.css');
}

add_action( 'wp_enqueue_scripts', 'sp_scripts' );
function sp_scripts() {
    wp_enqueue_script( 'sp-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'sp-template', get_template_directory_uri() . '/assets/js/template.js');
    wp_enqueue_script( 'sp-kernel', get_template_directory_uri() . '/assets/js/kernel_main.js');
    wp_enqueue_script( 'sp-socialservices', get_template_directory_uri() . '/assets/js/kernel_socialservices.js');
    wp_enqueue_script( 'sp-site', get_template_directory_uri() . '/assets/js/site.js');

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
