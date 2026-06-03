<?php
/**
 * Theme functions and definitions.
 *
 * @package NoirForge
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'NOIRFORGE_VERSION', '1.0.0' );
define( 'NOIRFORGE_DIR', get_template_directory() );
define( 'NOIRFORGE_URI', get_template_directory_uri() );

require NOIRFORGE_DIR . '/inc/setup.php';
require NOIRFORGE_DIR . '/inc/enqueue.php';
require NOIRFORGE_DIR . '/inc/template-tags.php';
require NOIRFORGE_DIR . '/inc/template-functions.php';
require NOIRFORGE_DIR . '/inc/woocommerce.php';