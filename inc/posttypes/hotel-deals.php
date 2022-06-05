<?php

function cptui_register_my_cpts_hotel_deals() {

	/**
	 * Post Type: Hotel Deals.
	 */

	$labels = [
		"name" => __( "Hotel Deals", "TripSupport" ),
		"singular_name" => __( "Hotel Deal", "TripSupport" ),
		"menu_name" => __( "Hotel Deals", "TripSupport" ),
		"all_items" => __( "All Hotel Deals", "TripSupport" ),
		"add_new" => __( "Add New", "TripSupport" ),
		"add_new_item" => __( "Add New Hotel Deal", "TripSupport" ),
		"edit_item" => __( "Edit Hotel Deal", "TripSupport" ),
		"new_item" => __( "New Hotel Deal", "TripSupport" ),
		"view_item" => __( "View Hotel Deal", "TripSupport" ),
		"view_items" => __( "View Hotel Deals", "TripSupport" ),
		"search_items" => __( "Search Hotel Deals", "TripSupport" ),
		"not_found" => __( "No Hotel Deals found", "TripSupport" ),
		"not_found_in_trash" => __( "No Hotel Deals found in Trash", "TripSupport" ),
		"parent" => __( "Parent Hotel Deals:", "TripSupport" ),
		"featured_image" => __( "Featured image for this Hotel Deal", "TripSupport" ),
		"set_featured_image" => __( "Set featured image for this Hotel Deal", "TripSupport" ),
		"remove_featured_image" => __( "Remove featured image for this Hotel Deal", "TripSupport" ),
		"use_featured_image" => __( "Use as featured image for this Hotel Deal", "TripSupport" ),
		"archives" => __( "Hotel Deals archives", "TripSupport" ),
		"insert_into_item" => __( "Insert into hotel deal", "TripSupport" ),
		"uploaded_to_this_item" => __( "Uploaded to this hotel deal", "TripSupport" ),
		"filter_items_list" => __( "Filter hotel deals list", "TripSupport" ),
		"items_list_navigation" => __( "Hotel Deals list navigation", "TripSupport" ),
		"items_list" => __( "Hotel Deals list", "TripSupport" ),
		"attributes" => __( "Hotel Deals Attributes", "TripSupport" ),
		"name_admin_bar" => __( "Hotel Deals", "TripSupport" ),
		"item_published" => __( "Hotel Deal published", "TripSupport" ),
		"item_published_privately" => __( "Hotel Deal published privately", "TripSupport" ),
		"item_reverted_to_draft" => __( "Hotel Deal reverted to draft", "TripSupport" ),
		"item_scheduled" => __( "Hotel Deal scheduled", "TripSupport" ),
		"item_updated" => __( "Hotel Deal updated", "TripSupport" ),
		"parent_item_colon" => __( "Parent Hotel Deals:", "TripSupport" ),
	];

	$args = [
		"label" => __( "Hotel Deals", "TripSupport" ),
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
		"rewrite" => [ "slug" => "hotel-deals", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-building",
		"supports" => [ "title", "editor", "thumbnail", "trackbacks", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "countries" ],
		"show_in_graphql" => false,
	];

	register_post_type( "hotel_deals", $args );
}

add_action( 'init', 'cptui_register_my_cpts_hotel_deals' );
