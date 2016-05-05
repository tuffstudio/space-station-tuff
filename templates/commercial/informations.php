<?php
    $commercial_fiels = CFS()->get(false, $post->ID);
    $content = $post->post_content;
    $content = apply_filters('the_content', $content);
?>

<section class="section--top-small-space container container--space">
    <h2 class="title--main">
        <?php the_title(); ?>
    </h2>
    <h1 class="headline--main">
        <?= $commercial_fiels['sp_commercial_headline'] ?>
    </h1>
    <article class="text-description text-description--letter">
        <?= $content ?>
    </article>
</section>
