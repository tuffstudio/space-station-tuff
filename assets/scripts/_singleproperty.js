window.SS = window.SS || {};

window.SS.singleproperty = function($) {
    var $window = $(window);
    var $body = $('body');
    var $overlay = $('.js-overlay');

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

    function openOverlay() {
        $overlay.addClass('is-opened');
        $body.addClass('static');
    }

    function overlay() {
        var $overlayClose = $('.js-overlay-close');
        var $overlayOpenBtn = $('.js-overlay-open');

        $overlayClose.on('click', function(event) {
            $overlay.removeClass('is-opened');
            $body.removeClass('static');
        });

        $overlayOpenBtn.on('click', function(event) {
            event.preventDefault();
            openOverlay();
        });
    }

    function checkIfOpenForm() {
        if ($('.gform_validation_error').length > 0) {
            openOverlay();
        }
    }

    $(document).ready(function() {
        initPoiCarousel();
        overlay();
        SS.switchGrids('.js-panel-switcher', '.js-property-panel');
        SS.initSelect2();
        checkIfOpenForm();
    });
};
