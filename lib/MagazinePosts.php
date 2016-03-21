<?php
// namespace Roots\Sage\MagazinePosts;

class MagazinePost {
    private $id;

    function __construct($id) {
        $this->id = $id;
    }

    function title() {
        return get_the_title($this->id);
    }

    function image($size) {
        return get_the_post_thumbnail($this->id, $size);
    }

    function link() {
        return get_permalink($this->id);
    }
}
