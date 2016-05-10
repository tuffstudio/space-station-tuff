<?php
    $post_title = $post->title;
?>

<a href="<?php echo site_url(); ?>/listing?id=<?php echo  $item->data->id; ?>" class="masonry__link" rel="<?php echo  $item->data->id; ?>">
    <?php if ($item->media->images->image != null && count($item->media->images->image) > 0){ ?>
    <div class="single-result__image">
        <img src="<?php echo $item->media->images->image[0]->baseurl . "/" . $item->media->images->image[0]->filename; ?>" alt="">
    </div>
    <?php }; ?>
    <div class="single-result__info">
        <div class="masonry__tile-border"></div>
        <p class="masonry__tile-category">
            Commercial:
            <span>
                <?php echo $item->data->pba__listingtype__c; ?>
            </span>
        </p>
        <h3 class="masonry__tile-title">
            <?php echo  $item->data->name; ?>
        </h3>
        <p class="masonry__tile-price">
            &#163;<?php echo number_format((float) $item->data->pba__listingprice_pb__c); ?>
        </p>
        <p class="masonry__tile-desc masonry__tile-desc--big">
            <?php echo  $item->data->pba__bedrooms_pb__c; ?> bedroom<br>
        </p>
    </div>
</a>
