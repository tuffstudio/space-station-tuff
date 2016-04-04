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

        var mapStyles = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];

        var mapOptions = {
            zoom: 10,
            center: new google.maps.LatLng(initCoords.latitude, initCoords.longitude),
            styles: mapStyles,
            mapTypeControl: false,
            zoomControl: false,
            streetViewControl: false,
        };
        var json = JSON.parse(containerObject.getAttribute('data-json'));
        var allMarkers = [];

        function createPin(LatLng, title) {
            var iconBase = '/wp-content/themes/spacestation/dist/images/';
            var iconDefault = 'mapicon.png';
            var iconActive = 'mapicongold.png';

            var pin = new google.maps.Marker({
                position: LatLng,
                map: map,
                title: title,
                animation: google.maps.Animation.DROP,
                icon: iconBase + iconDefault
            });

            pin.changeIcon = function(state) {
                if (typeof state !== 'undefined') {
                    // set new icon
                    pin.setIcon(iconBase + iconActive);
                } else {
                    // reset icon to default
                    pin.setIcon(iconBase + iconDefault);
                }
            };

            return pin;
        }

        function createPopup(property) {
            var template = '<div class="masonry__link">' +
                '<div class="single-result__image">' +
                    '<img src="http://lorempicsum.com/up/350/200/3">' +
                '</div>' +
                '<div class="single-result__info">' +
                    '<div class="masonry__tile-border"></div>' +
                    '<p class="masonry__tile-category">Commercial: <span>Rent</span></p>' +
                    '<h3 class="masonry__tile-title">' + property.title + '</h3>' +
                    '<p class="masonry__tile-price">114,905 pa</p>' +
                    '<p class="masonry__tile-desc masonry__tile-desc--big">610sqm UNIT</p>' +
                '</div>' +
                '</div>';

            var popup = new google.maps.InfoWindow({
                content: template,
                maxWidth: 330
            });

            return popup;
        }

        function popupStyling(infowindow) {
            google.maps.event.addListener(infowindow, 'domready', function() {
                var iwOuter = $('.gm-style-iw');
                var iwBackground = iwOuter.prev();
                var iwCloseBtn = iwOuter.next();

                iwBackground.children(':nth-child(2), :nth-child(4)').addClass('gm-wrapper');

                iwCloseBtn.addClass('gm-close-btn');
            });
        }

        function closeOtherMarkers() {
            allMarkers.forEach(function(object) {
                object.popup.close();
                object.pin.changeIcon();
            });
        }

        function setupMarkers(json) {
            json.forEach(function(property) {
                var pin = createPin(property.coordinates, property.title);
                var popup = createPopup(property);

                allMarkers.push({
                    pin: pin,
                    popup: popup
                });

                pin.addListener('click', function() {
                    closeOtherMarkers();
                    popup.open(map, pin);
                    pin.changeIcon('active');
                });

                popup.addListener('closeclick', function() {
                    pin.changeIcon();
                });

                popupStyling(popup);
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
