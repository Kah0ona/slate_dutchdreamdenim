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
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
   <!-- <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51482090-7', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body <?php body_class(); ?> >
  
    <div class="u-gridContainer" id="center-container">
        <div class="u-gridRow">
            <header class="u-gridCol4 height">
                <div id="logo"> 
                    <a href="/"> <img src="/wp-content/themes/slate-0.3.1_dutchdreamdenim/img/logo.png" alt="logo dutch dream denim" /> </a>
                </div>

                <div id="cool-kids">
                    <img src="/wp-content/themes/slate-0.3.1_dutchdreamdenim/img/cool-kids.png" alt="cool kids only" />
                </div>

                <div id="social-media">
                    <ul>
                        <li> <a class="facebook" href="https://www.facebook.com/dutchdreamdenim" target="_blank"> <img src="/wp-content/themes/slate-0.3.1_dutchdreamdenim/img/facebook.png" alt="facebook" /> </a></li>
                        <li> <a class="twitter" href="https://twitter.com/dutchdreamdenim" target="_blank"><img src="/wp-content/themes/slate-0.3.1_dutchdreamdenim/img/twitter.png" alt="twitter" /> </a></li>
                        <li> <a class="instagram" href="http://instagram.com/dutchdreamdenim" target="_blank"><img src="/wp-content/themes/slate-0.3.1_dutchdreamdenim/img/instagram.png" alt="instagram" /> </a></li>
                    </ul>
                </div>

                <!-- Main navigation -->
                <form action="#" method="get">
                <div class="button mobile"></div>
                <div id="mobile-menu">
                <?php wp_nav_menu( array('menu' => 'mobile' )); ?>
                </div>
                </form>
         
                <?php include 'includes/navigation.php'; ?>
           
            </header>