<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package SemPress
 * @since SemPress 1.0.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
		<?php do_action( 'sempress_credits' ); ?>
		<?php printf( __( 'This site is powered by %1$s and styled with %2$s (with a little pinch of %3$s)', 'senpress' ), '<a href="http://wordpress.org/" rel="generator">WordPress</a>', '<a href="http://notizblog.org/projects/sempress/">SemPress</a>', '<a href="https://github.com/pfefferle/SenPress">Zen</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
