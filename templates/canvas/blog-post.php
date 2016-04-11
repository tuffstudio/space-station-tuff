<?php
    // Post logic
    $tags = wp_get_post_tags($post->ID);

    // TODO: Get author informations
    $related_case_study = CFS() -> get('related_case_study', $post->ID);
?>
<div class="grid grid--full">
    <div class="grid__item">
        <div class="canvas-post__image">
            <?php the_post_thumbnail() ?>
        </div>
    </div>
    <div class="grid__item">
        <div class="canvas-post__header">
            <p class="masonry__tile-category canvas-post__category">Art: <span>Photography Spotlight</span></p>
            <h1 class="canvas-post__title"><?php the_title(); ?></h1>
            <p class="canvas-post__info">Posted by Liv Siddal, <?= get_the_date('l j F Y'); ?></p>
            <?php get_template_part('entry-meta'); ?>
        </div>
    </div>
    <div class="grid__item tablet--two-thirds">
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
            </div>
        </div>
    </div><!--
    --><div class="grid__item tablet--one-third">
        <div class="canvas-post__sidebar">
            <div class="moving-box is-moved full-visible moving-box--static canvas-post__sidebar-box">
                <div class="moving-box__element moving-box__content">
                    <p class="moving-box__title">THE ART OF VALUATION</p>
                    <p class="moving-box__text">
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
