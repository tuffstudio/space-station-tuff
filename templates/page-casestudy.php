<?php
    use Roots\Sage\MagazinePost;

    $content = $post->post_content;
    $commercial_fiels = CFS()->get(false, $post->ID);
    $case_studies = [];

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

<section class="section--top-small-space container container--space">
    <h2 class="title--main">
        <?php the_title(); ?>
    </h2>
    <h1 class="headline--main">
        <?= $commercial_fiels['sp_commercial_headline']; ?>
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
                            if(array_key_exists(0, $case_studies)) :
                                $case = $case_study{0};
                        ?>
                            <a href="<?= $case->get_link(); ?>" class="masonry__link">
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                        <div class="masonry__tile-border"></div>
                                        <div class="masonry__tile-info">
                                            <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                                            <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                                            <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="grid__item">
                    <?php
                        if(array_key_exists(2, $case_studies)) :
                            $case = $case_study{2};
                    ?>
                        <a href="<?= $case->get_link(); ?>" class="masonry__link">
                            <div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                        <div class="masonry__tile-border"></div>
                                        <div class="masonry__tile-info">
                                            <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                                            <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                                            <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--
                            --><div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square masonry__image">
                                    <?= $case->get_image('square_small'); ?>
                                    <?php if($case->has_video()) : ?>
                                        <button class="btn btn--play">play</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div><!--
            --><div class="grid__item tablet--one-half">
                <div class="grid__item masonry__image">
                    <?php
                        if(array_key_exists(1, $case_studies)) :
                            $case = $case_study{1};
                    ?>
                        <a href="<?= $case->get_link(); ?>" class="masonry__link">
                            <?= $case->get_image('square_big'); ?>
                            <div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square"></div>
                            </div><!--
                            --><div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile--white">
                                        <div class="masonry__tile-border"></div>
                                        <div class="masonry__tile-info">
                                            <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                                            <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                                            <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--
                            --><div class="grid__item">
                                <div class="masonry__item masonry__item--rectangular"></div>
                            </div>
                        </a>
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
                            if(array_key_exists(3, $case_studies)) :
                                $case = $case_study{3};
                        ?>
                            <a href="<?= $case->get_link(); ?>" class="masonry__link">
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                        <div class="masonry__tile-border"></div>
                                        <div class="masonry__tile-info">
                                            <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                                            <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                                            <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="grid__item">
                    <?php
                        if(array_key_exists(4, $case_studies)) :
                            $case = $case_study{4};
                    ?>
                        <a href="<?= $case->get_link(); ?>" class="masonry__link">
                            <div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                        <div class="masonry__tile-border"></div>
                                        <div class="masonry__tile-info">
                                            <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                                            <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                                            <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--
                            --><div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square masonry__image">
                                    <?= $case->get_image('square_small'); ?>
                                    <?php if($case->has_video()) : ?>
                                        <button class="btn btn--play">play</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div><!--
            --><div class="grid__item tablet--one-half">
                <div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile-link masonry__tile-link--quote">
                            <span class="quote">
                                Russel is the master of mortar, the king of concrete and the master of the deal
                                <span class="author">King Arthur</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="grid__item masonry__image">
                    <?php
                        if(array_key_exists(5, $case_studies)) :
                            $case = $case_study{5};
                    ?>
                        <a href="<?= $case->get_link(); ?>" class="masonry__link">
                            <?= $case->get_image('square_big'); ?>
                            <div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square"></div>
                            </div><!--
                            --><div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile--white">
                                        <div class="masonry__tile-border"></div>
                                        <div class="masonry__tile-info">
                                            <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                                            <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                                            <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--
                            --><div class="grid__item">
                                <div class="masonry__item masonry__item--rectangular"></div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="grid grid--full is-hidden js-section-reveal">
            <div class="grid__item tablet--one-half">
                <?php
                    if(array_key_exists(6, $case_studies)) :
                        $case = $case_study{6};
                ?>
                    <a href="<?= $case->get_link(); ?>" class="masonry__link">
                        <div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square">
                                <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                    <div class="masonry__tile-border"></div>
                                    <div class="masonry__tile-info">
                                        <p class="masonry__tile-category">Case studies: <span><?= $case->get_category(); ?></span></p>
                                        <h3 class="masonry__tile-title"><?= $case->get_title() ?></h3>
                                        <p class="masonry__tile-desc masonry__tile-desc--small"><?= $case->get_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div><!--
                        --><div class="grid__item one-half">
                            <div class="masonry__item masonry__item--square masonry__image">
                                <?= $case->get_image('square_small'); ?>
                                <?php if($case->has_video()) : ?>
                                    <button class="btn btn--play">play</button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
            </div><!--
            --><div class="grid__item tablet--one-half">
                <div class="grid__item one-half"></div><!--
                --><div class="grid__item one-half">
                    <div class="masonry__item masonry__item--square">
                        <div class="masonry__tile masonry__tile-link masonry__tile-link--quote">
                            <span class="quote">
                                Russel is the master of mortar, the king of concrete and the master of the deal
                                <span class="author">Marc Quinn, Artist</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
