<?php
/**
* Template Name: Contact Us Page Template
*/
    get_header();
     ?>

     <div class="container-fluid" id="headerBG" style="background-image: url('http://hdwallpapersfit.com/wp-content/uploads/2015/02/amazing-cityscape-wallpapers-desktop.jpg'); background-attachment: fixed;">
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



<center>    <div class="container" style="width: 72%;">
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

<div class="container" style="padding-bottom: 20px;">
  <div class="row" style="width: 70%; padding-top: 10px; padding-bottom: 10px;">
    <div class="col-md-1" style="text-align: center;">
      <i class="fa fa-phone fa-3x"></i></div>
      <div class="col-md-3 contact-align">
      <b>Phone</b><br> (xxx)-xxx-xxxx
    </div>
    <div class="col-md-1" style="text-align: center;">
      <i class="fa fa-location-arrow fa-3x"></i></div>
      <div class="col-md-3 contact-align">
        <b>Address</b><br>
      42 Wallaby Way<br>Sydney, Australia
    </div>
    <div class="col-md-1" style="text-align: center;">
      <i class="fa fa-envelope fa-3x"></i></div>
      <div class="col-md-3 contact-align">

      <b>Email</b><br> support@foregroundusa.com
    </div>
    </div>
  </div>
</div>


<!-- Contact form start-->

<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<h2>Or drop us a note!</h2>
<br>

<!-- Text input First Name-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>
  <div class="col-md-5 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input Last Name-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label>
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input Email-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label">Project Description</label>
    <div class="col-md-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div><br>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
</center>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
