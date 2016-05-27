<?php
    $latitude = $item->data->pba__latitude_pb__c;
    $longitude = $item->data->pba__longitude_pb__c;

    $map_data = array(
        'first' => array(
            'title' => $main_title,
            'coordinates' => array(
                'lat' => (float)$latitude,
                'lng' => (float)$longitude
            ),
            'link' => 'https://www.google.com/maps/preview/@' . $latitude . ',' . $longitude . ',10z'
        )
    );

    $json_data = json_encode($map_data);
?>

<section id="map" class="property__panel js-property-panel">
    <div id="property-map" class="property__map" data-json='<?= $json_data; ?>'></div>
</section>
<script src="https://maps.googleapis.com/maps/api/js"></script>
