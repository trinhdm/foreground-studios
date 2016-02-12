<?php
/**
 * header for the about page
 *
 * @package fgdemo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="//fonts.googleapis.com/css?family=Oswald:700" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://trinhdm.github.io/foreground/css/animate.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fgdemo' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fgdemo' ); ?></button>

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

<div id="header">
	<nav class="navbar navbar-default" id="fgnav">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="fgnav">
				<?php /* Primary navigation */
	wp_nav_menu( array(
	  'menu' => 'top_menu',
	  'depth' => 2,
	  'container' => false,
	  'menu_class' => 'nav',
	  //Process nav menu using our custom nav walker
	  'walker' => new wp_bootstrap_navwalker())
	);
	?>

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<nav class="navbar navbar-default" id="fgnav">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="index.html">Home</a>
	        </li>
	        <li><a href="about.html">About</a>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          Photography</a>
	          <ul class="dropdown-menu">
	            <li><a href="photoservices.html">Services</a></li>
	            <li><a href="photogallery.html">Gallery</a></li>
	          </ul>
	        </li>


	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          Videography</a>
	          <ul class="dropdown-menu">
	            <li><a href="videoservices.html">Services</a></li>
	            <li><a href="videogallery.html">Gallery</a></li>
	          </ul>
	        </li>

	        <li><a href="contact.html">Contact</a>
	        </li>
	      </ul>

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

</div>

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

	<div id="content" class="site-content">
