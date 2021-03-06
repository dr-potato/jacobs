<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#">
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png"/>  
    <link rel="apple-touch-startup-image" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png" /> 

<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-51482090-21', 'auto');
 ga('send', 'pageview');

</script>


    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/modernizr.js"></script>

    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >

  <!-- Include svg icons -->
  <?php include_once("ico/sprites.svg"); ?>

  <header class="Header">
    <div class="Header-contact">
      <div class="u-gridContainer">
        <a href="#" class="Button Button--default">
          <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-phone"></use></svg>
          <span>076 - 5962069</span>
        </a>
        <a href="#" class="Button Button--default">
          <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-envelope"></use></svg>
          <span>info@jacobssierbestrating.nl</span>
        </a>
        <span class="u-objRight">
          <a href="http://webshop.jacobssierbestrating.nl" class="Button Button--brand">
            <span>Ga naar webshop</span>
            <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-arrow-right2"></use></svg>
          </a>
        </span>
      </div>
    </div>
    <div class="Header-logo">
        <div class="u-gridContainer">
          <div class="Logo">
              <a href="/" class="Logo-imageLink"><img class="Logo-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-jacobs.svg" alt="Jacobs Sierbestrating Logo"></a>
              <a href="/" class="Logo-textLink"><h1 class="Logo-heading"><span class="Logo-headingTop">Jacobs</span><span class="Logo-headingBottom">Sierbestrating</span></h1></a>
          </div>
		  <div class="u-objRight">
          	<?php get_sidebar('openingstijden'); ?>
          </div>
        </div>
    </div>
    <div class="Header-nav">
        <div class="u-gridContainer">
            <!-- Main navigation -->
            <?php include 'includes/navigation.php'; ?>
        </div>
    </div>
    <?php if(is_front_page()) {?>
    <div class="Header-carousel">
      <div class="Carousel is-collapsed">
        <ul class="Carousel-slideContainer bxslider">
          <?php include 'includes/aanbiedingen.php'; ?>
        </ul>
        <div class="Carousel-controls">
          <span class="Carousel-controlsPrev Button Button--brand">
            <svg class="Icon Icon--inline" viewBox="0 0 128 128">
              <use xlink:href="#icon-arrow-left2"></use>
            </svg>
            <span id="js-Carousel-controlsPrev"></span>
          </span>
          <span class="Carousel-controlsNext Button Button--brand">
            <span id="js-Carousel-controlsNext"></span>
            <svg class="Icon Icon--inline" viewBox="0 0 128 128">
              <use xlink:href="#icon-arrow-right2"></use>
            </svg>
          </span>
        </div>
      </div>
    </div>
    <?php }?>
  </header>







        

