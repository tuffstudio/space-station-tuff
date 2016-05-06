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

        return ExcerptText\getShortText(strip_tags($post_content), $length);
    }
}

class CaseStudyPost extends MagazinePost {
    private $video_link;

    function __construct($id) {
        $this->id = $id;
        $this->set_video_link($id);
    }

    private function set_video_link($id) {
        $this->video_link = CFS()->get('case_study_video_link', $id);
    }

    function get_category() {
        return get_the_terms($this->id, 'case_study_category')[0]->name;
    }

    // Returns boolean value
    function has_video() {
        return strlen($this->video_link) != 0 ? true : false;
    }

    function get_video_link() {
        return $this->video_link;
    }
}

class TeamMember extends MagazinePost {

}
