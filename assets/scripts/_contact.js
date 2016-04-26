window.SS = window.SS || {};

window.SS.contact = function($) {
    var $window = $(window);
    var $body = $('body');
    var pins = {};
    var isDesktop = $window.width() > 1024 ? true : false;

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
        var initCoords = {
            latitude: 51.5185300,
            longitude: -0.1257400
        };

        var contactMapOptions = {
            zoom: 11,
            zoomControl: false,
            scrollwheel: false
        };

        if (isDesktop) {
            contactMapOptions.zoom = 13;
        }

        var officePins = [
            {
                title: 'Shoreditch',
                coordinates: {
                    lat: 51.524596,
                    lng: -0.081968
                }
            },
            {
                title: 'Bermondsey',
                coordinates: {
                    lat: 51.5085300,
                    lng: -0.1857400
                }
            }
        ];
        var map = new window.SS.PropertyMap('contact-map', initCoords, contactMapOptions);
        map.init();

        pins.first = map.setPin(officePins[0].coordinates, officePins[0].title);
        pins.second = map.setPin(officePins[1].coordinates, officePins[1].title);
    }

    function setOfficeActive() {
        $links = $('.js-change-pin');

        $links.each(function() {
            var $this = $(this);

            $this.on('click', function(event) {
                event.preventDefault();
                var target = $this.data('target');

                for (var pin in pins) {
                    pins[pin].changeIcon();
                }

                $('.js-office').removeClass('active');
                $('#' + target).toggleClass('active');
                pins[target].changeIcon('active');
            });
        });
    }

    $(document).ready(function() {
        getLondonWeather();
        getLondonTime();
        initMap();
        setOfficeActive();
    });
};
