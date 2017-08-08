<?php function cptui_register_my_cpts() {
	/**
	 * Post Type: Products.
	 */

	$labels = array(
		"name" => __( 'Products', 'lovetribe' ),
		"singular_name" => __( 'Product', 'lovetribe' ),
	);

	$args = array(
		"label" => __( 'Products', 'lovetribe' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "products/%collections%", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
		'menu_position' => 0
	);

	register_post_type( "products", $args );

	/**
	 * Post Type: Home Slider.
	 */

	$labels = array(
		"name" => __( 'Home Slider', 'lovetribe' ),
		"singular_name" => __( 'Home Slider', 'lovetribe' ),
	);

	$args = array(
		"label" => __( 'Home Slides', 'lovetribe' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "home-slides", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "home-slider", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );