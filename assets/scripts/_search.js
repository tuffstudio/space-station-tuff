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

    $(document).ready(function() {
        SS.switchGrids('.js-grid-switcher', '.js-results-block');
        SS.switchGrids('.js-tab-switcher', '.js-tab-panel');
        turnMapOn();
        switchFormTypes();
    });
};
