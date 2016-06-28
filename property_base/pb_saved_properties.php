<?php
    $id_request = implode(";", $properties);
    $reqArray = array(
                    "token"     => PB_SECURITYTOKEN,
                    "fields"    => "Id;name;pba__ListingPrice_pb__c;",
                    "id"        => 'IN('.$id_request.')',
                    "debugmode" => "true"
              );

    // BUILD HTTP QUERY STRING
    $query    = http_build_query($reqArray,'','&');
    // RETURN XML RESULT
    $xmlResult  = simplexml_load_file(PB_WEBSERVICEENDPOINT . "?" . $query);
?>
