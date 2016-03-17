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
                            <p class="section__category">Case studies <span><?= $case_study_category; ?></span></p>
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

<section class="section foo property-base">
    <div class="container">
        <div class="grid grid--rev">
            <div class="grid__item tablet--one-half">
                <div class="grid__item">
                    <div class="masonry__item masonry__item--rectangular">
                        <div class="masonry__tile--center">
                            <p class="section__category">Property</p>
                            <h2 class="section__title">Latest properties</h2>
                        </div>
                    </div>
                </div><!--
                --><div class="grid__item">
                    <div class="grid__item one-half">
                        <a href="#" class="masonry__link">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile--info">
                                    <p class="masonry__tile-category">Commercial: <span>Rent</span></p>
                                    <h3 class="masonry__tile-title">Stratford High Street, e15</h3>
                                    <p class="masonry__tile-price">£114,905 pa</p>
                                    <p class="masonry__tile-desc--big">610sqm UNIT</p>
                                </div>
                            </div>
                    </a>
                    </div><!--
                    --><div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square masonry__image">
                            <img src="<?= get_template_directory_uri(); ?>/dist/images/masonry_small_placeholder.jpg" alt="">
                        </div>
                    </div><!--
                    --><div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square">

                        </div>
                    </div><!--
                    --><div class="grid__item one-half">
                        <a href="#" class="masonry__link">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile--link">
                                    <span>View more properties</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item tablet--one-half">
                <div class="grid__item masonry__image">
                    <img src="<?= get_template_directory_uri() ?>/dist/images/masonry_big_placeholder.jpg" alt="" class="masonry__background-image">
                    <div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square">

                        </div>
                    </div><!--
                    --><div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square">
                            <a href="#" class="masonry__link">
                                <div class="masonry__tile masonry__tile--info">
                                    <p class="masonry__tile-category">Residental: <span>Sale</span></p>
                                    <h3 class="masonry__tile-title">Camden road, e7</h3>
                                    <p class="masonry__tile-price">£4,350,000</p>
                                    <p class="masonry__tile-desc--big">5 bedroom penthouse</p>
                                </div>
                            </a>
                        </div>
                    </div><!--
                    --><div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square">

                        </div>
                    </div><!--
                    --><div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square">

                        </div>
                    </div>
                </div><!--
                --><div class="grid__item">
                    <div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square masonry__image">
                            <img src="<?= get_template_directory_uri(); ?>/dist/images/masonry_small_placeholder.jpg" alt="">
                        </div>
                    </div><!--
                    --><div class="grid__item one-half">
                        <a href="#" class="masonry__link">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile--info">
                                    <p class="masonry__tile-category">Residental: <span>Rent</span></p>
                                    <h3 class="masonry__tile-title">Metropolitan Wharf, e1</h3>
                                    <p class="masonry__tile-price">£2,700pw</p>
                                    <p class="masonry__tile-desc--big">2 bedroom penthouse</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section foo magazine">
    <div class="container">
        <div class="grid">
            <div class="grid__item desktop--one-half">
                <div class="grid__item">nagłówek</div><!--
                --><div class="grid__item">
                    <div class="grid__item one-half">obrazek</div><!--
                    --><div class="grid__item one-half">info</div><!--
                    --><div class="grid__item one-half">info</div><!--
                    --><div class="grid__item one-half">obrazek</div>
                </div>
            </div><!--
            --><div class="grid__item desktop--one-half">
                <div class="grid__item">
                    <div class="grid__item one-half">info</div><!--
                    --><div class="grid__item one-half">obrazek</div>
                </div><!--
                --><div class="grid__item">
                    <div class="grid__item one-half">pusty</div><!--
                    --><div class="grid__item one-half">obrazek</div><!--
                    --><div class="grid__item one-half">pusty</div><!--
                    --><div class="grid__item one-half">pusty</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section stay-in-touch">

</section>
