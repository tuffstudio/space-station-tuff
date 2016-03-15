window.SS = window.SS || {};

window.SS.home = function($) {
    function revealBox() {
        $('.js-moving-box').viewportChecker({
            classToAdd: 'is-moved',
            offset: 350,
        });
    }



    $(document).ready(function() {
        revealBox();
    });
};
