<?php include 'canvas/header.php'; ?>

<section class="section section--bottom-stains">
    <div class="container js-canvas">
        <div class="grid grid--full">
            <div class="grid__item desktop--one-quarter js-target">
                <?php include 'canvas/categories-menu.php' ?>
            </div><!--
            --><div class="grid__item desktop--three-quarters js-owner">
                <?php
                    if (is_page(97)) {
                        include 'canvas/content-home.php';
                    }
                    else if (is_page(116)) {
                        include 'canvas/content-business-directory.php';
                    }
                    else {
                        include 'canvas/content-single-business-directory.php';
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
