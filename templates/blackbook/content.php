<?php
    $page_fields = CFS()->get(false, $post->ID);
    $content = $post->post_content;
    $content = apply_filters('the_content', $content);
?>

<section class="section--background-space">
    <div class="container">
        <img src="<?= get_template_directory_uri();?>/dist/images/logo-blackbook.png" alt="Black book" class="img--blackbook-logo">
        <h1 class="headline--main headline--white">
            <?= $page_fields['ss_blackbook_headline'] ?>
        </h1>
        <article class="text-description text-description--letter text-description--white text-description--space blackbook__first">
            <?= $page_fields['ss_blackbook_paragraph'] ?>
        </article>

        <h2 class="headline--main headline--main--secondary headline--white">
            <?= $page_fields['ss_blackbook_headline2'] ?>
        </h2>
        <article class="text-description text-description--white text-description--space">
            <?= $page_fields['ss_blackbook_paragraph2'] ?>
        </article>
    </div>
</section>
