window.SS = window.SS || {};

window.SS.single_case_study = function($) {
    function autoplayVideo() {
        var videoID = 'case-study';
        var isHash = window.location.hash === '#play' ? true : false;

        videojs(videoID).ready(function() {
            var video = this;

            $('.case-study__video').addClass('visible');

            if (isHash) {
                video.play();
            }
        });
    }

    $(document).ready(function() {
        autoplayVideo();
    });
};
