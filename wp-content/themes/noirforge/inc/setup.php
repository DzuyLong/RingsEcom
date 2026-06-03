<?php
/**
 * Theme setup.
 *
 * @package NoirForge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'noirforge_setup' ) ) {
	/**
	 * Set up theme defaults and registers support for WordPress features.
	 *
	 * @return void
	 */
	function noirforge_setup() {
		load_theme_textdomain( 'noirforge', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'custom-logo' );

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'noirforge' ),
				'footer'  => esc_html__( 'Footer Menu', 'noirforge' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'noirforge_setup' );
