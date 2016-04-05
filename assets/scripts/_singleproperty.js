window.SS = window.SS || {};

window.SS.singleproperty = function($) {
    var window = $(window);

    function initPoiCarousel() {
        $('.property__poi').owlCarousel({
            items: 3,
            autoplaySpeed: 2000,
            autoplayHoverPause: true,
        });
    }

    function initVerticalCarousel() {
        $('.js-vertical-slideshow').cycle({
            log: false
        });
    }

    $(document).ready(function() {
        initPoiCarousel();
        initVerticalCarousel();
        SS.switchGrids('.js-panel-switcher', '.js-property-panel');
    });
};
