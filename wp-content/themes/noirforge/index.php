<?php
/**
 * The main template file.
 *
 * @package NoirForge
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			the_title( '<h1>', '</h1>' );
			the_content();

		endwhile;
	else :
		esc_html_e( 'No content found.', 'noirforge' );
	endif;
	?>
</main>

<?php
get_footer();