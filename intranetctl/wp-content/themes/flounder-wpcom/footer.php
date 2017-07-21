<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flounder
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
				<?php do_action( 'flounder_credits' ); ?>
				<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'flounder' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'flounder' ), 'Flounder', '<a href="http://themes.redradar.net/" rel="designer">Kelly Dwan &amp; Mel Choyce</a>' ); ?>
		</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
