<?php
    $post_title = $post->title;
?>

<a href="<?php echo site_url(); ?>/singleproperty?id=<?= $item->data->id; ?>" class="masonry__link" rel="<?= $item->data->id; ?>">
    <?php if ($item->media->images->image != null && count($item->media->images->image) > 0) : ?>
        <div class="single-result__image">
            <img src="<?php echo $item->media->images->image[0]->baseurl . "/315x210%5E/" . $item->media->images->image[0]->filename; ?>" alt="">
        </div>
    <?php endif; ?>

    <div class="single-result__info">
        <div class="masonry__tile-border"></div>
        <p class="masonry__tile-category">
            Residential:
            <span>
                <?php echo $item->data->pba__listingtype__c; ?>
            </span>
        </p>
        <h3 class="masonry__tile-title">
            <?php echo  $item->data->name; ?>
        </h3>
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
            <br>
        </p>
    </div>
</a>
