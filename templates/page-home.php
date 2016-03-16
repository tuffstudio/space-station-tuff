<?php
    use Roots\Sage\ExcerptText;
?>

<section class="main-banner">
    <div class="moving-box js-moving-box">
        <div class="moving-box__element moving-box__content">
            <p class="moving-box__title">THE ART OF VALUATION</p>
            <p class="moving-box__text">
                Ta nobit quam, to amniet que ficipidus nam as quislinerercst
            </p>
            <a href="#" class="btn btn--primary">Download now</a>
        </div>
        <div class="moving-box__element moving-box__border"></div>
    </div>
</section>

<section class="section case-studies">
    <div class="container">
        <div class="owl-carousel js-case-studies-carousel">
            <?php
            $args = array(
                'post_type' => 'case-study',
                'post_status' => 'publish',
                'meta_key' => 'case_study_featured'
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) :
                    $query->the_post();
                    $case_study_id = $post->ID;
                    $case_study_category = get_the_category($case_study_id)[0]->name;
                    $case_study_link = get_permalink($case_study_id);

                    $case_study_fields = CFS()->get(false, $case_study_id, array( 'format' => 'raw' ));
                    $case_study_img_id = $case_study_fields['case_study_thumbnail'];
                    $case_study_img_url = wp_get_attachment_image($case_study_img_id, 'full');
                    $case_study_video = $case_study_fields['case_study_video_link'];
            ?>
                <div class="grid grid--middle">
                    <div class="grid__item desktop--one-half">
                        <div class="case-study__info">
                            <p class="case-study__category">Case studies <span><?= $case_study_category; ?></span></p>
                            <h2 class="case-study__title case-study__title--homepage">
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
                    --><div class="grid__item desktop--one-half phone--hide desktop--show">
                        <div class="case-study__thumbnail case-study__thumbnail--<?= strlen($case_study_video) != 0 ? 'video' : ''?>">
                            <?= $case_study_img_url; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>
