<?php

function get_address_book_posts($param) {
    $query_string = $_GET['data'];
    include(locate_template('templates/canvas/content-address-book.php'));
    die();
}
add_action('wp_ajax_get_address_book_posts', 'get_address_book_posts');
add_action('wp_ajax_nopriv_get_address_book_posts', 'get_address_book_posts');
