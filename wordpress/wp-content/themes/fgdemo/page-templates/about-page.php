<?php
/**
* Template Name: About Us Page Template
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

      <?php while ( have_posts() ) : the_post(); ?>
      <header class="entry-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>




      <div class="entry-content">
        <div class="container"><div class="row">
     <h2>We specialize in..</h2></div>
     <center>
     <div class="row" style="width: 65%; padding-bottom: 10px;">
       <div class="col-md-4" style="text-align: center;">
         <i class="fa fa-camera-retro fa-5x fa-cog circle-icon"></i><br>
         <p class="script">photography</p>
       </div>
       <div class="col-md-4" style="text-align: center;">
         <i class="fa fa-video-camera fa-5x fa-cog circle-icon"></i><br>
         <p class="script">videography</p>
       </div>
       <div class="col-md-4" style="text-align: center;">
         <i class="fa fa-pencil fa-5x fa-cog circle-icon"></i><br>
         <p class="script">..and more!</p>
       </div>
     </div>
   </center>
 </div>


 <div class="container">
   <div id="aboutus">
   <div class="row">
      <div class="col-md-6">
        <div class="row about-info">
          <div class="col-md-4">
            <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
          </div>
          <div class="col-md-8 about-staff">
            <i class="fa fa-camera-retro fa-4x fa-contact"></i>
            <h2>Penny Lee</h2>
            <h3>President</h3>
            <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="row about-info">
          <div class="col-md-4">
            <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
          </div>
          <div class="col-md-8 about-staff">
            <i class="fa fa-camera-retro fa-4x fa-contact"></i>
            <h2>Penny Lee</h2>
            <h3>President</h3>
            <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
            </p>
          </div>
        </div>
      </div>
 </div>

 <div class="row">
    <div class="col-md-6">
      <div class="row about-info">
        <div class="col-md-4">
          <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
        </div>
        <div class="col-md-8 about-staff">
          <i class="fa fa-camera-retro fa-4x fa-contact"></i>
          <h2>Penny Lee</h2>
          <h3>President</h3>
          <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row about-info">
        <div class="col-md-4">
          <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
        </div>
        <div class="col-md-8 about-staff">
          <i class="fa fa-camera-retro fa-4x fa-contact"></i>
          <h2>Penny Lee</h2>
          <h3>President</h3>
          <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
          </p>
        </div>
      </div>
    </div>
</div>


<div class="row">
   <div class="col-md-6">
     <div class="row about-info">
       <div class="col-md-4">
         <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
       </div>
       <div class="col-md-8 about-staff">
         <i class="fa fa-camera-retro fa-4x fa-contact"></i>
         <h2>Penny Lee</h2>
         <h3>President</h3>
         <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
         </p>
       </div>
     </div>
   </div>

   <div class="col-md-6">
     <div class="row about-info">
       <div class="col-md-4">
         <img src="http://ichef.bbci.co.uk/images/ic/256x256/p01bwgnp.jpg">
       </div>
       <div class="col-md-8 about-staff">
         <i class="fa fa-camera-retro fa-4x fa-contact"></i>
         <h2>Penny Lee</h2>
         <h3>President</h3>
         <p>Bacon ipsum dolor amet jerky prosciutto short loin turducken meatball spare ribs tri-tip corned beef pig ham hock shankle swine tenderloin. Jerky beef ribs swine, meatball boudin andouille flank jowl shank pig tri-tip sirloin short ribs frankfurter filet mignon. Corned beef capicola shankle, short ribs tongue pastrami ball tip leberkas prosciutto fatback. Ribeye pork loin ground round bresaola short loin venison pancetta tail ham tri-tip jerky. Alcatra chuck ball tip pastrami shoulder pork belly shankle. Meatball sausage spare ribs leberkas, fatback pork chop bacon cupim. Chicken ball tip sausage, ham short loin jowl cupim.
         </p>
       </div>
     </div>
   </div>
</div>
</div></div>

     <div class="container" style="width: 72%;">


        <?php the_content(); ?>
      </div><!-- .entry-content -->

      <?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
      </div>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
