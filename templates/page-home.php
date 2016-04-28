<?php
    $art_of_valuation_url = get_option('art_of_valuation_url');
?>
<section class="main-banner">
    <div class="moving-box js-moving-box">
        <div class="moving-box__element moving-box__content">
            <p class="moving-box__title">THE ART OF VALUATION</p>
            <p class="moving-box__text">
                <?php // TODO: Remember to replace lorem text with correct one ?>
                Ta nobit quam, to amniet que ficipidus nam as quislinerercst
            </p>
            <a href="<?= $art_of_valuation_url; ?>" class="btn btn--primary">Download now</a>
        </div>
        <div class="moving-box__element moving-box__border"></div>
    </div>
</section>

<?php
    include('components/case-studies.php');
    include('homepage/properties.php');
    include('homepage/magazine.php');
    include('homepage/stay-in-touch.php');
?>
