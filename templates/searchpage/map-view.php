
<?php 

$map_json;

$i = 0;
$number_or_listings = $xmlResult->numberOfListings;

while($i < $number_or_listings) : 
	
	$item = $xmlResult->listings->listing[$i];

if( !empty($item->data->pba__latitude_pb__c) && !empty($item->data->pba__longitude_pb__c) ):

	$map_json .= '{\"title\":\"'.$item->data->name.'\",\"property_type\":\"'.$item->data->pba__propertytype__c.'\",\"coordinates\":{\"lat\":'.$item->data->pba__latitude_pb__c.',\"lng\":'.$item->data->pba__longitude_pb__c.'}},';		     

endif;

$i++;
endwhile; 

$map_json = rtrim($map_json,',');

?>


<div
    id="map"
    class="search-results__map"
    data-json='[<?php echo stripslashes($map_json); ?>]'>
</div>

<script src="https://maps.googleapis.com/maps/api/js"></script>