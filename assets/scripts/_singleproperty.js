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

    function initGalleryCarousel() {
        var $owl = $('.js-property-gallery');

        function initCounter(event) {
            $('.js-index').html(event.item.index + 1);
            $('.js-count').html(event.item.count);
            $('.js-counter').show();
        }

        function incrementCounter(event) {
            $('.js-index').html(event.item.index + 1);
        }

        function setKeyboard() {
            document.body.addEventListener('keydown', function(event) {
                if (event.keyCode === 37) {
                    $owl.trigger('prev.owl.carousel');
                }
                if (event.keyCode === 39) {
                    $owl.trigger('next.owl.carousel');
                }
            });
        }

        $owl.owlCarousel({
            autoplay: false,
            items: 1,
            lazyLoad: true,
            dots: false,
            nav: true,
            navText: ['<', '>'],
            animateIn: 'fade-in',
            onInitialize: setKeyboard,
            onInitialized: initCounter,
            onChanged: incrementCounter
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
        if ($('.gform_validation_error').length > 0 || $('.gform_confirmation_message').length > 0) {
            openOverlay();
        }
    }

    $(document).ready(function() {
        initGalleryCarousel();
        initPoiCarousel();
        overlay();
        SS.switchGrids('.js-panel-switcher', '.js-property-panel');
        SS.initSelect2();
        checkIfOpenForm();
    });
};
