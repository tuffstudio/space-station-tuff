<?php
namespace Roots\Sage\ExcerptText;

function getShortText($text, $length) {
    if (strlen($text) > $length) {
        $little_excerpt = substr($text, 0, $length);

        $words = explode(' ', $little_excerpt);
        $words = array_slice($words, 0, -1);

        $short_text = implode(' ', $words);

        return $short_text;
    } else {
        return $text;
    }
}
