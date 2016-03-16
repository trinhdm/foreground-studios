<?php
/**
* Template Name: Services Page Template
*/
    get_header();
     ?>

     
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="container" id="services">
        <div class="row" id="about">
          <div class="col-md-4 col-md-offset-1 col-xs-12 fill">
            <img src="https://i.ytimg.com/vi/nxtVBIXvHEo/maxresdefault.jpg">
          </div>
          <div class="col-md-6 col-xs-12">

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
