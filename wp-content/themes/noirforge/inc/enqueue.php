<?php
/**
 * Enqueue scripts and styles.
 *
 * @package NoirForge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme assets.
 *
 * @return void
 */
function noirforge_enqueue_assets() {
	wp_enqueue_style(
		'noirforge-style',
		get_template_directory_uri() . '/assets/dist/css/main.css',
		array(),
		NOIRFORGE_VERSION
	);

	wp_enqueue_script(
		'noirforge-main',
		get_template_directory_uri() . '/assets/dist/js/main.js',
		array(),
		NOIRFORGE_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'noirforge_enqueue_assets' );
