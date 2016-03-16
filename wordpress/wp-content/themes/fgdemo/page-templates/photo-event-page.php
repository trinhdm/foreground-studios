<?php
/**
* Template Name: Event Portfolio (Photo) Page Template
*/
    get_header();
     ?>

     <div class="container-fluid" id="headerBG" style="background-image: url('http://www.zastavki.com/pictures/originals/2013/Auto___Honda_Honda_Accord_cars_cities_street_urban_wallpaper_043310_.jpg'); background-attachment: fixed;">
     </div>

     <style type="text/css">

     .entry-title {
        position: absolute;
        margin-top: -65px;
       left: 50%;
       transform: translateX(-50%);
     }


     #mainImage {
       max-height: 500px;
       max-width: 500px;
     }

     #hold {
       height: 500px;
       width: 500px;
       position:relative;
       z-index:1;
       text-align:center; /* centers image */
       overflow:hidden;
     }

     #thumbnails { /* thumbnails width = thumbGallery width + (thumbnailArrows width)*2 */
       width: 500px;
       height: 100px;
       margin-top:20px;
     }

     #thumbGallery {
       width: 440px;
       height: 120px;
       overflow: hidden;
       float: left;
       position: relative;
       text-align: center;
     }

     #imageContain { /* width is dynamically set by js */
       height: 110px;
       position: absolute;
       top:0px;
       left:0px;
     }

     #imageContain img {
       width: 100px;
       height: 100px;
       float: left;
     }

     #imageContain img:first-child {
       margin-left: 25px;
     }

     #thumbnails .thumbnailArrows {
       width: 25px;
       float: left;
       position: relative;
       top: 50%;
       transform: translateY(-50%);
     }

     #thumbnails .thumbnailArrows img {
       width: 20px;
       height: auto;
     }

     #thumbnails .thumbnailArrows:hover {
       cursor:pointer;
     }

     .borderNormal {
       border: 1px solid #ddd;
     }

     .selected {
       border: 1px solid #000;
     }

     .header-content {
         position: absolute;
         top: 50%;
         -webkit-transform: translateY(-50%);
         -ms-transform: translateY(-50%);
         transform: translateY(-50%);
         width: 100%;
     }

     .header-content .contain {
         margin: 0 auto;
         width: 1200px;
         display: flex;
     }

     .header-content .contain .left {
       width: 40%;
       margin-right: 50px;
       overflow: hidden;
     }

     .header-content .contain .right {
       flex: 1;
     }

     .header-content .contain .clear {
       clear: both;
     }
     </style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

 <div class="container">


   <div id="hold">
     <img src="http://d1ya1fm0bicxg1.cloudfront.net/2014/07/promoted-media-optimized_53da4ae651490.jpg" id="mainImage"
         class="cloudzoom" data-cloudzoom="zoomPosition: 'inside', zoomOffsetX: 0"/>


   </div>
   <div id="thumbnails">
       <div class="thumbnailArrows"><img src="http://www.switchlearn.com/1images/leftArrowNavBlack.png" id="leftArrow"/>
       </div>
       <div id="thumbGallery">
           <div id="imageContain"></div>
       </div>
       <div class="thumbnailArrows"><img src="http://www.switchlearn.com/1images/rightArrowNavBlack.png" id="rightArrow" />
       </div>
   </div>

   </div>
   <div class="right">
     <h1>jQuery Slider Test</h1>
     <p>Bacon ipsum dolor amet esse lorem turducken jerky, culpa dolore ribeye. Mollit aute ut tail porchetta short loin. Do swine short ribs pork loin ball tip capicola pig aliqua excepteur occaecat cillum tenderloin consectetur pork chop quis. Sunt veniam consequat swine ham hock duis bacon.</p>
   <p>Et sausage tail dolore, veniam drumstick hamburger strip steak aliquip ham. Bresaola ipsum sint ribeye doner consequat capicola culpa. Quis tongue ball tip meatball tri-tip nostrud alcatra pariatur dolore culpa fatback ribeye turducken. T-bone meatball nostrud, qui cow in occaecat ipsum dolore rump nulla duis kielbasa shoulder sint. Elit t-bone non corned beef landjaeger, aliquip est pork loin deserunt chicken. Beef ribs eu nulla jerky occaecat deserunt shankle alcatra tenderloin proident frankfurter cupim aliqua. Chicken ribeye hamburger tail, laborum turkey ullamco aliquip.</p>
   <p>Doreen Trinh</p>
   <a href="#" class="cloudzoom-gallery"
     data-cloudzoom =
          "useZoom: '#mainImage', image: 'https://s-media-cache-ak0.pinimg.com/736x/b7/14/76/b7147673cdba147cd0463fd21f06ff71.jpg'"
     >Image 1</a>
     <!-- useZoom is the zoombox that you change, image is image that you replace in box -->
     <!--data-cloud = if this gets clicked run cloudzoom with those parameters -->


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
