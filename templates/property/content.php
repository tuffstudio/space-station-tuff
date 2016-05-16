<div class="property__content">
    <div class="grid grid--full">
        <div class="grid__item desktop--three-quarters">
            <div class="property__info">
                <div class="property__info-head">
                    <p class="section__category">Residential <span><?= $listing_type ?></span></p>
                    <h1 class="property__title"><?= $main_title ?></h1>
                    <p class="property__price"><?= $property_price.' '.$tenure; ?></p>
                    <p class="property__type">
                        <?php
                            echo  $item->data->pba__bedrooms_pb__c;
                                switch ($item->data->pba__bedrooms_pb__c) {
                                    case 0:
                                        break;
                                    case 1:
                                        echo ' bedroom ';
                                        break;

                                    default:
                                        echo ' bedrooms ';
                                        break;
                                }
                            echo  $item->data->pba__propertytype__c;
                        ?>
                    </p>
                </div>

                <ul class="property__buttons">
                    <?php if( !empty($item->media->documents->document->url) ) : ?>
                        <li class="property__button"><a href="<?= $property_brochure_url; ?>" class="btn btn--action" target="_blank">brochure</a></li>
                    <?php endif; ?>
                    <li class="property__button"><a href="" class="btn btn--action">save</a></li>
                    <li class="property__button"><a href="" class="btn btn--action">share</a></li>
                </ul>
                <article class="property__description">
                    <?= $property_description; ?>
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
