<?php

include_once 'redirects.php';
require_once('wp_bootstrap_navwalker.php');

// make RoyalOF
if (file_exists(__DIR__ . '/../../../RoyalOF/order_form_integration.wp.php')) {
    require_once(__DIR__ . '/../../../RoyalOF/order_form_integration.wp.php');
}

$order_form_pages = array('prices', 'order', 'preview');
//ADDING JS AND CSS FILES
//--------------------------------------------------
function ox_adding_scripts() {
	global $order_form_pages;
	if (!function_exists('is_login_page')) {
		function is_login_page() {
			return !strncmp($_SERVER['REQUEST_URI'], '/wp-login.php', strlen('/wp-login.php'));
		}
	}

	if( !is_admin() && !is_login_page()){
		/*removed wp-embed.min.js*/
		wp_deregister_script('wp-embed');

	/*jquery*/
	wp_deregister_script('jquery');
	$infooter = !is_page(array($order_form_pages)) ? true : false;
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, $infooter);
	wp_enqueue_script('jquery');

	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), null, true );
	wp_enqueue_script('owl-js', get_template_directory_uri() . '/js/owl.carousel2.min.js', array('jquery'), null, true );
    wp_enqueue_script('cssslider-js', get_template_directory_uri() . '/js/jquery.cssslider.min.js', array('jquery'), null, true );
    wp_enqueue_script('slider-mac-js', get_template_directory_uri() . '/js/slider-mac.js', array('jquery'), null, true );
    wp_enqueue_script('services-slider', get_template_directory_uri() . '/js/services-slider.js', array('jquery'), null, true );
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true );


	/* STYLES */
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome-icons', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'et-line-icons', get_template_directory_uri() . '/css/et-line.min.css' );
	wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/css/owl.carousel.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/style.css' );
	}
}

add_action( 'wp_enqueue_scripts', 'ox_adding_scripts' );

//REGISTRATION MENU
//--------------------------------------------------
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu'
));


// REWOVE SOME META TAGS AND UNNECESSARY LINKS
//--------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

//remove wpemoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//remove wp-json
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

//REMOVE LOGIN-PAGE ERRORS
//--------------------------------------------------
add_filter('login_errors',create_function('$a', "return null;"));

// Для вывода попапа
function draw_exit_popup() {
	if (function_exists ('makeRoyalExitPopUp')) {
	    echo makeRoyalExitPopUp();
	}
}

// CUSTOM EXCERPT
//--------------------------------------------------

//  excerpt length
function ux_custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'ux_custom_excerpt_length', 999 );

// add more link to excerpt
function ux_custom_excerpt_more($more) {
	global $post;
	return '... <div class="more-btn-wrap"><a class="btn btn-default more-btn" href="'. get_permalink($post->ID) . '">'.'Read More' .'</a></div>';
}
add_filter('excerpt_more', 'ux_custom_excerpt_more');


//REGISTRATION SIDEBAR
//--------------------------------------------------
register_sidebar(array(
	'name' => 'Sidebar',
	'id' => 'sidebar',
	'before_widget' => '<div id="%1$s" class="widget margin-b-30 %2$s">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<div class="widget-heading"><h4 class="widget-title">',
	'after_title'   => '</h4></div><div class="widget-body">',
));


// Crazy EGG

function crazy_egg() {
    $productionUrls = array('gurudissertation.com', 'www.gurudissertation.com', 'gurudissertation.com.local');
//  $host = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null);
//  $host = isset($host) ? $host : $_SERVER['SERVER_NAME'];
    $ceCode = '<!-- Nothingt -->';

    if ( in_array($_SERVER['HTTP_HOST'], $productionUrls)) {
        $ceCode = "
            <!-- CrazyEgg -->
            <script type=\"text/javascript\">
            setTimeout(function(){var a=document.createElement(\"script\");
            var b=document.getElementsByTagName(\"script\")[0];
            a.src=document.location.protocol+\"//script.crazyegg.com/pages/scripts/0037/0012.js?\"+Math.floor(new Date().getTime()/3600000);
            a.async=true;a.type=\"text/javascript\";b.parentNode.insertBefore(a,b)}, 1);
            </script>
            <!-- CrazyEgg -->";
    }
    $parsedURL = parse_url($_SERVER['REQUEST_URI']);
    $url = trim($parsedURL['path'], '/');
    echo ($url == '') ? $ceCode : '<!-- Nothingt -->';
}