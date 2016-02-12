<?php
/**
* Template Name: Home Page Template
*
*/
    get_header();
     ?>

     <div class="container-fluid" id="headerBG" style="background-image: url('http://www.foregroundstudios.net/wp-content/uploads/2016/02/Chris-Lee-HK_causewaybay.jpg'); background-attachment: fixed;">
     </div>

     <style type="text/css">

     .entry-title {
        position: absolute;
        margin-top: -65px;
       left: 50%;
       transform: translateX(-50%);
     }
     </style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

      <div class="ism-slider" data-play_type="once-rewind" data-interval="3000" data-radios="false" id="my-slider">
  <ol>
    <li>
      <img src="ism/image/slides/flower-729514_1280.jpg">
    </li>
    <li>
      <img src="ism/image/slides/aircraft-479772_1280.jpg">
    </li>
    <li>
      <img src="ism/image/slides/summer-192179_1280.jpg">
    </li>
  </ol>
</div>
<p class="ism-badge" id="my-slider-ism-badge"><a class="ism-link" href="http://imageslidermaker.com">generated with ISM</a></p>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
