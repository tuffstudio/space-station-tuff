window.SS = window.SS || {};

window.SS.canvas_magazine = function($) {
    function equalHeight(owner, target) {
        var $owner = $(owner);
        var $target = $(target);
        var ownerHeight = $owner.height();

        $target.height(ownerHeight);
    }

    function stickyMenu() {
        $('.js-canvas').imagesLoaded(function() {
            equalHeight('.js-owner', '.js-target');

            $('.js-sticky').stick_in_parent({
                offset_top: 200
            });
        });
    }

    $(document).ready(function() {
        stickyMenu();
    });
};
