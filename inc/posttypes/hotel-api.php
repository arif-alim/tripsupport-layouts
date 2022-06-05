<?php
function cw_post_type_hotel_api()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'thumbnail', // featured image
        'custom-fields',
        'revisions', // post revisions
    );
    $labels = array(
        'name' => __('Hotel API'),
        'singular_name' => __('Hotel API'),
        'menu_name' => __('Hotel API'),
        'name_admin_bar' => __('Hotel API'),
        'add_new' => __('New'),
        'add_new_item' => __('Add Item'),
        'new_item' => __('New Item'),
        'edit_item' => __('Edit'),
        'view_item' => __('View'),
        'all_items' => __('View All'),
        'search_items' => __('Search'),
        'not_found' => __('No Items'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'hotel_api'),
        'has_archive' => true,
        'hierarchical' => true,
    );
    register_post_type('hotel_api', $args);
}

add_action('init', 'cw_post_type_hotel_api');