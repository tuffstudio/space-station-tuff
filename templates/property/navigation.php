<div class="property__nav">
    <div class="grid grid--full">
        <div class="grid__item tablet--three-quarters">
            <ul class="property__buttons">
                <li class="property__button"><a href="#gallery" class="btn btn--action js-panel-switcher">gallery</a></li>

                <?php $i = 0; foreach ($item->media->images->image as $image): ?>
                    <?php if ($image->tags == 'Floorplan Quick (JPG)'):?>
                        <li class="property__button"><a href="#floor-plan" class="btn btn--action js-panel-switcher" data="<?php echo $image->url; ?>">floor plan</a></li>
                    <?php endif; ?>
                <?php endforeach; ?>

                <?php if ( !empty($item->data->pba__latitude_pb__c) && !empty($item->data->pba__longitude_pb__c) ): ?>
                    <li class="property__button"><a href="#map" class="btn btn--action js-panel-switcher">map</a></li>
                <?php endif; ?>

                <?php if( !empty($item->media->videos->video->url) ): ?>
                    <li class="property__button"><a href="#video" class="btn btn--action js-panel-switcher">video</a></li>
                <?php endif; ?>
                <li class="property__button"><a href="#compare" class="btn btn--action js-panel-switcher">To comapare, not cropped</a></li>
            </ul>
        </div><!--
        --><div class="grid__item tablet--one-quarter u--align-center">
            <a href="#form" class="btn btn--action btn--action--awarded js-overlay-open">Arrange a viewing</a>
        </div>
    </div>
</div>
