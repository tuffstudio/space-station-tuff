<?php
namespace Roots\Sage\MagazinePost;

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

    function get_link() {
        return get_permalink($this->id);
    }
}
