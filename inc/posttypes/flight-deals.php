<?php

function cptui_register_my_cpts_flight_deals() {

	/**
	 * Post Type: Flight Deals.
	 */

	$labels = [
		"name" => __( "Flight Deals", "TripSupport" ),
		"singular_name" => __( "Flight Deal", "TripSupport" ),
		"menu_name" => __( "Flight Deals", "TripSupport" ),
		"all_items" => __( "All Flight Deals", "TripSupport" ),
		"add_new" => __( "Add New", "TripSupport" ),
		"add_new_item" => __( "Add New Flight Deal", "TripSupport" ),
		"edit_item" => __( "Edit Flight Deal", "TripSupport" ),
		"new_item" => __( "New Flight Deal", "TripSupport" ),
		"view_item" => __( "View Flight Deal", "TripSupport" ),
		"view_items" => __( "View Flight Deals", "TripSupport" ),
		"search_items" => __( "Search Flight Deals", "TripSupport" ),
		"not_found" => __( "No Flight Deals found", "TripSupport" ),
		"not_found_in_trash" => __( "No Flight Deals found in Trash", "TripSupport" ),
		"parent" => __( "Parent Flight Deal:", "TripSupport" ),
		"featured_image" => __( "Featured image for this Flight Deal", "TripSupport" ),
		"set_featured_image" => __( "Set featured image for this Flight Deal", "TripSupport" ),
		"remove_featured_image" => __( "Remove featured image for this Flight Deal", "TripSupport" ),
		"use_featured_image" => __( "Use as featured image for this Flight Deal", "TripSupport" ),
		"archives" => __( "Flight Deal Archives", "TripSupport" ),
		"insert_into_item" => __( "Insert into flight deal", "TripSupport" ),
		"uploaded_to_this_item" => __( "Uploaded to this flight deal", "TripSupport" ),
		"filter_items_list" => __( "Filter flight deals list", "TripSupport" ),
		"items_list_navigation" => __( "Flight Deals list navigation", "TripSupport" ),
		"items_list" => __( "Flight Deals list", "TripSupport" ),
		"attributes" => __( "Flight Deals Attributes", "TripSupport" ),
		"name_admin_bar" => __( "Flight Deal", "TripSupport" ),
		"item_published" => __( "Flight Deal published", "TripSupport" ),
		"item_published_privately" => __( "Flight Deal published privately", "TripSupport" ),
		"item_reverted_to_draft" => __( "Flight Deal reverted to draft", "TripSupport" ),
		"item_scheduled" => __( "Flight Deal scheduled", "TripSupport" ),
		"item_updated" => __( "Flight Deal updated", "TripSupport" ),
		"parent_item_colon" => __( "Parent Flight Deal:", "TripSupport" ),
	];

	$args = [
		"label" => __( "Flight Deals", "TripSupport" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "flight-deals", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-airplane",
		"supports" => [ "title", "editor", "thumbnail", "trackbacks", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "countries" ],
		"show_in_graphql" => false,
	];

	register_post_type( "flight_deals", $args );
}

add_action( 'init', 'cptui_register_my_cpts_flight_deals' );
