<?php use Roots\Sage\MagazinePost; ?>

<?php
    $case_id = $post->ID;
    $case_study = new MagazinePost\CaseStudyPost($case_id);
    $related_case_studies = CFS()->get('single_related_case_studies', $case_id);
    $quote_id = CFS()->get('related_quote', $case_id);
?>

<section class="section section--first section--top-stains">
    <div class="container">
        <div class="case-study">
            <div class="grid grid--full grid--center">
                <div class="grid__item">
                    <nav class="nav__secondary">
                        <a href="#" class="link--standard link--back js-go-back">
                            Go back
                        </a>
                    </nav>
                    <div class="canvas-post__image">
                        <?php if($case_study->has_video()) : ?>
                            <video
                                id="case-study"
                                class="video-js vjs-default-skin case-study__video"
                                src="<?= $case_study->get_video_link(); ?>"
                                controls preload="auto"
                                data-setup="{}"
                            >
                                Your browser does nor support video tag.
                            </video>
                        <?php else : ?>
                            <?= $case_study->get_image('full'); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="grid__item">
                    <div class="canvas-post__header">
                        <p class="masonry__tile-category canvas-post__category"><span><?= $case_study->get_category(); ?></span></p>
                        <h1 class="canvas-post__title"><?php the_title(); ?></h1>
                        <?php include dirname(__FILE__) . '/components/author.php'; ?>
                    </div>
                </div>
                <div class="grid__item tablet--two-thirds">
                    <?php include dirname(__FILE__) . '/components/socials-share.php'; ?>

                    <div class="canvas-post__content">
                        <div class="canvas-post__post">
                            <?php
                                $content = $post->post_content;
                                $content = apply_filters('the_content', $content);

                                echo $content;
                            ?>
                        </div>
                    </div>
                </div><!--
                --><div class="grid__item tablet--one-third">
                    <div class="canvas-post__sidebar">
                        <div class="canvas-post__sidebar-box">
                            <?php
                                if($quote_id):
                                    $quote_fields = CFS()->get(false, $quote_id[0]);
                            ?>
                                <div class="masonry__item masonry__item--square">
                                    <div class="masonry__tile masonry__tile-link masonry__tile-link--quote">
                                        <span class="quote">
                                            "<?= $quote_fields['quote_content']; ?>
                                            <span class="author"><?= $quote_fields['quote_author']; ?></span>
                                        </span>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php
                            if($related_case_studies) :
                                foreach($related_case_studies as $id) :
                                    $related_case_study = new MagazinePost\CaseStudyPost($id);
                        ?>
                            <div class="canvas-post__sidebar-box">
                                <a href="<?= $related_case_study->get_link(); ?>" class="masonry__link">
                                    <div class="masonry__item masonry__item--square">
                                        <div class="masonry__tile masonry__tile--white">
                                            <div class="masonry__tile-border"></div>
                                            <div class="masonry__tile-info">
                                                <p class="masonry__tile-category">Case studies: <span><?= $related_case_study->get_category(); ?></span></p>
                                                <h3 class="masonry__tile-title"><?= $related_case_study->get_title(); ?></h3>
                                                <p class="masonry__tile-desc masonry__tile-desc--small"><?= $related_case_study->get_excerpt(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
