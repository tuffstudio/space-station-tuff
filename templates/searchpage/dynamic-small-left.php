<a href="<?php echo site_url(); ?>/singleproperty?id=<?php echo  $item->data->id; ?>" class="masonry__link" rel="<?php echo  $item->data->id; ?>">
    <div class="grid__item one-half">
        <div class="masonry__item masonry__item--square">
            <div class="masonry__tile masonry__tile--white masonry__tile-arrow">
                <div class="masonry__tile-border"></div>
                <div class="masonry__tile-info">
                    <p class="masonry__tile-category">Residential: <span><?php echo $item->data->pba__listingtype__c; ?></span></p>
                    <h3 class="masonry__tile-title"><?php echo  $item->data->name; ?></h3>
                    <p class="masonry__tile-price">
                    <?php if( strtolower($item->data->pba__listingtype__c) == 'rent'){

                        echo number_format((float) $item->data->weekly_rent__c).' p/w'; 

                    }else{ 
            
                        echo number_format((float) $item->data->pba__listingprice_pb__c); 
            
                    }?>
                    </p>
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
            <img src="<?php echo $item->media->images->image[0]->baseurl . "/300x300%5E/" . $item->media->images->image[0]->filename; ?>" alt="">
            <div class="masonry__label u--text-uppercase"><?php echo $item->data->pba__status__c; ?></div>
        </div>
    </div>
</a>
