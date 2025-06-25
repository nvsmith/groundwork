<?php
/**
 * Theme Functions
 *
 * The core functions file for the Groundwork theme. This file is responsible
 * for loading translation support, including modular theme functionality from
 * the /inc directory, and initializing global theme behavior.
 *
 * @package Groundwork
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load theme textdomain for translation support.
 * This enables localization using files in the /languages directory.
 */
function groundwork_load_textdomain() {
	load_theme_textdomain( 'groundwork', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'groundwork_load_textdomain' );

// Core theme setup (menus, support features, etc.)
require get_template_directory() . '/inc/setup.php';

// Enqueue CSS and JavaScript files
require get_template_directory() . '/inc/enqueue.php';

// Custom utility functions (helpers, filters, etc.)
require get_template_directory() . '/inc/custom-functions.php';

// Custom template tags (e.g. pagination, meta output, etc.)
require get_template_directory() . '/inc/template-tags.php';

// WooCommerce-specific hooks and overrides (loaded only if WooCommerce is active)
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce-hooks.php';
}