<?php

    function get_address_book_posts($param) {
        $query_string = $_GET['data'];
        include(locate_template('templates/canvas/ajax-address-book.php'));
        die();
    }
    add_action('wp_ajax_get_address_book_posts', 'get_address_book_posts');
    add_action('wp_ajax_nopriv_get_address_book_posts', 'get_address_book_posts');


    function get_saved_properties() {
        $properties = isset($_GET['data']) ? $_GET['data'] : NULL;
        include(locate_template('templates/property/favourites.php'));
        die();
    }
    add_action('wp_ajax_get_saved_properties', 'get_saved_properties');
    add_action('wp_ajax_nopriv_get_saved_properties', 'get_saved_properties');
