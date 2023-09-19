<?php
$labels = [
    'name' => __('Samples', 'usefool'),
    'singular_name' => __('Sample', 'usefool'),
    'add_new' => __('Ajouter', 'usefool'),
    'add_new_item' => __('Add a sample', 'usefool'),
    'edit_item' => __('Edit the sample', 'usefool'),
    'new_item' => __('New sample', 'usefool'),
    'view_item' => __('View the sample', 'usefool'),
    'search_items' => __('Search a sample', 'usefool'),
    'not_found' =>  __('No sample found.', 'usefool'),
    'all_items' => __('All sample', 'usefool'),
    'not_found_in_trash' => __('No sample found in the trash.', 'usefool'),
    'parent_item_colon' => __('', 'usefool'),
];

$args = [
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'hierarchical' => true,
    'capability_type' => 'page',
    'supports' => [
        'title',
        'editor',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'page-attributes'
    ],
    'taxonomies' => [],
    'has_archive' => false,
    'rewrite' => ['slug' => 'cas-clients', 'with_front' => true],
    'menu_position' => 6,
    'menu_icon' => 'dashicons-awards',
];

register_post_type('sample', $args);
