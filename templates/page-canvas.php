<?php include 'canvas/header.php'; ?>

<div class="section--middle-stains">
    <section class="section--bottom-space section--bottom-stains">
        <div class="container js-canvas section--middle-stains">
            <div class="grid grid--full">
                <div class="grid__item desktop--one-quarter js-target">
                    <?php include 'canvas/navigation.php' ?>
                </div><!--
                --><div class="grid__item desktop--three-quarters js-owner">
                    <?php
                        if (is_page(97)) {
                            include 'canvas/content-home.php';
                        }
                        else if (is_single()) {
                            include 'canvas/content-single-address-book.php';
                        }
                        else if(is_post_type_archive('address-book') || taxonomy_exists('address-book-category')) {
                            include 'canvas/content-address-book.php';
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include 'homepage/stay-in-touch.php'; ?>
