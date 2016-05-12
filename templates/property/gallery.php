<section id="gallery" class="property__gallery property__panel js-property-panel visible">
    <!-- <div class="property__gallery-slider">
        <a id="prev" class="property__gallery-switcher up" href="#"></a>
        <div class="cycle-slideshow"
            data-cycle-fx=carousel
            data-cycle-timeout=0
            data-cycle-next="#next"
            data-cycle-prev="#prev"
            data-cycle-carousel-visible=5
            data-cycle-carousel-vertical=true
            data-cycle-log=false
        >
            <?php foreach ($item->media->images->image as $image): ?>
                <?php if ( empty($image->tags) ):?>
                    <img src="<?= $image[0]->baseurl . "/88x88/" . $image[0]->filename;?>" alt="<?= $image[0]->filename; ?>">
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
        <a id="next" class="property__gallery-switcher down" href="#"></a>
    </div> -->

    <?php include dirname(__FILE__) . '/../components/spinner.php'; ?>
    <div class="property__gallery-counter js-counter">
        <p><span class="index js-index">1</span><sub class="count js-count">8</sub></p>
        <!-- <span class="count js-count"></span> -->
    </div>
    <div class="owl-carousel js-property-gallery">
        <?php foreach ($item->media->images->image as $image) : ?>
            <?php if ( empty($image->tags) ) : ?>
                <img class="owl-lazy property__gallery-big-image" data-src="<?= $image[0]->baseurl . "/1920x768/" . $image[0]->filename; ?>" alt="<?= $image[0]->filename; ?>">
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
