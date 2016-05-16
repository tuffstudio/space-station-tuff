<?php
    use Roots\Sage\MagazinePost;

    $sections = CFS() -> get('whyus_sections', $post->ID);

    function choose_class($iterator, $index) {
        if ($index == 1) {
            return 'masonry__tile-link--black';
        }

        if ($iterator % 2 == 0) {
            return 'masonry__tile-link--brown';
        } else {
            return 'masonry__tile-link--purple';
        }
    }
?>
<?php include 'commercial/informations.php'; ?>

<section>
    <div class="container">
        <ul class="whyus__nav">
            <?php foreach ($sections as $index => $section) : ?>
                <li><a href="#js-whyus-<?= $index; ?>" class="btn btn--action"><?= $section['section_title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="section--bottom-space">
    <div class="container--mobile-full container">
        <?php
            foreach ($sections as $index => $section) :
                $section_title = $section['section_title'];
                $section_content = $section['section_content'];
                $section_content = apply_filters('the_content', $section_content);
                $section_case_study_id = $section['section_case_study'][0];
                $section_case_study = new MagazinePost\CaseStudyPost($section_case_study_id);
                $section_buttons = $section['section_buttons'];
        ?>
            <div id="js-whyus-<?= $index; ?>" class="anchor"></div>
            <div class="grid grid--middle whyus__section <?= $index % 2 == 0 ? '' : 'grid--rev'; ?> is-hidden js-section-reveal">
                <div class="grid__item desktop--one-half whyus__section-half">
                    <div class="whyus__text">
                        <h3 class="section__title section__title--small whyus__section-title">
                            <?= $section_title; ?>
                        </h3>
                        <div class="text-description">
                            <?= $section_content; ?>
                        </div>
                    </div>
                </div><!--
                --><div class="grid__item desktop--one-half whyus__section-half">
                    <div class="whyus__case-study">
                        <?php
                            $case = $section_case_study;
                            include 'case-studies/small.php';
                        ?>
                        <div class="grid grid--full">
                            <?php
                                if ($section_buttons) :
                                    $i = 0;
                                    foreach($section_buttons as $button) :
                                        $button = $button['section_button'];
                            ?><!--
                            --><div class="grid__item one-half">
                                <a href="<?= $button['url']; ?>" target="<?= $button['target']; ?>" class="masonry__link">
                                    <div class="masonry__item masonry__item--square">
                                        <div class="masonry__tile masonry__tile-link <?= choose_class($index, $i); ?>">
                                            <span><?= $button['text']; ?><?= $i ?></span>
                                        </div>
                                    </div>
                                </a>
                            </div><!--
                            --><?php $i++; endforeach; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
