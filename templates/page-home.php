
<section class="main-banner">
    <div class="moving-box js-moving-box">
        <div class="moving-box__element moving-box__content">
            <p class="moving-box__title">THE ART OF VALUATION</p>
            <p class="moving-box__text">
                <?php // TODO: Remember to replace lorem text with correct one ?>
                Ta nobit quam, to amniet que ficipidus nam as quislinerercst
            </p>
            <a href="#" class="btn btn--primary">Download now</a>
        </div>
        <div class="moving-box__element moving-box__border"></div>
    </div>
</section>

<?php
    $args_case_study = array(
        'post_type' => 'case-study',
        'post_status' => 'publish',
        'meta_key' => 'case_study_featured',
        'meta_value' => true,
    );

    include('components/case-studies.php');
    include('homepage/properties.php');
    include('homepage/magazine.php');
    include('homepage/stay-in-touch.php');
?>
