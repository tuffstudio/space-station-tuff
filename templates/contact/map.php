<?php
    $map_fields = CFS()->get(false, $post->ID);
    $first_office_coordinates = explode(',', $map_fields['first_office_coordinates']);
    $second_office_coordinates = explode(',', $map_fields['second_office_coordinates']);

    $map_data = array(
        'first' => array(
            'title' => $map_fields['first_office_name'],
            'coordinates' => array(
                'lat' => (float)$first_office_coordinates[0],
                'lng' => (float)$first_office_coordinates[1]
            ),
            'link' => $map_fields['first_office_link']
        ),
        'second' => array(
            'title' => $map_fields['second_office_name'],
            'coordinates' => array(
                'lat' => (float)$second_office_coordinates[0],
                'lng' => (float)$second_office_coordinates[1]
            ),
            'link' => $map_fields['second_office_link']
        )
    );

    $json_data = json_encode($map_data);
?>

<section>
    <div id="contact-map" class="contact__map" data-json='<?= $json_data; ?>'></div>
</section>
<script src="https://maps.googleapis.com/maps/api/js"></script>
