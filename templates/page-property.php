<div class="property__header">
    <?php include 'property/gallery.php'; ?>
    <?php include 'property/floor-plan.php'; ?>
    <?php include 'property/map.php'; ?>
    <?php include 'property/video.php'; ?>
</div>
<div class="container container--full">
    <?php include 'property/navigation.php'; ?>
    <?php include 'property/content.php'; ?>
</div>



<?php include 'property/property-poi.php'; ?>
<?php include 'property/similar-properties.php'; ?>
<?php include 'property/last-viewed.php'; ?>

<?php include 'homepage/stay-in-touch.php'; ?>



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
                <h2 class="property__title">Stratford high street, e15</h2>
                <p class="section__category">Please fill in the fields marked with *</p>
            </div>
            <?php
                $form_fields = array('property_name' => 'property name or title, or sth else');
                gravity_form(1, false, false, false ,$form_fields, false, false);
            ?>
        </div>
    </div>
</div>
