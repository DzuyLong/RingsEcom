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
 * Get Vite asset path from manifest.
 *
 * @param string $entry Entry file name.
 * @return array|null
 */
function noirforge_get_vite_asset( $entry ) {
	$manifest_path = NOIRFORGE_DIR . '/assets/dist/.vite/manifest.json';

	if ( ! file_exists( $manifest_path ) ) {
		return null;
	}

	$manifest = json_decode( file_get_contents( $manifest_path ), true ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents

	if ( ! is_array( $manifest ) || empty( $manifest[ $entry ] ) ) {
		return null;
	}

	return $manifest[ $entry ];
}

/**
 * Enqueue theme assets.
 *
 * @return void
 */
function noirforge_enqueue_assets() {
	$main_asset = noirforge_get_vite_asset( 'js/main.js' );

	if ( ! empty( $main_asset['css'] ) && is_array( $main_asset['css'] ) ) {
		foreach ( $main_asset['css'] as $index => $css_file ) {
			wp_enqueue_style(
				'noirforge-style-' . absint( $index ),
				NOIRFORGE_URI . '/assets/dist/' . $css_file,
				array(),
				NOIRFORGE_VERSION
			);
		}
	}

	if ( ! empty( $main_asset['file'] ) ) {
		wp_enqueue_script(
			'noirforge-main',
			NOIRFORGE_URI . '/assets/dist/' . $main_asset['file'],
			array(),
			NOIRFORGE_VERSION,
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'noirforge_enqueue_assets' );
