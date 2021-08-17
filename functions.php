<?php
/**
 * SegaPrototype functions and definitions
 * @package SegaPrototype
 */

/**
 * Require Carbon Fields
 */
add_action('after_setup_theme', 'crb_load');
function crb_load() {
    load_template(get_template_directory() . '/includes/carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'ast_register_custom_fields');
function ast_register_custom_fields() {
    require get_template_directory() . '/includes/custom-field-options/metabox.php';
    require get_template_directory() . '/includes/custom-field-options/theme-options.php';
}

/**
 * Require Theme Settings
 */
require get_template_directory() . '/includes/theme-settings.php';

/**
 * Require Widget Settings
 */
require get_template_directory() . '/includes/widget-areas.php';

/**
 * Require Scripts Styles Settings
 */
require get_template_directory() . '/includes/enqueue-script-style.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}

/**
 * Helper additions functions.
 */
require get_template_directory() . '/includes/customizer.php';