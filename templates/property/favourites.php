<?php
    if($properties) :
        foreach ($properties as $propertyID) :
?>

<span class="property-<?= $propertyID; ?>">
    <div class="grid__item two-fifths">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/masonry_small_placeholder.jpg" alt="" data-pin-nopin="true" class="img--responsive favourites-box__img">
    </div><!--
    --><div class="grid__item three-fifths">
        <div class="favourites-box__information">
            <h3 class="favourites-box__title">Camden road, e15</h3>
            <p class="favourites-box__price">114,905 pa</p>
        </div>

        <span class="js-remove-property" data-id="<?= $propertyID; ?>">remove</span>
    </div>
</span>

<?php
        endforeach;
    else:
?>

Ni ma nic

<?php endif; ?>
