<?php
    namespace Roots\Sage\CategoriesInPage;

    function taxonomies_for_pages() {
        register_taxonomy_for_object_type('post_tag', 'page');
        register_taxonomy_for_object_type('category', 'page');
    }

    function category_info($category) {
        $category_id = $category->term_id;
        $category_name = $category->name;
        $category_link = get_category_link($category_id);

        return array(
            'name' => $category_name,
            'link' => $category_link,
            'id' => $category_id
        );
    }

    function last_posts($category_id, $number_posts = 2, $exclude = '') {
        $args = array(
            'numberposts' => $number_posts,
            'category' => $category_id,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'exclude' => $exclude,
        );

        return wp_get_recent_posts($args, OBJECT);
    }

add_action( 'init', __NAMESPACE__ .'\\taxonomies_for_pages' );
