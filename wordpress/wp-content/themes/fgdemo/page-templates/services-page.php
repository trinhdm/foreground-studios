<?php
/**
* Template Name: Services Page Template
*/
    get_header();
     ?>
<style type="text/css">
.entry-title {
  background-color: #000;
  padding: 20px 0px 20px 30px;
  width: 90%;
  color: #fff;
  text-transform: uppercase;
  font-size: 14pt;
  font-family: JosefinSemiBold, Verdana, sans-serif;
  letter-spacing: 2px;
  text-align: left;
  display: table;
}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="container">
        <div class="row">
          <div class="col-md-4 fill">
            <img src="https://i.ytimg.com/vi/nxtVBIXvHEo/maxresdefault.jpg">
          </div>
          <div class="col-md-8" style="padding-left: 25px;">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

    </div>
  </div>
</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
