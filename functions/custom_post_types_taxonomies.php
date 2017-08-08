<?php
	function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Collections.
	 */

	$labels = array(
		"name" => __( 'Collections', 'lovetribe' ),
		"singular_name" => __( 'Collection', 'lovetribe' ),
	);

	$args = array(
		"label" => __( 'Collections', 'lovetribe' ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Collections",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'collections', 'with_front' => false, ),
		"show_admin_column" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,
	);
	register_taxonomy(
		"collections",
		array( "products" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes' );