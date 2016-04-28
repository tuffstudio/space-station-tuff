window.SS = window.SS || {};

window.SS.single_case_study = function($) {
    function autoplayVideo() {
        var isHash = window.location.hash === '#play' ? true : false;

        if (isHash) {
            var video = document.getElementById('case-study');
            video.play();
        }
    }

    $(document).ready(function() {
        autoplayVideo();
    });
};
