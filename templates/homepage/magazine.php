<?php
    use Roots\Sage\MagazinePost;

    $home_fields = CFS() -> get(false, $post->ID);
    $title = $home_fields['ss_homepage_magazine_title'];
    $subtitle = $home_fields['ss_homepage_magazine_subtitle'];
    $magazine_posts = $home_fields['ss_homepage_posts'];

    foreach ($magazine_posts as $index => $id) {
        $magazine{$index} = new MagazinePost\MagazinePost($id);
    }
?>

<section class="section magazine is-hidden js-section-reveal">
    <div class="container container--full">
        <div class="grid grid--full">
            <div class="grid__item tablet--one-half">
                <div class="grid__item">
                    <div class="masonry__item masonry__item--rectangular">
                        <div class="masonry__tile--center">
                            <p class="section__category">Magazine</p>
                            <h2 class="section__title"><?= $title; ?></h2>
                            <p class="section__subtitle"><?= $subtitle; ?></p>
                        </div>
                    </div>
                </div><!--
                --><div class="grid__item">
                    <div class="grid__item">
                        <?php
                            if(array_key_exists(0, $magazine_posts)) :
                                $post = $magazine{0};
                        ?>
                            <a href="<?= $post->get_link(); ?>" class="masonry__link">
                                <div class="grid__item one-half">
                                    <div class="masonry__item masonry__item--square masonry__image">
                                        <?= $post->get_image('square_small'); ?>
                                    </div>
                                </div><!--
                                --><div class="grid__item one-half">
                                    <div class="masonry__item masonry__item--square">
                                        <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                            <div class="masonry__tile-border"></div>
                                            <div class="masonry__tile-info">
                                                <p class="masonry__tile-category"><span><?= $post->get_category(); ?></span></p>
                                                <h3 class="masonry__tile-title"><?= $post->get_title() ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div><!--
                    --><div class="grid__item">
                        <?php
                            if(array_key_exists(1, $magazine_posts)) :
                                $post = $magazine{1};
                        ?>
                            <a href="<?= $post->get_link(); ?>" class="masonry__link">
                                <div class="grid__item one-half">
                                    <div class="masonry__item masonry__item--square">
                                        <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                            <div class="masonry__tile-border"></div>
                                            <div class="masonry__tile-info">
                                                <p class="masonry__tile-category"><span><?= $post->get_category(); ?></span></p>
                                                <h3 class="masonry__tile-title"><?= $post->get_title(); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--
                                --><div class="grid__item one-half">
                                    <div class="masonry__item masonry__item--square masonry__image">
                                        <?= $post->get_image('square_small'); ?>
                                    </div>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item tablet--one-half">
                <div class="grid__item">
                    <?php
                        if(array_key_exists(2, $magazine_posts)) :
                            $post = $magazine{2};
                    ?>
                        <a href="<?= $post->get_link(); ?>" class="masonry__link">
                            <div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                        <div class="masonry__tile-border"></div>
                                        <div class="masonry__tile-info">
                                            <p class="masonry__tile-category"><span><?= $post->get_category(); ?></span></p>
                                            <h3 class="masonry__tile-title"><?= $post->get_title(); ?></h3>
                                        </div>
                                    </div>
                                </div>
                            </div><!--
                            --><div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square masonry__image">
                                    <?= $post->get_image('square_small'); ?>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div><!--
                --><div class="grid__item masonry__image">
                    <?php
                        if(array_key_exists(3, $magazine_posts)) :
                            $post = $magazine{3};
                    ?>
                        <a href="<?= $post->get_link(); ?>" class="masonry__link">
                            <?= $post->get_image('square_big'); ?>
                            <div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square"></div>
                            </div><!--
                            --><div class="grid__item one-half">
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile--white">
                                        <div class="masonry__tile-border"></div>
                                        <div class="masonry__tile-info">
                                            <p class="masonry__tile-category"><span><?= $post->get_category(); ?></span></p>
                                            <h3 class="masonry__tile-title"><?= $post->get_title(); ?></h3>
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
    </div>
</section>

<?php wp_reset_postdata(); ?>
