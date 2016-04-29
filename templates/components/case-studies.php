<?php
    use Roots\Sage\MagazinePost;
?>

<section class="section case-studies is-hidden js-section-reveal <?= is_front_page() ? '' : 'section--small-space';?>">
    <div class="container">
        <div class="owl-carousel js-case-studies-carousel">
            <?php
            $case_studies = CFS() -> get('ss_case_studies_list', $post->ID);

            if ( $case_studies ) :
                foreach ($case_studies as $key => $id) :
                    $case_study = new MagazinePost\CaseStudyPost($id);
            ?>
                <div class="grid grid--middle">
                    <div class="grid__item tablet--one-half">
                        <div class="case-study__info">
                            <p class="section__category">Case studies: <span><?= $case_study->get_category(); ?></span></p>
                            <h2 class="headline--default">
                                <a href="<?= $case_study->get_link(); ?>">
                                    <?= $case_study->get_title(); ?>
                                </a>
                            </h2>
                            <div class="case-study__description">
                                <?= $case_study->get_excerpt(300); ?>
                            </div>

                            <a href="<?= $case_study->get_link(); ?>" class="btn btn--primary">View case study</a>
                        </div>
                    </div><!--
                    --><div class="grid__item tablet--one-half phone--hide tablet--show">
                        <a href="<?= $case_study->get_link(); ?><?= $case_study->has_video() ? '#play' : ''?>" class="case-study__thumbnail <?= $case_study->has_video() ? 'is-video' : ''?>">
                            <?= $case_study->get_image('case_study'); ?>
                            <button class="btn btn--play">play</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section>
