<?php
    $cookie_name = 'ss-recently-viewed';
    $cookies = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : null;

    include dirname(__FILE__) . "/../../property_base/pb_recently_viewed_request.php";
    if (sizeof($properties) > 1) :
?>

<section class="property__section">
    <div class="container container--wide container--full">
        <div class="property__section-header">
            <p class="section__category"><span>Recently Viewed</span></p>
        </div>
        <div class="grid grid--full">

            <?php
                $i = 0;
                foreach ($properties as $item):
                    $property_id = $item->data->id;
            		$property_name = $item->data->name;
            		$property_price = number_format((float) $item->data->pba__listingprice_pb__c);
            		$property_image = $item->media->images->image[0]->baseurl . "/300x300%5E/" . $item->media->images->image[0]->filename;
                    $property_type = $item->data->pba__listingtype__c;

                    if ( ((string)$current_property_id != (string)$property_id) && ($i < 3) ) :
             ?><!--

            --><div class="grid__item tablet--one-half desktop--one-third">
                <a href="<?= site_url(); ?>/singleproperty?id=<?=  $property_id; ?>" class="masonry__link">
                    <div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square">
                            <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                                <div class="masonry__tile-border"></div>
                                <div class="masonry__tile-info">
                                    <p class="masonry__tile-category">Commercial: <span><?= $property_type; ?></span></p>
                                    <h3 class="masonry__tile-title"><?= $property_name; ?></h3>
                                    <p class="masonry__tile-price"><?= $property_price; ?></p>
                                    <p class="masonry__tile-desc masonry__tile-desc--big">
                                        <?php
                                            echo  $item->data->pba__bedrooms_pb__c;
                                                switch ($item->data->pba__bedrooms_pb__c) :
                                                    case 0:
                                                        break;
                                                    case 1:
                                                        echo ' bedroom ';
                                                        break;

                                                    default:
                                                        echo ' bedrooms ';
                                                        break;
                                                endswitch;
                                            echo  $item->data->pba__propertytype__c;
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--
                    --><div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square masonry__image">
                            <img src="<?= $property_image; ?>" alt="<?= $property_name; ?>">
                        </div>
                    </div>
                </a>
            </div><!--

            --><?php
                        $i++;
                    endif;
                endforeach;
            ?>

        </div>
    </div>
</section>

<?php endif; ?>
