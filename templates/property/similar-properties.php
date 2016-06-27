<?php 

// VARS
    $opened_listing_id = $item->data->id;
    $opened_listing_type = strtolower($item->data->pba__listingtype__c);

    if( $opened_listing_type == 'rent'){
                $lower_range = $item->data->weekly_rent__c - 250;
                $upper_range = $item->data->weekly_rent__c + 250;
            }else{ 
            
                $lower_range = $item->data->pba__listingprice_pb__c-500000;
                $upper_range = $item->data->pba__listingprice_pb__c+500000;
            
            }
  
    /////////////// QUERY ARRAY ///////////////
    $reqArray = array("token"       => PB_SECURITYTOKEN,
              "fields"      => "Id;name;pba__ListingType__c;pba__ListingPrice_pb__c;Weekly_Rent__c;pba__PropertyType__c;pba__bedrooms_pb__c;",
              "recordtypes" => (string)$listing_type,
              "debugmode"   => "true"
              );

    if( $opened_listing_type == 'rent'){
               $reqArray["Weekly_Rent__c"] = "[".(string)$lower_range.";".(string)$upper_range."]";
                }else{
                $reqArray["pba__ListingPrice_pb__c"] = "[".(string)$lower_range.";".(string)$upper_range."]";
    }

    // BUILD HTTP QUERY STRING
    $query    = http_build_query($reqArray,'','&');
    // RETURN XML RESULT
    $xmlResult  = simplexml_load_file(PB_WEBSERVICEENDPOINT . "?" . $query);
    
    if (!empty($xmlResult->errorMessages->message)) :
      
      $errorMessage = 'Error: '.$xmlResult->errorMessages->message;

    else :
        
        $numberOfListings = $xmlResult->numberOfListings ;

        if ($doSearch  && ($xmlResult == null || $numberOfListings == 0)) :
            # no similar listings -> no need to display anything
        elseif ($doSearch  && $numberOfListings == 1) :
             # if one result it means it's just current listing -> no need to display anything
        else : 

?>

<section class="property__section">
    <div class="container container--wide container--full">
        <div class="property__section-header">
            <p class="section__category"><span>Similar Properties</span></p>
        </div>
        <div class="grid grid--full">

        <?php

            # create Array of all returned listings
            $arr = $xmlResult->xpath('listings/listing');

            // echo '<pre>';
            // print_r($xmlResult);
            // echo '</pre>';

            # remove element with current ID so it's not related to itself
            foreach ($arr as $key => $value):
                if( (string)$opened_listing_id !== (string)$value->data->id ):
                    $array_no_current_id[] = $arr[$key];
                endif;    
            endforeach;

            # shuffle (randomizes the order of the elements in) an array.
            shuffle($array_no_current_id);

            # loop and array -> limit to two
            $i = 1;
            foreach ($array_no_current_id as $item): 
        ?>    
        <div class="grid__item tablet--one-half">
                <a href="<?php echo site_url(); ?>/singleproperty?id=<?php echo  $item->data->id; ?>" class="masonry__link">
                    <div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square">
                            <div class="masonry__tile masonry__tile--white">
                                <div class="masonry__tile-border"></div>
                                <div class="masonry__tile-info">
                                    <p class="masonry__tile-category">Unknown: <span><?php echo $item->data->pba__listingtype__c; ?></span></p>
                                    <h3 class="masonry__tile-title"><?php echo  $item->data->name; ?></h3>
                                    <p class="masonry__tile-price">
                                        <?php 

                                            if( $opened_listing_type == 'rent'){

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
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!--
                    --><div class="grid__item one-half">
                        <div class="masonry__item masonry__item--square masonry__image">
                            <img src="<?php echo $item->media->images->image[0]->baseurl . "/300x300%5E/" . $item->media->images->image[0]->filename; ?>" class="attachment-post-thumbnail wp-post-image" alt="<?php echo $item->media->images->image[0]->filename; ?>">
                        </div>
                    </div>
                </a>
            </div><!--
            -->

        <?php 
                if ($i++ == 2) break;
            endforeach;
        ?>
        </div>
    </div>
</section>

<?php  
        endif;
    endif; 
?>

