<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

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
          <a href="#" class="Button Button--brand">
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
            <table class="Table Table--invertedBold">
                <thead>
                <tr>
                    <td class="Table-heading">Openingstijden</td>
                </tr>                    
                </thead>
                <tbody>
                <tr>
                    <td>Ma t/m vr</td>
                    <td>7:00 t/m 17:00</td>
                </tr>
                <tr>
                    <td>Zaterdag</td>
                    <td>8:30 t/m 12:30</td>
                </tr>
                <tr>
                    <td>Zondag</td>
                    <td>Gesloten</td>
                </tr>
                </tbody>
            </table>
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
      <div class="Carousel">
        <ul class="Carousel-slideContainer cycle-slideshow" 
          data-cycle-slides=".Carousel-slide" 
          data-cycle-speed="1500">
          <li class="Carousel-slide">
            <div class="Carousel-imageColumn">
              <img class="Carousel-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img-aanbieding.jpg" alt="" />      
            </div>
            <div class="Carousel-textColumn">
              <article class="Article Article--inverted u-textShout">
                <h3 class="Article-heading">Garden Concept Line</h3>
                <p class="Article-tagline">20x30cm</p>
                <p class="Article-content">Dit is een eerste keus tegel met de befaamde coating. Gemakkelijk in onderhoud, geen alg aangroei, bijna geen witte uitslag.</p>
                <div class="u-textRight u-objRight">
                  <p class="Article-content">Van € 19,00</p>
                  <h3 class="Article-heading">Nu € 14,50</h3>
                  <a href="#" class="Button Button--brand">
                    <span class="u-textShout u-textFat">Bekijk aanbieding</span>
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-arrow-right2"></use></svg>
                  </a>
                </div>
              </article>
            </div>
          </li>
          <li class="Carousel-slide">
            <div class="Carousel-imageColumn">
              <img class="Carousel-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/img-aanbieding.jpg" alt="" />      
            </div>
            <div class="Carousel-textColumn">
              <article class="Article Article--inverted u-textShout">
                <h3 class="Article-heading">Garden Concept Line</h3>
                <p class="Article-tagline">20x30cm</p>
                <p class="Article-content">Dit is een eerste keus tegel met de befaamde coating. Gemakkelijk in onderhoud, geen alg aangroei, bijna geen witte uitslag.</p>
                <div class="u-textRight u-objRight">
                  <p class="Article-content">Van € 19,00</p>
                  <h3 class="Article-heading">Nu € 14,50</h3>
                  <a href="#" class="Button Button--brand">
                    <span class="u-textShout u-textFat">Bekijk aanbieding</span>
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-arrow-right2"></use></svg>
                  </a>
                </div>
              </article>
            </div>
          </li>
        </ul>

      </div>
    </div>
    <?php }?>
  </header>







        

