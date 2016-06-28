<div class="property__nav">
    <div class="grid grid--full">
        <div class="grid__item tablet--three-quarters">
            <ul class="property__buttons">
                <li class="property__button"><a href="#gallery" class="btn btn--action js-panel-switcher js-smooth-off">gallery</a></li>

                <?php $i = 0; foreach ($item->media->images->image as $image) : ?>
                    <?php if ($image->tags == 'Floorplan Quick (JPG)'):?>
                        <li class="property__button"><a href="<?php echo $image->url; ?>" class="btn btn--action js-panel-switcher js-smooth-off" data-lightbox="floor plan">floor plan</a></li>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php if ( !empty($item->data->pba__latitude_pb__c) && !empty($item->data->pba__longitude_pb__c) ) : ?>
                    <li class="property__button"><a href="#map" class="btn btn--action js-panel-switcher js-smooth-off js-map-switch">map</a></li>
                <?php endif; ?>

                <?php if( !empty($item->media->videos->video->url) ) : ?>
                    <li class="property__button"><a href="#video" class="btn btn--action js-panel-switcher js-smooth-off">video</a></li>
                <?php endif; ?>
            </ul>
        </div><!--
        --><div class="grid__item tablet--one-quarter u--align-center">
            <a href="#form" class="btn btn--action btn--action--awarded js-overlay-open">Arrange a viewing</a>
        </div>
    </div>
</div>
