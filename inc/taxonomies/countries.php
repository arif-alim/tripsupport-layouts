<?php

function cptui_register_my_taxes_countries() {

	/**
	 * Taxonomy: Countries.
	 */

	$labels = [
		"name" => __( "Countries", "TripSupport" ),
		"singular_name" => __( "Country", "TripSupport" ),
		"menu_name" => __( "Countries", "TripSupport" ),
		"all_items" => __( "All Countries", "TripSupport" ),
		"edit_item" => __( "Edit Country", "TripSupport" ),
		"view_item" => __( "View Country", "TripSupport" ),
		"update_item" => __( "Update Country Name", "TripSupport" ),
		"add_new_item" => __( "Add New Country", "TripSupport" ),
		"new_item_name" => __( "New Country Name", "TripSupport" ),
		"parent_item" => __( "Parent Country", "TripSupport" ),
		"parent_item_colon" => __( "Parent Country:", "TripSupport" ),
		"search_items" => __( "Search Countries", "TripSupport" ),
		"popular_items" => __( "Popular Countries", "TripSupport" ),
		"add_or_remove_items" => __( "Add or remove Country", "TripSupport" ),
		"not_found" => __( "No Country found", "TripSupport" ),
		"no_terms" => __( "No Countries", "TripSupport" ),
		"items_list_navigation" => __( "Countries list navigation", "TripSupport" ),
		"items_list" => __( "Countries list", "TripSupport" ),
		"back_to_items" => __( "Back to Countries", "TripSupport" ),
	];

	
	$args = [
		"label" => __( "Countries", "TripSupport" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'countries', 'with_front' => false, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "countries",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "countries", array('flight_deals', 'vacation_deals', 'hotel_deals', 'destinations'), $args );
}
add_action( 'init', 'cptui_register_my_taxes_countries' );
