<?php

add_action( 'init', 'create_types_taxonomies', 0 );

function create_types_taxonomies() {
    /**
     * Register case study category taxonomies
     */
    $casestudy_types_labels = array(
        'name'              => 'Case study categories',
        'singular_name'     => 'Case study category',
        'search_items'      => 'Search case study category',
        'all_items'         => 'All case study categories',
        'parent_item'       => 'Nadrzędny typ podróży',
        'parent_item_colon' => 'Nadrzędny typ podróży: ',
        'edit_item'         => 'Edit case study category',
        'update_item'       => 'Update case study category',
        'add_new_item'      => 'Add new case study category',
        'new_item_name'     => 'New case study category name',
        'menu_name'         => 'Categories',
    );
    $casestudy_types_args = array(
        'hierarchical'      => true,
        'labels'            => $casestudy_types_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'typy' ),
    );
    register_taxonomy('pe_trip_types', array('case-study' ), $casestudy_types_args);
}
