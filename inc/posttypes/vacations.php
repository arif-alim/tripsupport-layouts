<?php
function cw_post_type_vacation()
{
    $supports = array(
        'title', // post title
        'editor', // post content
        'thumbnail', // featured image
        'custom-fields',
        'revisions', // post revisions
    );
    $labels = array(
        'name' => __('Vacation'),
        'singular_name' => __('Vacation'),
        'menu_name' => __('Vacation'),
        'name_admin_bar' => __('Vacation'),
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
        'rewrite' => array('slug' => 'tr-vacation'),
        'has_archive' => true,
        'hierarchical' => true,
    );
    register_post_type('vacation', $args);
}
add_action('init', 'cw_post_type_vacation');