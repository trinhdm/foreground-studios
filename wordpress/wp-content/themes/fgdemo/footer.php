<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fgdemo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fgdemo' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fgdemo' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fgdemo' ), 'fgdemo', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="footer" id="foot">
  <div class="container">
    <div class="row">
		<div class="col-md-12">
    <a href="#">Privacy Policy</a> <a href="#">Legal & Policies</a> <a href="#">Terms of Use</a> <a href="#">Apply for Staff</a> <a href="#">Contact Us</a>
		<p>(c)2016 Foreground Studios</p>
    </div>
  </div>
</div>

</body>
</html>
