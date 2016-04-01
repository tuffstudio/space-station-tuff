window.SS = window.SS || {};

window.SS.search = function($) {
    function switchGrids(switcher, panel) {
        var $switchButton = $(switcher);
        var $panel = $(panel);

        $switchButton.on('click', function(event) {
            var $this = $(this);
            var targetId = $this.attr('href');
            var $targetBlock = $(targetId);

            $panel.removeClass('visible');
            $switchButton.removeClass('active');

            $targetBlock.addClass('visible');
            $this.addClass('active');

            event.preventDefault();
            return false;
        });
    }

    function initSelect2() {
        var $selects = $('select');

        $selects.each(function() {
            var $this = $(this);
            var placeholder = $this.attr('placeholder');

            $this.select2({
                minimumResultsForSearch: Infinity,
                placeholder: placeholder
            });
        });
    }

    function goToNewsletter() {
        var $link = $('.js-newsletter-jump');
        var $target = $('.js-newsletter');
        var SCROLL_SPEED = 1000;

        $link.on('click', function(event) {
            var offsetTop = $target.offset().top;

            $('html, body').animate({ scrollTop: offsetTop }, SCROLL_SPEED);

            return false;
        });
    }

    // Google map integration. Revealing module pattern
    var PropertyMap = (function() {
        // private
        var map;
        var containerId = 'map';
        var containerObject = document.getElementById(containerId);
        var initCoords = {
            latitude: 50.2945,
            longitude: 18.6714
        };
        var mapOptions = {
            zoom: 10,
            center: new google.maps.LatLng(initCoords.latitude, initCoords.longitude)
        };
        var json = JSON.parse(containerObject.getAttribute('data-json'));

        function createMarker(LatLng, title) {
            var iconBase = '/wp-content/themes/spacestation/dist/images/';
            var iconDefault = 'mapicon.png';
            var iconActive = 'mapicongold.png';

            var marker = new google.maps.Marker({
                position: LatLng,
                map: map,
                title: title,
                animation: google.maps.Animation.DROP,
                icon: iconBase + iconDefault
            });

            marker.changeIcon = function(state) {
                if (typeof state !== 'undefined') {
                    // set new icon
                    marker.setIcon(iconBase + iconActive);
                } else {
                    // reset
                    // console.log('icon reseted');
                    marker.setIcon(iconBase + iconDefault);
                }
            };

            return marker;
        }

        function createPopup(property) {
            var template = '<div class="property__popup">'+
                '<h2 id="firstHeading" class="firstHeading">' + property.title + '</h2>'+
                '</div>';

            return new google.maps.InfoWindow({
                content: template
            });
        }

        function setupMarkers(json) {
            json.forEach(function(property) {
                var marker = createMarker(property.coordinates, property.title);
                var popup = createPopup(property);

                marker.addListener('mouseover', function() {
                    popup.open(map, marker);
                    marker.changeIcon('active');
                });

                marker.addListener('mouseout', function() {
                    popup.close();
                    marker.changeIcon();
                });
            });
        }

        function initMap() {
            map = new google.maps.Map(containerObject, mapOptions);
            setupMarkers(json);
        }

        // public
        return {
            init: initMap
        };
    })();

    $(document).ready(function() {
        switchGrids('.js-grid-switcher', '.js-results-block');
        switchGrids('.js-tab-switcher', '.js-tab-panel');
        initSelect2();
        goToNewsletter();
        PropertyMap.init();
    });
};
