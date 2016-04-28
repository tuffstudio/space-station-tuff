<?php use Roots\Sage\MagazinePost; ?>

<?php
    $case_id = $post->ID;
    $case_study = new MagazinePost\CaseStudyPost($case_id);
?>

<section class="section section--first section--top-stains">
    <div class="container">
        <div class="case-study">
            <div class="grid grid--full grid--center">
                <div class="grid__item desktop--three-quarters">
                    <nav class="nav__secondary">
                        <a href="#" class="link--standard link--back js-go-back">
                            Go back
                        </a>
                    </nav>
                    <div class="canvas-post__image">
                        <?php if($case_study->has_video()) : ?>
                            <?php
                                // TODO: it a place for video
                                echo 'here is a video';
                            ?>
                        <?php else : ?>
                            <?= $case_study->get_image('full'); ?>
                        <?php endif; ?>
                    </div>

                    <div class="canvas-post__header">
                        <p class="masonry__tile-category canvas-post__category"><span><?= $case_study->get_category(); ?></span></p>
                        <h1 class="canvas-post__title"><?php the_title(); ?></h1>
                        <?php include dirname(__FILE__) . '/components/author.php'; ?>
                    </div>

                    <?php include dirname(__FILE__) . '/components/socials.php'; ?>

                    <div class="canvas-post__content">
                        <div class="canvas-post__post">
                            <?php
                                $content = $post->post_content;
                                $content = apply_filters('the_content', $content);

                                echo $content;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
