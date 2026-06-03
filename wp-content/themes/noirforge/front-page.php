<?php
/**
 * The front page template.
 *
 * @package NoirForge
 */

get_header();

$shop_url = function_exists( 'wc_get_page_permalink' )
	? wc_get_page_permalink( 'shop' )
	: home_url( '/' );
?>

<main id="primary" class="site-main site-main--front-page">
	<section class="nf-hero">
		<div class="nf-container">
			<div class="nf-hero__content">
				<p class="nf-hero__eyebrow">
					<?php esc_html_e( 'Premium jewelry for men', 'noirforge' ); ?>
				</p>

				<h1 class="nf-hero__title">
					<?php esc_html_e( 'Bold rings and bracelets for modern men.', 'noirforge' ); ?>
				</h1>

				<p class="nf-hero__description">
					<?php esc_html_e( 'A refined WooCommerce theme crafted for masculine jewelry, fashion accessories, and premium lifestyle brands.', 'noirforge' ); ?>
				</p>

				<a class="nf-button nf-button--primary" href="<?php echo esc_url( $shop_url ); ?>">
					<?php esc_html_e( 'Shop Collection', 'noirforge' ); ?>
				</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
