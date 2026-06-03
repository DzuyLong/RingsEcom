<?php
/**
 * The template for displaying archive pages.
 *
 * @package NoirForge
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>

		<?php
		while ( have_posts() ) :
			the_post();

			the_title( '<h2 class="entry-title">', '</h2>' );
			the_excerpt();
		endwhile;

		the_posts_pagination();
	else :
		esc_html_e( 'No posts found.', 'noirforge' );
	endif;
	?>
</main>

<?php
get_footer();
