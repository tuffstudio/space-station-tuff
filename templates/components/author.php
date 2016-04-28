<?php
    $author_id = $post->post_author;
    $author_name = get_the_author_meta('display_name', $author_id);
?>

<p class="canvas-post__info">Posted by <?= $author_name; ?>, <?= get_the_date('l j F Y'); ?></p>
