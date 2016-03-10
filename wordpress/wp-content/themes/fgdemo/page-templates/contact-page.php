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

  <?php
    if (isset($_POST["submit"])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form';
        $to = 'example@bootstrapbay.com';
        $subject = 'Message from Contact Demo ';

        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        // Check if name has been entered
        if (!$_POST['firstname']) {
            $errFName = 'Please enter your first name';
        }

        if (!$_POST['lastname']) {
            $errLName = 'Please enter your last name';
        }

        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }

        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }

// If there are no errors, send the email
if (!$errFName && !$errLName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<div class="container" id="contact">
  <div clas="row">
  <div class="col-md-3 col-md-offset-1" id="contact-info">

    <h2>Our info</h2>
    <i class="fa fa-phone fa-3x"></i><br>
    <b>Phone</b><br> (xxx)-xxx-xxxx<br><br>

    <i class="fa fa-location-arrow fa-3x"></i><br>
      <b>Address</b><br>
    42 Wallaby Way<br>Sydney, Australia<br><br>

    <i class="fa fa-envelope fa-3x"></i><br>
    <b>Email</b><br> support(at)<br>
    foregroundusa.com
  </div>

  <div class="col-md-5" id="note">
    <h2>Or drop us a note!</h2>
<form role="form" method="post" action="/">
  <div class="row">
    <div class="col-sm-6">
      <label for="name" class="control-label">First Name</label>
    </div>
    <div class="col-sm-6">
              <label for="name" class="control-label">Last Name</label>
            </div>
          </div>


  <div class="row">

        <div class="col-sm-6">
            <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo htmlspecialchars($_POST['firstname']); ?>">
            <?php echo "<p class='text-danger'>$errFName</p>";?>
        </div>

        <div class="col-sm-6">
            <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo htmlspecialchars($_POST['lastname']); ?>">
            <?php echo "<p class='text-danger'>$errLName</p>";?>
        </div>

  </div>


  <div class="row">
    <div class="col-sm-6">
      <label for="email" class="control-label">Email</label>
    </div>
    <div class="col-sm-6">
              <label for="phone" class="control-label">Phone</label>
            </div>
          </div>
<div class="row">
        <div class="col-sm-6">
            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
          </div>

        <div class="col-sm-6">
            <input type="phone" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($_POST['message']);?>">
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
  <label for="message" class="control-label">Message</label>
</div>
</div>
<div class="row">

        <div class="col-sm-12">
            <textarea class="form-control" rows="4" name="message"></textarea>
        </div>
    </div>

        <div class="col-sm-10 col-sm-offset-1">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    <div class="form-group">
        <div class="col-sm-10">
            <!-- <! Will be used to display an alert to the user-->
            <?php echo $result; ?>
        </div>
    </div>
</form>
</div>
</div>
</div></div>
</center>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
