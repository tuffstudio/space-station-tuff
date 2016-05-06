<?php
    use Roots\Sage\MagazinePost;

    $content = $post->post_content;
    $commercial_fields = CFS()->get(false, $post->ID);
    $case_studies = [];
    $quotes = $commercial_fields['casestudy_index_chosen_quotes'];

    $args = array(
        'post_type' => 'case-study',
        'post_status' => 'publish',
        'posts_per_page' => 7,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query( $args );


    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $case_studies[] = $post;
        }
    }

    foreach ($case_studies as $index => $object) {
        $id = $object->ID;
        $case_study{$index} = new MagazinePost\CaseStudyPost($id);
    }

    wp_reset_postdata();
?>
<div class="case-studies__bg">
    <section class="section--top-small-space container container--space">
        <h2 class="title--main">
            <?php the_title(); ?>
        </h2>
        <h1 class="headline--main headline--small-space">
            <strong><?= $commercial_fields['sp_commercial_headline']; ?></strong>
        </h1>
        <article class="text-description text-description--single">
            <?= $content; ?>
        </article>
    </section>

    <section class="section--bottom-space">
        <div class="container container--full">
            <div class="grid grid--full">
                <div class="grid__item tablet--one-half">
                    <div class="grid__item">
                        <div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square"></div>
                        </div><!--
                        --><div class="grid__item one-half">
                            <?php
                                if(array_key_exists(0, $case_studies)) {
                                    $case = $case_study{0};
                                    include 'case-studies/small-single.php';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="grid__item">
                        <?php
                            if(array_key_exists(2, $case_studies)) {
                                $case = $case_study{2};
                                include 'case-studies/small.php';
                            }
                        ?>
                    </div>
                </div><!--
                --><div class="grid__item tablet--one-half">
                    <div class="grid__item masonry__image">
                        <?php
                            if(array_key_exists(1, $case_studies)) {
                                $case = $case_study{1};
                                include 'case-studies/big.php';
                            }
                        ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="grid grid--full is-hidden js-section-reveal">
                <div class="grid__item tablet--one-half">
                    <div class="grid__item">
                        <div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square"></div>
                        </div><!--
                        --><div class="grid__item one-half">
                            <?php
                                if(array_key_exists(3, $case_studies)) {
                                    $case = $case_study{3};
                                    include 'case-studies/small-single.php';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="grid__item">
                        <?php
                            if(array_key_exists(4, $case_studies)) {
                                $case = $case_study{4};
                                include 'case-studies/small.php';
                            }
                        ?>
                    </div>
                </div><!--
                --><div class="grid__item tablet--one-half">
                    <div class="grid__item one-half">
                        <?php
                            if($quotes[0]) :
                                $quote = CFS()->get(false, $quotes[0]);
                        ?>
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile-link masonry__tile-link--quote">
                                    <span class="quote">
                                        "<?= $quote['quote_content']; ?>
                                        <span class="author"><?= $quote['quote_author']; ?></span>
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="grid__item">
                        <?php
                            if(array_key_exists(5, $case_studies)) {
                                $case = $case_study{5};
                                include 'case-studies/big.php';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="grid grid--full is-hidden js-section-reveal">
                <div class="grid__item tablet--one-half">
                    <?php
                        if(array_key_exists(6, $case_studies)) {
                            $case = $case_study{6};
                            include 'case-studies/small.php';
                        }
                    ?>
                </div><!--
                --><div class="grid__item tablet--one-half">
                    <div class="grid__item one-half"></div><!--
                    --><div class="grid__item one-half">
                        <?php
                            if($quotes[1]) :
                                $quote = CFS()->get(false, $quotes[1]);
                        ?>
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile-link masonry__tile-link--quote">
                                    <span class="quote">
                                        "<?= $quote['quote_content']; ?>
                                        <span class="author"><?= $quote['quote_author']; ?></span>
                                    </span>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'homepage/stay-in-touch.php'; ?>
