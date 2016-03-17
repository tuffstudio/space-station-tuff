window.SS = window.SS || {};

window.SS.home = function($) {
    function revealBox() {
        $('.js-moving-box').viewportChecker({
            classToAdd: 'is-moved',
            offset: 350,
        });
    }

    function caseStudiesCarousel() {
        var $carousel = $('.js-case-studies-carousel');

        $carousel.owlCarousel({
            items: 1,
            mouseDrag: false,
            autoplay: true,
            loop: true,
            autoplaySpeed: 2000,
            autoplayHoverPause: true
        });
    }

    $(document).ready(function() {
        revealBox();
        caseStudiesCarousel();
    });
};
