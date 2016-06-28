<?php 

                $reqArray = array(
                    "token"     => PB_SECURITYTOKEN,
                    "fields"    => "Id;name;pba__description_pb__c;pba__ListingType__c;Rent_Per_Year__c;",
                    "recordtypes" => 'commercial_rent',
                    "debugmode" => "true"
                );

                $reqArray["show_on_website__c"] = "true";

                // BUILD HTTP QUERY STRING
                $query    = http_build_query($reqArray,'','&');
                // RETURN XML RESULT
                $xmlResult  = simplexml_load_file(PB_WEBSERVICEENDPOINT . "?" . $query);

?>