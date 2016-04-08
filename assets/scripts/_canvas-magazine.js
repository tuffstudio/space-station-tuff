window.SS = window.SS || {};

window.SS.canvas_magazine = function($) {
    var $window = $(window);
    var isDesktop = $window.width() > 1024 ? true : false;

    function equalHeight(owner, target) {
        var $owner = $(owner);
        var $target = $(target);
        var ownerHeight = $owner.height();

        $target.height(ownerHeight);
    }

    function stickyMenu() {
        $('.js-canvas').imagesLoaded(function() {
            if (isDesktop) {
                equalHeight('.js-owner', '.js-target');

                $('.js-sticky').stick_in_parent({
                    offset_top: 200
                });
            }
        });
    }

    $(document).ready(function() {
        stickyMenu();
    });
};
