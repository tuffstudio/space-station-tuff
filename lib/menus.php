<?php

function register_footer_menu() {
    register_nav_menu('footer_navigation', 'Footer Menu' );
}

add_filter( 'init', 'register_footer_menu' );
