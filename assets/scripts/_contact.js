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

        var map = new window.SS.PropertyMap('contact-map', initCoords, contactMapOptions);
        map.init();

        var officePins = map.getJson();

        for(var office in officePins) {
            pins[office] = map.setPin(officePins[office].coordinates, officePins[office].title, officePins[office].link);
        }
    }

    function setOfficeActive() {
        $links = $('.js-change-pin');

        $links.each(function() {
            var $this = $(this);

            $this.on('click', function(event) {
                if (!isMobile()) {
                    event.preventDefault();
                }

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
