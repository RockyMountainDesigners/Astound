<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astound
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'astound' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'astound' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'astound' ), 'astound', '<a href="https://github.com/ScottReinmuth" rel="designer">Scott Reinmuth</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- .container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
