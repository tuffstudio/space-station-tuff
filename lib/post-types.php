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

    $args_case_studies = array(
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
        'supports'           => array('title', 'editor', 'thumbnail', 'author'),
        'menu_icon'          => 'dashicons-chart-line'
    );

    register_post_type( 'case-study', $args_case_studies );


    /**
     * Register a address book (business directory) post type.
     */
    $labels_address_book = array(
        'name'               => 'Address Book',
        'singular_name'      => 'Address Book',
        'menu_name'          => 'Address Book',
        'name_admin_bar'     => 'Address Book',
        'add_new'            => 'New Address Book',
        'add_new_item'       => 'Add new Address Book',
        'new_item'           => 'New Address Book',
        'edit_item'          => 'Edit Address Book',
        'view_item'          => 'See Address Book',
        'all_items'          => 'All Address Books',
        'search_items'       => 'Search Address Book',
        'not_found'          => 'Address Book not found ',
        'not_found_in_trash' => 'Not found Address Book in trash'
    );

    $args_address_book = array(
        'labels'             => $labels_address_book,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'address-book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 2,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-book-alt'
    );

    register_post_type( 'address-book', $args_address_book );

    /**
     * Register team member post type.
     */
    $labels_team_member = array(
        'name'               => 'Team member',
        'singular_name'      => 'Team member',
        'menu_name'          => 'Team member',
        'name_admin_bar'     => 'Team member',
        'add_new'            => 'New Team member',
        'add_new_item'       => 'Add new Team member',
        'new_item'           => 'New Team member',
        'edit_item'          => 'Edit Team member',
        'view_item'          => 'See Team member',
        'all_items'          => 'All Team members',
        'search_items'       => 'Search Team member',
        'not_found'          => 'Team member not found ',
        'not_found_in_trash' => 'Not found Team member in trash'
    );

    $args_team_member = array(
        'labels'             => $labels_team_member,
        'public'             => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team-member' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 2,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-groups'
    );

    register_post_type( 'team-member', $args_team_member );
}

add_action('init', __NAMESPACE__ . '\\custom_post_types_init');
