<?php
/**
 * The footer for the theme.
 *
 * @package NoirForge
 */

?>

<footer class="site-footer">
	<div class="site-footer__inner">
		<p>
			<?php
			printf(
				/* translators: 1: Current year, 2: Site name. */
				esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'noirforge' ),
				esc_html( gmdate( 'Y' ) ),
				esc_html( get_bloginfo( 'name' ) )
			);
			?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
