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

    function playVideo() {
        if (!window.isMobile()) {
            var video = document.getElementById('homepage-video');
            video.addEventListener('play', hideSpinner);
        }
    }

    $(document).ready(function() {
        revealBox();
        playVideo();
    });
};
