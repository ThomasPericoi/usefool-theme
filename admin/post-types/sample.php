<?php
$labels = [
    'name' => 'Samples',
    'singular_name' => 'Sample',
    'add_new' => 'Add',
    'add_new_item' => 'Add a sample',
    'edit_item' => 'Edit the sample',
    'new_item' => 'New sample',
    'view_item' => 'View the sample',
    'search_items' => 'Search a sample',
    'not_found' =>  'No sample found.',
    'all_items' => 'All sample',
    'not_found_in_trash' => 'No sample found in the trash.',
    'parent_item_colon' => ''
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
