<?php use Roots\Sage\MagazinePost; ?>
<?php include 'canvas/header.php'; ?>

<section class="section section--bottom-stains">
    <div class="container js-canvas">
        <div class="grid grid--full">
            <div class="grid__item desktop--one-quarter js-target">
                <?php include 'canvas/navigation.php' ?>
            </div><!--
            --><div class="grid__item desktop--three-quarters category__posts js-owner">
                <?php
                    $i = 1;
                    while (have_posts()) :
                        the_post();
                        $canvas_post = new MagazinePost\MagazinePost($post->ID);
                ?>
                    <div class="single-canvas <?= $i > 2 ? 'is-hidden js-section-reveal' : ''; ?> ">
                        <div class="grid grid--middle <?= $i % 2 == 0 ? 'grid--rev' : ''; ?>">
                            <div class="grid__item tablet--one-third desktop--two-fifths single-canvas__half">
                                <a href="<?= $canvas_post->get_link(); ?>" class="masonry__link">
                                    <div class="single-canvas__thumbnail">
                                        <?= $canvas_post->get_image('medium'); ?>
                                    </div>
                                </a>
                            </div><!--
                            --><div class="grid__item tablet--two-thirds desktop--three-fifths single-canvas__half">
                                <div class="single-canvas__content">
                                    <p class="masonry__tile-category">Canvas <span><?= $canvas_post->get_category(); ?></span></p>
                                    <a href="<?= $canvas_post->get_link(); ?>" class="single-canvas__link">
                                        <h2 class="canvas-post__title canvas-post__title--small"><?= $canvas_post->get_title(); ?></h2>
                                    </a>
                                    <div class="single-canvas__text"><?= $canvas_post->get_excerpt(120); ?>...</div>
                                    <p class="canvas-post__info canvas-post__info--space">Posted by <?= get_the_author(); ?>, <?= get_the_date('l j F Y'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++; endwhile;  ?>

                <div class="pagination">
                    <div class="grid grid--full">
                        <div class="grid__item one-half u--align-left">
                            <?php previous_posts_link(); ?>
                        </div><!--
                        --><div class="grid__item one-half u--align-right">
                            <?php next_posts_link(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
