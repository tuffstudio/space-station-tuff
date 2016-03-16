<?php
namespace Roots\Sage\PostTypes;

function custom_post_types_init() {
    /**
     * Register a Case Study post type.
     */
    $labels_case_studies = array(
        'name'               => 'Case Study',
        'singular_name'      => 'Case Study',
        'menu_name'          => 'Case Study',
        'name_admin_bar'     => 'Case Study',
        'add_new'            => 'New Case Study',
        'add_new_item'       => 'Add nowe Case Study',
        'new_item'           => 'New Case Study',
        'edit_item'          => 'Edit Case Study',
        'view_item'          => 'See Case Study',
        'all_items'          => 'All Case Studies',
        'search_items'       => 'Search Case Study',
        'not_found'          => 'Case Study not found ',
        'not_found_in_trash' => 'Not found Case Study in trash'
    );

    $args = array(
        'labels'             => $labels_case_studies,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'case-study' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 2,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'taxonomies'         => array('category'),
        'menu_icon'          => 'dashicons-chart-line'
    );

    register_post_type( 'case-study', $args );
}

add_action('init', __NAMESPACE__ . '\\custom_post_types_init');
