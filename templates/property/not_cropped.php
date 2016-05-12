<section id="compare" class="property__gallery property__panel property__panel--compare js-property-panel">
    <?php include dirname(__FILE__) . '/../components/spinner.php'; ?>
    <div class="owl-carousel js-property-gallery">
        <?php foreach ($item->media->images->image as $image) : ?>
            <?php if ( empty($image->tags) ) : ?>
                <img class="owl-lazy property__gallery-big-image" data-src="<?= $image[0]->baseurl . "/1920x768/" . $image[0]->filename; ?>" alt="<?= $image[0]->filename; ?>">
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
