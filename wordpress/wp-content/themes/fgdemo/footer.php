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
			<div class="col-md-2 col-md-offset-1 col-sm-3 col-xs-12">
				<img src="http://www.foregroundstudios.net/wp-content/uploads/2016/02/fgstudios-seal-black.png" class="img-responsive">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<h2>Connect with us</h2>
				<i class="fa fa-facebook fa-2x foot-fa"></i>
				<i class="fa fa-instagram fa-2x foot-fa"></i>
				<i class="fa fa-flickr fa-2x foot-fa"></i>
				<i class="fa fa-twitter fa-2x foot-fa"></i>
				<i class="fa fa-youtube fa-2x foot-fa"></i>
			</div>
		<div class="col-md-6 col-sm-8 col-xs-12">
			<h2>Links</h2>
    <a href="#">Privacy Policy</a> <a href="#">Legal & Policies</a> <a href="#">Terms of Use</a> <a href="#">Apply for Staff</a> <a href="#">Contact Us</a>
		<p>(c)2016 Foreground Studios</p>
    </div>
  </div>
</div>

</body>
</html>
