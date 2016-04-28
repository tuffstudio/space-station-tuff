<?php

function register_footer_menu() {
    register_nav_menu('footer_navigation', 'Footer navigation' );
    register_nav_menu('secondary_footer_navigation', 'Secondary footer navigation' );
}

add_filter( 'init', 'register_footer_menu' );
