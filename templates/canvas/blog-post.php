<?php
    use Roots\Sage\MagazinePost;
    use Roots\Sage\CategoriesInPage;

    // Post logic
    $post_id = $post->ID;
    $categories = get_the_category();

    $author_id = $post->post_author;
    $author_name = get_the_author_meta('display_name', $author_id);

    if(array_key_exists(0, $categories)) {
        $category = CategoriesInPage\category_info($categories[0]);
    }

    $related_case_study = CFS() -> get('related_case_study', $post_id);

    $page_url = urlencode(get_permalink());
    $page_title = urlencode(get_the_title());

    $facebook_share = 'https://www.facebook.com/sharer/sharer.php?u=' . $page_url . '&title=' . $page_title . '&display=popup';
    $twitter_share = 'http://twitter.com/intent/tweet?status=' . $page_title . '+' . $page_url;
    $linkedin_share = 'http://www.linkedin.com/shareArticle?mini=true&url=' . $page_url . '&title=' . $page_title;
?>
<div class="grid grid--full">
    <div class="grid__item">
        <nav class="nav__secondary">
            <a href="/canvas-magazine" class="link--standard link--back">
                back to Canvas Magazine
            </a>
        </nav>
        <div class="canvas-post__image">
            <?php the_post_thumbnail() ?>
        </div>
    </div>
    <div class="grid__item">
        <div class="canvas-post__header">
            <p class="masonry__tile-category canvas-post__category"><a href="<?= $category['link']; ?>"><span><?= $category['name']; ?></span></a></p>
            <h1 class="canvas-post__title"><?php the_title(); ?></h1>
            <p class="canvas-post__info">Posted by <?= $author_name; ?>, <?= get_the_date('l j F Y'); ?></p>
        </div>
    </div>
    <div class="grid__item tablet--two-thirds">
        <div class="socials">
            <script
                type="text/javascript"
                async defer
                src="https://assets.pinterest.com/js/pinit.js"
                data-pin-hover="true"
                data-pin-tall="true">
            </script>
            <span class="social__title">Share</span>
            <ul class="socials__list">
                <li class="socials__list-item">
                    <a href="<?= $facebook_share ?>" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=580')">
                        <span class="icon icon-facebook"></span>
                    </a>
                </li>
                <li class="socials__list-item">
                    <a href="<?= $twitter_share ?>" onclick="return !window.open(this.href, 'Twitter', 'width=640,height=380')">
                        <span class="icon icon-twitter"></span>
                    </a>
                </li>
                <li class="socials__list-item">
                    <a data-pin-do="buttonBookmark" data-pin-custom="true" data-pin-log="button_pinit_bookmarklet" href="https://pl.pinterest.com/pin/create/button/">
                        <span class="icon icon-pinterest"></span>
                    </a>
                </li>
                <li class="socials__list-item">
                    <a href="mailto:?subject=<?php the_title(); ?>"><span class="icon icon-email"></span></a>
                </li>
            </ul>
        </div>
        <div class="canvas-post__content">
            <div class="canvas-post__post">
                <?php
                    $content = $post->post_content;
                    $content = apply_filters('the_content', $content);

                    echo $content;
                ?>
            </div>
            <div class="canvas-post__recommended">
                <h3 class="canvas-post__recommended-title">Recommended articles</h3>
                <div class="grid grid--full">
                    <?php
                        $three_last_posts = CategoriesInPage\last_posts($category['id'], 3, $post_id);

                        foreach ($three_last_posts as $index) :
                            $post = new MagazinePost\MagazinePost($index->ID);
                    ?><!--
                    --><div class="grid__item tablet--one-third recommended-post">
                        <a href="<?= $post->get_link(); ?>" class="recommended-post__link">
                            <div class="">
                                <div class="recommended-post__image" style="background-image: url('<?= $post->get_image_url(); ?>')"></div>
                                <p class="masonry__tile-category recommended-post__category"><span><?= $post->get_category(); ?></span></p>
                                <h3 class="recommended-post__title"><?= $post->get_title(); ?></h3>
                            </div>
                        </a>
                    </div><!--
                    --><?php endforeach; ?>
                </div>
            </div>
        </div>
    </div><!--
    --><div class="grid__item tablet--one-third">
        <div class="canvas-post__sidebar">
            <div class="moving-box is-moved full-visible moving-box--static canvas-post__sidebar-box">
                <div class="moving-box__element moving-box__content">
                    <p class="moving-box__title">THE ART OF VALUATION</p>
                    <p class="moving-box__text">
                        <?php // TODO: Remember to replace lorem text with correct one ?>
                        Ta nobit quam, to amniet que ficipidus nam as quislinerercst
                    </p>
                    <a href="#" class="btn btn--primary">Download now</a>
                </div>
                <div class="moving-box__element moving-box__border"></div>
            </div>

            <div class="canvas-post__sidebar-box">
                <a href="/?s=" class="masonry__link">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile-link masonry__tile-link--brown">
                            <span>Find a property</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="canvas-post__sidebar-box">
                <a href="#" class="masonry__link">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile-link masonry__tile-link--blackbook"></div>
                    </div>
                </a>
            </div>

            <?php
                if ($related_case_study):
                    $related_case_study_id = $related_case_study[0];
                    $related_case_study_link = get_permalink($related_case_study_id);
                    $related_case_study_title = get_the_title($related_case_study_id);


                    $related_case_study_fields = CFS() -> get(false, $related_case_study_id);

                    $related_case_study_img_id = $related_case_study_fields['case_study_thumbnail'];
                    $related_case_study_img_url = wp_get_attachment_url($related_case_study_img_id, 'full');
            ?>
                <div class="canvas-post__sidebar-box">
                    <a href="<?php echo $related_case_study_link ?>" class="masonry__link">
                        <div class="masonry__item masonry__item--square">
                            <div class="masonry__tile masonry__tile-link masonry__tile-link--cs" style="background-image: url('<?php echo $related_case_study_img_url; ?>')">
                                <span><?php echo $related_case_study_title; ?></span>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
