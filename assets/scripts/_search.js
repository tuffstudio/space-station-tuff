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

    $(document).ready(function() {
        SS.switchGrids('.js-grid-switcher', '.js-results-block');
        SS.switchGrids('.js-tab-switcher', '.js-tab-panel');
        turnMapOn();
    });
};
