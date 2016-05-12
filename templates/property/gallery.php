<section id="gallery" class="property__gallery property__panel js-property-panel visible">
    <?php include dirname(__FILE__) . '/../components/spinner.php'; ?>
    <div class="property__gallery-counter js-counter">
        <p><span class="index js-index">1</span><sub class="count js-count">8</sub></p>
    </div>
    <div class="owl-carousel js-property-gallery">
        <?php foreach ($item->media->images->image as $image) : ?>
            <?php if ( empty($image->tags) ) : ?>
                <img class="owl-lazy property__gallery-big-image" data-src="<?= $image[0]->baseurl . "/1920x768/" . $image[0]->filename; ?>" alt="<?= $image[0]->filename; ?>">
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
