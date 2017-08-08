<?php
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );

if(!function_exists('initialize')){
	function initialize() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support('post-thumbnails');
		//add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	}
	add_action('init','initialize');
}

//add favicon to admin
function add_favicon() {
  	$favicon_url = get_stylesheet_directory_uri() . '/favicon.ico';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');

//customize login screen
function custom_login_logo(){
	$logo = get_stylesheet_directory_uri().'/images/Love-Tribe-Apparel-logo.png';
	$images = get_stylesheet_directory_uri().'/images/';
	//$l = getimagesize($path);
	echo '<style type="text/css">
			h1 a { background-image:url("'. $logo .'") !important; background-size:100% !important;width:270px !important;height: 100px !important;margin: 0 auto !important;}
			body.login{background: #f6ebe2;
    background: -moz-linear-gradient(left, rgba(246,235,226,1) 0%, rgba(250,236,233,1) 50%, rgba(247,225,223,1) 100%);
    background: -webkit-linear-gradient(left, #f6ebe2 0%,#faece9 50%,#f7e1df 100%);
    background: linear-gradient(to right, #f6ebe2 0%,#faece9 50%,#f7e1df 100%);}
			.login #backtoblog a, .login #nav a, .login h1 a {color: #252121;font-weight: bold;}
		</style>';
}
add_action('login_head','custom_login_logo');
function login_header_url() {
    return home_url();
}
add_filter('login_headerurl', 'login_header_url');

function login_header_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'login_header_title');

/*
function change_menu_labels($t) {
    global $menu;
	//pre($menu);exti;
    $menu[103][0] = 'Backup';
    foreach($menu as $k=>$v){
	    if($v[0]==''){

	    }
    }
}
add_action('admin_menu', 'change_menu_labels' ,1000);
*/

?>