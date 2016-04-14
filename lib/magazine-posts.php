<?php
namespace Roots\Sage\MagazinePost;

use Roots\Sage\ExcerptText;

class MagazinePost {
    private $id;

    function __construct($id) {
        $this->id = $id;
    }

    function get_title() {
        return get_the_title($this->id);
    }

    function get_image($size) {
        return get_the_post_thumbnail($this->id, $size);
    }

    function get_image_url() {
        return get_the_post_thumbnail_url($this->id);
    }

    function get_link() {
        return get_permalink($this->id);
    }

    function get_category() {
        return get_the_category($this->id)[0]->name;
    }

    function get_excerpt($length = 100) {
        $post_content = get_post_field('post_content', $this->id);

        return ExcerptText\getShortText($post_content, $length);
    }
}
