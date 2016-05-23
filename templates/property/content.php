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
                    <li class="property__button"><button class="btn btn--action js-save-property" data-id="<?= $item->data->id; ?>">save</button></li>
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

                <?php 



                    $fast_facts_icons = array(
                        'ff_aircon__c',
                        'ff_architect__c',
                        'ff_award__c',
                        'ff_balcony__c',
                        'ff_basement__c',
                        'ff_blue_plaque__c',
                        'ff_bottle__c',
                        'ff_brick__c',
                        'ff_built__c',
                        'ff_celings__c',
                        'ff_champagne__c',
                        'ff_church__c',
                        'ff_cinema__c',
                        'ff_concierge__c',
                        'ff_desiner__c',
                        'ff_eco__c',
                        'ff_elephant__c',
                        'ff_extension__c',
                        'ff_factory__c',
                        'ff_fireplace__c',
                        'ff_garden__c',
                        'ff_gym__c',
                        'ff_high_specification__c',
                        'ff_history__c',
                        'ff_hot_tap__c',
                        'ff_lateral_space__c',
                        'ff_library__c',
                        'ff_lift__c',
                        'ff_light__c',
                        'ff_listed_grade_i__c',
                        'ff_listed_grade_ii__c',
                        'ff_map__c',
                        'ff_mews__c',
                        'ff_mezzanine__c',
                        'ff_parking__c',
                        'ff_penthouse__c',
                        'ff_planning__c',
                        'ff_pool__c',
                        'ff_refurbished__c',
                        'ff_roof_terrace__c',
                        'ff_school__c',
                        'ff_security__c',
                        'ff_solar__c',
                        'ff_sound_system__c',
                        'ff_south_facing__c',
                        'ff_stairs__c',
                        'ff_townhouse__c',
                        'ff_tube__c',
                        'ff_underfloor_heating__c',
                        'ff_view__c',
                        'ff_warehouse__c',
                        'ff_windows__c',
                        'ff_wine_cellar__c',
                        'ff_wooden_floors__c'
                        );

                 ?>

                <h3 class="property__sidebar-title">Fast facts</h3>
                <ul class="property__properties">
                    <?php $k = 0; foreach ($fast_facts_icons as $icon): ?>
                        <?php if(!empty($item->data->$icon) && $k < 7): ?>
                            <li><i class="demo-icon icon-<?php echo $icon; ?>"></i><?php echo $item->data->$icon; ?></li>
                        <?php $k++; endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
