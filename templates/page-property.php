<?php require_once ('property/PB_listing-connection.php'); ?>

<?php
    $item = $xmlResult->listings->listing;
    $main_title = $item->data->name;
    $listing_type = $item->data->pba__listingtype__c;
    $tenure = $item->data->tenure__c;
    $property_price = number_format((float) $item->data->pba__listingprice_pb__c);
    $property_type = $item->data->pba__propertytype__c;
    $property_bedrooms_number = $item->data->pba__bedrooms_pb__c;
    $property_description = $item->data->pba__description_pb__c;
    $property_brochure_url = $item->media->documents->document->url;
?>

<div class="property__header">
    <?php
        include 'property/gallery.php';
        include 'property/floor-plan.php';
        include 'property/map.php';
        include 'property/video.php';
        include 'property/not_cropped.php';        
    ?>
</div>
<div class="container container--full">
    <?php
        include 'property/navigation.php';
        include 'property/content.php';
    ?>
</div>

<?php
    include 'property/property-poi.php';
    include 'property/similar-properties.php';
    include 'property/last-viewed.php';
    include 'homepage/stay-in-touch.php';
?>

<div class="overlay js-overlay">
    <div class="overlay__bg js-overlay-close"></div>
    <div class="overlay__content">
        <button class="overlay__close js-overlay-close">
            <span></span>
            <span></span>
        </button>

        <div class="property__form">
            <div class="property__form-header">
                <p class="property__form-title">Request a viewing of</p>
                <h2 class="property__title"><?= $main_title ?></h2>
                <p class="section__category">Please fill in the fields marked with *</p>
            </div>
            <?php
                $form_fields = array('property_name' => 'property name or title, or sth else');
                gravity_form(1, false, false, false ,$form_fields, false, false);
            ?>
        </div>
    </div>
</div>
