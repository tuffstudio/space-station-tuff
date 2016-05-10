<a href="<?php echo site_url(); ?>/singleproperty?id=<?php echo  $item->data->id; ?>" class="masonry__link" rel="<?php echo  $item->data->id; ?>">
    <img src="<?= get_template_directory_uri() ?>/dist/images/masonry_big_placeholder.jpg" alt="" class="masonry__background-image">
    <div class="masonry__label u--text-uppercase">under offer</div>
    <div class="grid__item one-half">
        <div class="masonry__item masonry__item--square"></div>
    </div><!--
    --><div class="grid__item one-half">
        <div class="masonry__item masonry__item--square">
            <div class="masonry__tile masonry__tile--white">
                <div class="masonry__tile-border"></div>
                <div class="masonry__tile-info">
                    <p class="masonry__tile-category">Residental: <span><?php echo $item->data->pba__listingtype__c; ?></span></p>
                    <h3 class="masonry__tile-title"><?php echo  $item->data->name; ?></h3>
                    <p class="masonry__tile-price"><?php echo number_format((float) $item->data->pba__listingprice_pb__c); ?></p>
                    <p class="masonry__tile-desc masonry__tile-desc--big"><?php echo  $item->data->pba__bedrooms_pb__c; if( $item->data->pba__bedrooms_pb__c > 1){echo ' bedrooms';}else{echo ' bedroom';} ?> penthouse</p>
                </div>
            </div>
        </div>
    </div><!--
    --><div class="grid__item">
        <div class="masonry__item masonry__item--rectangular"></div>
    </div>
</a>
