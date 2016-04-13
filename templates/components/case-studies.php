<?php
    use Roots\Sage\ExcerptText;
?>

<section class="section case-studies is-hidden js-section-reveal <?= is_front_page() ? '' : 'section--small-space';?>">
    <div class="container">
        <div class="owl-carousel js-case-studies-carousel">
            <?php

            $query = new WP_Query( $args_case_study );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();
                    $case_study_id = $post->ID;
                    $case_study_category = get_the_terms($case_study_id, 'case_study_category')[0]->name;
                    $case_study_link = get_permalink($case_study_id);

                    $case_study_fields = CFS()->get(false, $case_study_id, array( 'format' => 'raw' ));
                    $case_study_img_id = $case_study_fields['case_study_thumbnail'];
                    $case_study_img_url = get_the_post_thumbnail($case_study_id, 'full');
                    $case_study_video = $case_study_fields['case_study_video_link'];
            ?>
                <div class="grid grid--middle">
                    <div class="grid__item tablet--one-half">
                        <div class="case-study__info">
                            <p class="section__category">Case studies: <span><?= $case_study_category; ?></span></p>
                            <h2 class="headline--default">
                                <a href="<?= $case_study_link; ?>">
                                    <?= the_title(); ?>
                                </a>
                            </h2>
                            <div class="case-study__description">
                                <?php
                                    $description = $post->post_content;

                                    echo ExcerptText\getShortText($description, 300);
                                ?>
                            </div>

                            <a href="<?= $case_study_link; ?>" class="btn btn--primary">View case study</a>
                        </div>
                    </div><!--
                    --><div class="grid__item tablet--one-half phone--hide tablet--show">
                        <div class="case-study__thumbnail <?= strlen($case_study_video) != 0 ? 'is-video' : ''?>">
                            <?= $case_study_img_url; ?>
                            <button class="btn btn--play">play</button>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
