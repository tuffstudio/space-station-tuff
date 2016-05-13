<section id="gallery" class="property__gallery property__panel js-property-panel visible">
    <div class="property__gallery-slider">
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
                    <img src="<?php echo $image[0]->baseurl . "/88x88%5E/" . $image[0]->filename;?>" alt="<?php echo $image[0]->filename; ?>">
                <?php endif; ?>
            <?php endforeach; ?>    

        </div>
        <a id="next" class="property__gallery-switcher down" href="#"></a>
    </div>

    <?php foreach ($item->media->images->image as $image): ?>
        <?php if ( empty($image->tags) ):?>
            <img class="property__gallery-big-image" src="<?php echo $image[0]->baseurl . "/1920x768%5E/" . $image[0]->filename;?>" alt="<?php echo $image[0]->filename; ?>">
        <?php endif; ?>
    <?php endforeach; ?> 
</section>
