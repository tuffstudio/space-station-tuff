window.SS = window.SS || {};

window.SS.home = function($) {
    function revealBox() {
        $('.js-moving-box').viewportChecker({
            classToAdd: 'is-moved',
            offset: 350,
        });
    }

    function hideSpinner() {
        $('.js-spinner').hide();
    }

    $(document).ready(function() {
        revealBox();

        var video = document.getElementById('homepage-video');
        video.addEventListener('play', hideSpinner);
    });
};
