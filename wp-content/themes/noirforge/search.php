<?php
/**
 * The template for displaying search results pages.
 *
 * @package NoirForge
 */

get_header();
?>

<main id="primary" class="site-main">
	<header class="page-header">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search query. */
				esc_html__( 'Search results for: %s', 'noirforge' ),
				'<span>' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header>

	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();

			the_title( '<h2 class="entry-title">', '</h2>' );
			the_excerpt();
		endwhile;

		the_posts_pagination();
	else :
		esc_html_e( 'No results found.', 'noirforge' );
	endif;
	?>
</main>

<?php
get_footer();
