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

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img_chania.jpg" alt="Chania">
          </div>

          <div class="item">
            <img src="img_chania2.jpg" alt="Chania">
          </div>

          <div class="item">
            <img src="img_flower.jpg" alt="Flower">
          </div>

          <div class="item">
            <img src="img_flower2.jpg" alt="Flower">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
