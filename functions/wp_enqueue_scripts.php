<?php add_action('wp_enqueue_scripts', 'enqueue');
function enqueue(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');

	//Bootstrap
	wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', NULL, '3.3.4');

	//Fancybox
	wp_register_script('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.js', NULL, '2.1.4');

	//jQuery UI
	wp_register_script('jquery-ui', '//code.jquery.com/ui/1.11.4/jquery-ui.js');

	//Theme Functions
	wp_register_script('functions', get_stylesheet_directory_uri() . '/js/functions.js', NULL, NULL);

	//Font Awesome
	wp_register_script('font-awesome', 'https://use.fontawesome.com/f6286f3670.js');

//enqueue scripts
	wp_enqueue_script(array('jquery','bootstrap','fancybox2','font-awesome','functions'));

	//styles
	//Bootstrap Core CSS
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', NULL, '3.3.4');

	//Fancybox
	wp_register_style('fancybox2', get_stylesheet_directory_uri().'/js/source/jquery.fancybox.css', NULL, '2.1.4');

	//Theme stylesheet
	wp_register_style('styles', get_stylesheet_directory_uri().'/style.css', NULL, NULL);


//enqueue styles
	wp_enqueue_style(array('bootstrap','fancybox2','styles'));


}