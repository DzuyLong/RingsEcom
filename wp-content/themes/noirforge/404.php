<?php
/**
 * The template for displaying 404 pages.
 *
 * @package NoirForge
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="error-404 not-found">
		<h1><?php esc_html_e( 'Page not found', 'noirforge' ); ?></h1>

		<p>
			<?php esc_html_e( 'The page you are looking for does not exist or has been moved.', 'noirforge' ); ?>
		</p>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php esc_html_e( 'Back to homepage', 'noirforge' ); ?>
		</a>
	</section>
</main>

<?php
get_footer();
