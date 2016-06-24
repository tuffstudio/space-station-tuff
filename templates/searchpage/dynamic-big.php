<a href="<?php echo site_url(); ?>/singleproperty?id=<?php echo  $item->data->id; ?>" class="masonry__link" rel="<?php echo  $item->data->id; ?>">
    <img src="<?php echo $item->media->images->image[0]->baseurl . "/500x500%5E/" . $item->media->images->image[0]->filename; ?>" alt="" class="masonry__background-image">
    <div class="masonry__label u--text-uppercase"><?php echo $item->data->pba__status__c; ?></div>
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
    --><div class="grid__item">
        <div class="masonry__item masonry__item--rectangular"></div>
    </div>
</a>
