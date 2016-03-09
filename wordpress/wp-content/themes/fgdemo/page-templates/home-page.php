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

<span id="homepage-flag" style="display: none" /></span>
      <div class="entry-content"><center>
        <div class="container text-center" id="video-header">
            <div class="row">
                <div class="col-md-2">
                    <img src="http://www.foregroundstudios.net/wp-content/uploads/2016/02/fg-logo-white.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                  <h1>We are Foreground Studios.<br>
                  We <span id="storytelling">create..</span></h1>
                </div>
            </div>
        </div>
        <video autoplay loop muted poster="screenshot.jpg" id="video-home">
    <source src="https://city-gala.squarespace.com/s/City-Gala-2016-Highlight-Reel.mp4" type="video/mp4">
</video>
</center>

<div class="container" id="whoweare">
<h2>Hello! We are Foreground Studios and we specialize in..</h2>
<center>
<div class="row">
<div class="col-md-4 col-sm-12 col-xs-12" style="text-align: center;">
 <i class="fa fa-camera-retro fa-5x fa-cog circle-icon"></i><br>
 <p class="script">photography</p>
</div>
<div class="col-md-4 col-sm-12 col-xs-12" style="text-align: center;">
 <i class="fa fa-video-camera fa-5x fa-cog circle-icon"></i><br>
 <p class="script">videography</p>
</div>
<div class="col-md-4 col-sm-12 col-xs-12" style="text-align: center;">
 <i class="fa fa-pencil fa-5x fa-cog circle-icon"></i><br>
 <p class="script">..and more!</p>
</div>
<p>Bacon ipsum dolor amet alcatra venison short loin tail kielbasa. Turducken bacon pork ham tenderloin. Shank short ribs alcatra, ground round frankfurter shoulder pancetta t-bone chicken pork chuck ribeye shankle. Prosciutto fatback shoulder jerky t-bone beef ribs.
</p>
</div>
</center>
</div>



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


  <div class="container" id="blog">
    <div class="row">
      <div class="col-md-12">
        <h1>Foreground News</h1>
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12">
            <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_3.jpg?6811766980172868354">
            <h3>Title Here</h3>
            <p class="date">date posted</p>
        <p>Bacon ipsum dolor amet alcatra venison short loin tail kielbasa. Turducken bacon pork ham tenderloin. Shank short ribs alcatra, ground round frankfurter shoulder pancetta t-bone chicken pork chuck ribeye shankle. Prosciutto fatback shoulder jerky t-bone beef ribs.
        </p>
      </div>

      <div class="col-md-4 col-sm-12 col-xs-12">
        <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_3.jpg?6811766980172868354">
        <h3>Title Here</h3>
        <p class="date">date posted</p>
    <p>Bacon ipsum dolor amet alcatra venison short loin tail kielbasa. Turducken bacon pork ham tenderloin. Shank short ribs alcatra, ground round frankfurter shoulder pancetta t-bone chicken pork chuck ribeye shankle. Prosciutto fatback shoulder jerky t-bone beef ribs.
    </p>
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 third">
    <img src="http://cdn.shopify.com/s/files/1/0551/2693/t/2/assets/slideshow_3.jpg?6811766980172868354">
    <h3>Title Here</h3>
    <p class="date">date posted</p>
<p>Bacon ipsum dolor amet alcatra venison short loin tail kielbasa. Turducken bacon pork ham tenderloin. Shank short ribs alcatra, ground round frankfurter shoulder pancetta t-bone chicken pork chuck ribeye shankle. Prosciutto fatback shoulder jerky t-bone beef ribs.
</p>
</div>
    </div>
    </div>
  </div>
</div>

<div class="container quote">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h3>Working with Foreground Studios has been a total pleasure; they are quick to get on to the tasks at hand and always showed a positive attitude towards new and challenging problems. We'll definitely be working with them for the foreseeable future </h3>

      <span>
        <b>Some guy named George</b><br>
        From some company in Irvine
      </span>
    </div>
  </div>
</div>

<div class="container text-center" id="subscribe-home">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h2>Get news, tips and tricks!</h2>

      <form class="form" action="//foregroundofficial.us7.list-manage.com/subscribe/post?u=d2dc22bd10fb52688c1cd2164&amp;id=81700ddb1e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                    <div class="form-group">
                      <input type="email" value="" name="EMAIL" class="form-control" placeholder="your email here"><br>
        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--><div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_d2dc22bd10fb52688c1cd2164_81700ddb1e" tabindex="-1" value=""></div></div><button type="submit" value="Subscribe" name="subscribe" class="btn btn-default" style="position: relative; top: -20px;">subscribe</button>
        <!--End mc_embed_signup-->
                  </form>

                  <span>* we promise we won't spam you</span>


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
