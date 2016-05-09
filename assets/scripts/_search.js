window.SS = window.SS || {};

window.SS.search = function($) {
    var mapOn = false;

    function turnMapOn() {
        $button = $('.js-map-switch');

        $button.on('click', function(event) {
            event.preventDefault();

            if(!mapOn) {
                var map = new window.SS.PropertyMap('map');
                map.init();
                map.setupMarkers();

                mapOn = true;
            }
        });
    }

    function switchFormTypes() {
        $btns = $('.js-switch-type');

        $btns.on('click', function() {
            var $this = $(this);
            var targetInput = $this.data('input');
            $btns.removeClass('active');
            $this.addClass('active');

            $('.input-types').removeClass('active');
            $('.' + targetInput).addClass('active');
        });
    }

    function geolocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;

                $.ajax({
                    type: 'GET',
                    dataType: 'json',
                    url: 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' + lat + "," + lng + "&sensor=false",
                    success: function(response) {
                        if (response.status === 'OK') {
                            var city = response.results[0].address_components[2].long_name;
                            var $input = $('#search');

                            $input.val(city);
                        } else {
                            console.log('Sorry, something went wrong...!');
                        }
                    }
                });
            });
        } else {
            console.log('Geolocation is not supported by this browser.');
        }
    }

    $(document).ready(function() {
        SS.switchGrids('.js-grid-switcher', '.js-results-block');
        SS.switchGrids('.js-tab-switcher', '.js-tab-panel');
        turnMapOn();
        switchFormTypes();
        $('.js-find-location').on('click', geolocation);
    });
};
