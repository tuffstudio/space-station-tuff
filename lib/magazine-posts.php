<?php
namespace Roots\Sage\MagazinePost;

use Roots\Sage\ExcerptText;

class MagazinePost {
    protected $id;

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

class CaseStudyPost extends MagazinePost {
    function get_category() {
        return get_the_terms($this->id, 'case_study_category')[0]->name;
    }

    // Returns boolean value
    function has_video() {
        $video_link = CFS()->get('case_study_video_link', $this->id);

        return strlen($video_link) != 0 ? true : false;
    }
}

class TeamMember extends MagazinePost {
    
}
