<?php include 'canvas/header.php'; ?>

<?php
    $path = '';
    $is_canvas_home = is_page(97);
    $bottom_stains_class = '';
    $middle_stains_class = '';

    if ($is_canvas_home) {
        $path = 'canvas/content-home.php';
        $bottom_stains_class = 'section--bottom-stains';
        $middle_stains_class = 'section--middle-stains';
    }
    else if (is_single()) {
        $path = 'canvas/content-single-address-book.php';
    }
    else if(is_post_type_archive('address-book') || taxonomy_exists('address-book-category')) {
        $path = 'canvas/content-address-book.php';
    }
?>
<div class="<?= $middle_stains_class; ?>">
    <section class="section--bottom-space <?= $bottom_stains_class; ?>">
        <div class="container js-canvas">
            <div class="grid grid--full">
                <div class="grid__item desktop--one-quarter js-target">
                    <?php include 'canvas/navigation.php' ?>
                </div><!--
                --><div class="grid__item desktop--three-quarters js-owner">
                    <?php include $path; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'homepage/stay-in-touch.php'; ?>
