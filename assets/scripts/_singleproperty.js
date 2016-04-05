window.SS = window.SS || {};

window.SS.singleproperty = function($) {
    var window = $(window);

    function initPoiCarousel() {
        $('.property__poi').owlCarousel({
            autoplay: true,
            autoplaySpeed: 2500,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                568: {
                    items: 2,
                },
                1025: {
                    items: 3
                }
            }
        });
    }

    $(document).ready(function() {
        initPoiCarousel();
        SS.switchGrids('.js-panel-switcher', '.js-property-panel');
    });
};
