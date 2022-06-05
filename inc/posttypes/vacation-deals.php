<?php

function cptui_register_my_cpts_vacation_deals() {

	/**
	 * Post Type: Vacation Deals.
	 */

	$labels = [
		"name" => __( "Vacation Deals", "TripSupport" ),
		"singular_name" => __( "Vacation", "TripSupport" ),
		"menu_name" => __( "Vacation Deals", "TripSupport" ),
		"all_items" => __( "All Vacation Deals", "TripSupport" ),
		"add_new" => __( "Add New", "TripSupport" ),
		"add_new_item" => __( "Add New Vacation Deal", "TripSupport" ),
		"edit_item" => __( "Edit Vacation Deal", "TripSupport" ),
		"new_item" => __( "New Vacation Deal", "TripSupport" ),
		"view_item" => __( "View Vacation Deal", "TripSupport" ),
		"view_items" => __( "View Vacation Deals", "TripSupport" ),
		"search_items" => __( "Search Vacation Deals", "TripSupport" ),
		"not_found" => __( "No Vacation Deals found", "TripSupport" ),
		"not_found_in_trash" => __( "No Vacation Deals found in Trash", "TripSupport" ),
		"featured_image" => __( "Featured image for this Vacation Deal", "TripSupport" ),
		"set_featured_image" => __( "Set featured image for this Vacation Deal", "TripSupport" ),
		"remove_featured_image" => __( "Remove featured image for this Vacation Deal", "TripSupport" ),
		"use_featured_image" => __( "Use as featured image for this Vacation Deal", "TripSupport" ),
		"archives" => __( "Vacation Deal archives", "TripSupport" ),
		"insert_into_item" => __( "Insert into Vacation Deal", "TripSupport" ),
		"uploaded_to_this_item" => __( "Uploaded to this Vacation Deal", "TripSupport" ),
		"filter_items_list" => __( "Filter Vacation Deal list", "TripSupport" ),
		"items_list_navigation" => __( "Vacation Deal list navigation", "TripSupport" ),
		"items_list" => __( "Vacation Deals list", "TripSupport" ),
		"attributes" => __( "Vacation Deals Attributes", "TripSupport" ),
		"name_admin_bar" => __( "Vacation Deal", "TripSupport" ),
		"item_published" => __( "Vacation Deal published", "TripSupport" ),
		"item_published_privately" => __( "Vacation Deal published privately", "TripSupport" ),
		"item_reverted_to_draft" => __( "Vacation Deal reverted to draft", "TripSupport" ),
		"item_scheduled" => __( "Vacation Deal scheduled", "TripSupport" ),
		"item_updated" => __( "Vacation Deal updated", "TripSupport" ),
	];

	$args = [
		"label" => __( "Vacation Deals", "TripSupport" ),
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
		"rewrite" => [ "slug" => "vacation-deals", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-palmtree",
		"supports" => [ "title", "editor", "thumbnail", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "countries" ],
		"show_in_graphql" => false,
	];

	register_post_type( "vacation_deals", $args );
}

add_action( 'init', 'cptui_register_my_cpts_vacation_deals' );
