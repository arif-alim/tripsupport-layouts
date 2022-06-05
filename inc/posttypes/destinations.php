<?php

function cptui_register_my_cpts_destinations() {

	/**
	 * Post Type: Destinations.
	 */

	$labels = [
		"name" => __( "Destinations", "TripSupport" ),
		"singular_name" => __( "Destination", "TripSupport" ),
		"menu_name" => __( "Destinations", "TripSupport" ),
		"all_items" => __( "All Destinations", "TripSupport" ),
		"add_new" => __( "Add New", "TripSupport" ),
		"add_new_item" => __( "Add New Destination", "TripSupport" ),
		"edit_item" => __( "Edit Destination", "TripSupport" ),
		"new_item" => __( "New Destination", "TripSupport" ),
		"view_item" => __( "View Destination", "TripSupport" ),
		"view_items" => __( "View Destinations", "TripSupport" ),
		"search_items" => __( "Search Destinations", "TripSupport" ),
		"not_found" => __( "No Destinations found", "TripSupport" ),
		"not_found_in_trash" => __( "No Destinations found in Trash", "TripSupport" ),
		"parent" => __( "Parent Destination:", "TripSupport" ),
		"featured_image" => __( "Featured image for this Destination", "TripSupport" ),
		"set_featured_image" => __( "Set featured image for this Destination", "TripSupport" ),
		"remove_featured_image" => __( "Remove featured image for this Destination", "TripSupport" ),
		"use_featured_image" => __( "Use as featured image for this Destination", "TripSupport" ),
		"archives" => __( "Destination Archives", "TripSupport" ),
		"insert_into_item" => __( "Insert into destination", "TripSupport" ),
		"uploaded_to_this_item" => __( "Uploaded to this destination", "TripSupport" ),
		"filter_items_list" => __( "Filter Destination list", "TripSupport" ),
		"items_list_navigation" => __( "Destination list navigation", "TripSupport" ),
		"items_list" => __( "Destinations list", "TripSupport" ),
		"attributes" => __( "Destinations Attributes", "TripSupport" ),
		"name_admin_bar" => __( "Destination", "TripSupport" ),
		"item_published" => __( "Destination published", "TripSupport" ),
		"item_published_privately" => __( "Destination published privately", "TripSupport" ),
		"item_reverted_to_draft" => __( "Destination reverted to draft", "TripSupport" ),
		"item_scheduled" => __( "Destination scheduled", "TripSupport" ),
		"item_updated" => __( "Destination updated", "TripSupport" ),
		"parent_item_colon" => __( "Parent Destination:", "TripSupport" ),
	];

	$args = [
		"label" => __( "Destinations", "TripSupport" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "destinations", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-site",
		"supports" => [ "title", "editor", "thumbnail", "trackbacks", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "countries" ],
		"show_in_graphql" => false,
	];

	register_post_type( "destinations", $args );
}

add_action( 'init', 'cptui_register_my_cpts_destinations' );
