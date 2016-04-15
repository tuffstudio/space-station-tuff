<?php
    use Roots\Sage\MagazinePost;

    $sections = CFS() -> get('whyus_sections', $post->ID);
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
    <div class="container">
        <?php
            foreach ($sections as $index => $section) :
                $section_title = $section['section_title'];
                $section_content = $section['section_content'];
                $section_content = apply_filters('the_content', $section_content);
                $section_case_study_id = $section['section_case_study'][0];
                $section_case_study = new MagazinePost\CaseStudyPost($section_case_study_id);

        ?>
            <div id="js-whyus-<?= $index; ?>" class="anchor"></div>
            <div class="grid grid--middle whyus__section <?php echo $index % 2 == 0 ? '' : 'grid--rev'; ?> is-hidden js-section-reveal">
                <div class="grid__item tablet--one-half whyus__section-half">
                    <div class="whyus__text">
                        <h3 class="section__title section__title--small whyus__section-title">
                            <?= $section_title; ?>
                        </h3>
                        <div class="text-description">
                            <?= $section_content; ?>
                        </div>
                    </div>
                </div><!--
                --><div class="grid__item tablet--one-half whyus__section-half">
                    <div class="whyus__case-study">
                        <?php
                            $case = $section_case_study;
                            include 'case-studies/small.php';
                        ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
