<div class="property__content">
    <div class="grid grid--full">
        <div class="grid__item desktop--three-quarters">
            <div class="property__info">
                <div class="property__info-head">
                    <p class="section__category">Residential <span><?php echo $listing_type ?></span></p>
                    <h1 class="property__title"><?php echo $main_title ?></h1>
                    <p class="property__price"><?php echo $property_price.' '.$tenure; ?></p>
                    <p class="property__type"><?php echo $property_bedrooms_number; if( $property_bedrooms_number > 1){echo ' bedrooms ';}else{echo ' bedroom ';} echo  $property_type; ?></p>
                    <!-- <?php echo '<script>alert("'.$property_description.'");</script>'; ?> -->
                </div>

                <ul class="property__buttons">
                    <?php if( !empty($item->media->documents->document->url) ): ?>
                        <li class="property__button"><a href="<?php echo $property_brochure_url; ?>" class="btn btn--action" target="_blank">brochure</a></li>
                    <?php endif; ?> 
                    <li class="property__button"><a href="" class="btn btn--action">save</a></li>
                    <li class="property__button"><a href="" class="btn btn--action">share</a></li>
                </ul>
                <article class="property__description">
                    <?php echo $property_description; ?>
                </article>
            </div>
        </div><!--
        --><div class="grid__item desktop--one-quarter">
            <div class="property__sidebar">
                <a class="link--text" href="mailto:spacestation@gmail.com">email us</a></br>
                <a class="link--text" href="tel:02076136262">020 7613 6262</a>

                <h3 class="property__sidebar-title">Fast facts</h3>
                <ul class="property__properties">
                    <li><span class="icon icon-notice"></span> Built in 2003</li>
                    <li><span class="icon icon-target"></span> 300ft from eateries</li>
                    <li><span class="icon icon-notice"></span> Wine cellar for 500 bottles</li>
                    <li><span class="icon icon-notice"></span> 200ft of solar panel windows</li>
                    <li><span class="icon icon-target"></span> 2 large fireplaces</li>
                    <li><span class="icon icon-target"></span> Design award winning</li>
                </ul>
            </div>
        </div>
    </div>
</div>
