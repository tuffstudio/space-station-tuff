<?php

function create_types_taxonomies() {
    /**
     * Register case study category taxonomies
     */
    $case_study_labels = array(
        'name'              => 'Case study categories',
        'singular_name'     => 'Case study category',
        'search_items'      => 'Search case study category',
        'all_items'         => 'All categories',
        'parent_item'       => 'Parent',
        'parent_item_colon' => 'Parent: ',
        'edit_item'         => 'Edit case study category',
        'update_item'       => 'Update case study category',
        'add_new_item'      => 'Add new case study category',
        'new_item_name'     => 'New case study category name',
        'menu_name'         => 'Categories',
    );
    $case_study_args = array(
        'hierarchical'      => true,
        'labels'            => $case_study_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'case-study/category' ),
    );
    register_taxonomy('case_study_category', array('case-study' ), $case_study_args);


    /**
     * Register address book (business directory) category taxonomies
     */
    $address_book_labels = array(
        'name'              => 'Address Book categories',
        'singular_name'     => 'Address Book category',
        'search_items'      => 'Search address book category',
        'all_items'         => 'All categories',
        'parent_item'       => 'Parent',
        'parent_item_colon' => 'Parent: ',
        'edit_item'         => 'Edit address book category',
        'update_item'       => 'Update address book category',
        'add_new_item'      => 'Add new address book category',
        'new_item_name'     => 'New category name',
        'menu_name'         => 'Categories',
    );
    $address_book_args = array(
        'hierarchical'      => true,
        'labels'            => $address_book_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'address-book/category' ),
    );
    register_taxonomy('address-book-category', array('address-book' ), $address_book_args);
}

add_action( 'init', 'create_types_taxonomies', 0 );
