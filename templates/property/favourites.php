<?php
    if($properties):
        include dirname(__FILE__) . "/../../property_base/pb_saved_properties.php";

        if (!empty($xmlResult->errorMessages->message)) :
          	$errorMessage = 'Error: '.$xmlResult->errorMessages->message;
        else:
        	foreach ($xmlResult->listings->listing as $item):
        		$property_id = $item->data->id;
        		$property_name = $item->data->name;
        		$property_price = number_format((float) $item->data->pba__listingprice_pb__c);
        		$property_image = $item->media->images->image[0]->baseurl . "/300x300%5E/" . $item->media->images->image[0]->filename;
?>

    <div class="grid grid--middle favourites-box--saved property-<?= $property_id; ?>">
        <div class="grid__item two-fifths">
            <a href="<?= site_url(); ?>/singleproperty?id=<?=  $property_id; ?>" rel="<?=  $property_id; ?>">
                <img src="<?= $property_image; ?>" alt="" data-pin-nopin="true" class="img--responsive favourites-box__img">
            </a>
        </div><!--
        --><div class="grid__item three-fifths">
            <a href="<?= site_url(); ?>/singleproperty?id=<?=  $property_id; ?>" rel="<?=  $property_id; ?>" class="favourites-box__information">
                <h3 class="favourites-box__title"><?= $property_name; ?></h3>
                <p class="favourites-box__price"><?= $property_price; ?></p>
            </a>
        </div>
        <i class="icon icon-cancel btn--close js-remove-property" data-id="<?= $property_id; ?>"></i>
    </div>

<?php
            endforeach;
        endif;
    else:
?>

    <h3 class="subheadline--default favourites-box__empty">
        Sorry, your favourites properties list is empty.
    </h3>

<?php endif; ?>
