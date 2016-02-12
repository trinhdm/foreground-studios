<?php
/**
* Template Name: Home Page Template
*
*/
    get_header();
     ?>

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
      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>

      <div class="entry-content">

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
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_2.jpg?6811766980172868354" alt="Chania">
          </div>

          <div class="item">
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_3.jpg?6811766980172868354" alt="Chania">
          </div>

          <div class="item">
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_4.jpg?6811766980172868354" alt="Flower">
          </div>

          <div class="item">
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_5.jpg?6811766980172868354" alt="Flower">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="fa fa-angle-left fa-5x .arrow-place" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="fa fa-angle-right fa-5x .arrow-place" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- end of carousel -->
    </div>
        <div class="container" style="width: 72%;">


           <?php the_content(); ?>
           </div><!-- .entry-content -->

                 <?php comments_template( '', true ); ?>
               <?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
