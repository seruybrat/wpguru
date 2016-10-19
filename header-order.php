<!DOCTYPE html>
<html lang="en">
<head>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-61726125-1', 'auto', {'allowLinker': true});
      ga('require', 'linker');
      ga('linker:autoLink', ['track.gurudissertation.com'] );
      ga('send', 'pageview');
    </script>
    <meta name="google-site-verification" content="zkKXgymXZrCL3rbDaq2FAlh55TwdK6ARuIlsvOv1su8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon">

</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NPCRRF" 
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NPCRRF');</script>
<!-- End Google Tag Manager -->
<?php // ========== HEADER ========== ?>
<header class="header navbar-fixed-top header-sticky header-box-shadow">
    <?php // Navbar ?>
    <nav class="navbar mega-menu" role="navigation">
        <div class="container">
            <?php // Brand and toggle get grouped for better mobile display ?>
            <div class="menu-container">
                <?php // Logo ?>
                <div class="navbar-logo">
                    <a class="navbar-logo-wrap" href="/">
                        <div class="navbar-logo-img"></div>
                    </a>
                </div>
                <?php // End Logo ?>
                <?php // Navbar Actions ?>
                <div class="navbar-actions">
                    <?php // Search ?>
                    <div class="navbar-actions-shrink search main-number"><img src="<?php bloginfo('template_url'); ?>/images/phone-top.png" alt=""></div>
                    <?php // End Search ?>
                </div>
                <?php // End Navbar Actions ?>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="toggle-icon"></span>
            </button>
            <ul class="nav navbar-nav navbar-login">
                <li class="nav-item nav-item-bg form-modal-nav">
                    <?php 
                    if (function_exists ('drawRoyalBlock')) {
                        echo drawRoyalBlock('build-login-form', ['labels' => ['login_href' => 'Login']]);
                    }?>
                </li>
            </ul>
            <?php // Collect the nav links, forms, and other content for toggling ?>
            <div class="collapse navbar-collapse nav-collapse">

                    <?php
                    if (has_nav_menu('main_menu')) :
                        $nav_args = array(
                            'theme_location'    => 'main_menu',
                            'container'         => '',
                            'menu_class'      => 'nav navbar-nav navbar-main',
                            'depth'             => 2,
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker()
                        );
                        wp_nav_menu( $nav_args );
                    endif;
                    ?>
            </div>
            <?php // End Navbar Collapse ?>
        </div>
        <?php // End Container ?>
    </nav>
    <?php // Navbar ?>
</header>
<?php // ========== END HEADER ========== ?>
<div class="main-container">