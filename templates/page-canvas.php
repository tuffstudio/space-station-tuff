<section class="section section--first canvas__header">
    <div class="container">
        <div class="grid grid--full">
            <div class="grid__item desktop--three-quarters push--desktop--one-third">
                <img class="canvas__title-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/canvas-headline.png" alt="" />
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container container--mobile-full js-canvas">
        <div class="grid grid--full">
            <div class="grid__item desktop--one-third js-target">
                <?php include 'canvas/categories-menu.php' ?>
            </div><!--
            --><div class="grid__item desktop--two-thirds js-owner">
                <?php include 'canvas/content.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
