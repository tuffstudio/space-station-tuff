window.SS = window.SS || {};

window.SS.contact = function($) {
    function getLondonWeather() {
        $weather = $('.js-contact-weather');
        $.simpleWeather({
            location: 'London',
            unit: 'c',
            success: function(weather) {
                $weather.html(weather.temp +'&deg;');
            }
        });
    }

    function getLondonTime() {
        var $time = $('.js-contact-time');
        var timeOptions = {
            hour: '2-digit',
            minute: '2-digit',
            hour12: false,
            timeZone: 'Europe/London'
        };

        function setTime() {
            var date = new Date();
            var time = date.toLocaleString('en-EN', timeOptions);

            $time.html(time);
        }

        setTime();
        setInterval(setTime, 60000);
    }

    function initMap() {
        var map;
        var containerId = 'contact-map';
        var containerObject = document.getElementById(containerId);
        var initCoords = {
            latitude: 50.2945,
            longitude: 18.6714
        };

        var mapStyles = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];

        var mapOptions = {
            zoom: 10,
            center: new google.maps.LatLng(initCoords.latitude, initCoords.longitude),
            styles: mapStyles,
            mapTypeControl: false,
            zoomControl: false,
            streetViewControl: false,
        };

        map = new google.maps.Map(containerObject, mapOptions);
    }


    $(document).ready(function() {
        initMap();
        getLondonWeather();
        getLondonTime();
    });
};
