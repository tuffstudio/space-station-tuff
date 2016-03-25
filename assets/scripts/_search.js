window.SS = window.SS || {};

window.SS.search = function($) {
    function switchGrids(switcher, panel) {
        var $switchButton = $(switcher);
        var $panel = $(panel);

        $switchButton.on('click', function(event) {
            var $this = $(this);
            var targetId = $this.attr('href');
            var $targetBlock = $(targetId);

            $panel.removeClass('visible');
            $switchButton.removeClass('active');

            $targetBlock.addClass('visible');
            $this.addClass('active');

            event.preventDefault();
            return false;
        });
    }

    function initSelect2() {
        var $selects = $('select');

        $selects.each(function() {
            var $this = $(this);
            var placeholder = $this.attr('placeholder');

            $this.select2({
                minimumResultsForSearch: Infinity,
                placeholder: placeholder
            });
        });
    }

    function goToNewsletter() {
        var $link = $('.js-newsletter-jump');
        var $target = $('.js-newsletter');
        var SCROLL_SPEED = 1000;

        $link.on('click', function(event) {
            var offsetTop = $target.offset().top;

            $('html, body').animate({ scrollTop: offsetTop }, SCROLL_SPEED);

            return false;
        });
    }

    // Google map integration. Revealing module pattern
    var PropertyMap = (function() {
        // private
        var containerId = 'map';
        var latitude = 50.2945;
        var longitude = 18.6714;
        var mapOptions = {
            zoom: 10,
            center: new google.maps.LatLng(latitude, longitude)
        };

        function initMap() {
            map = new google.maps.Map(document.getElementById(containerId), mapOptions);
        }

        // public
        return {
            init: initMap
        };
    })();

    $(document).ready(function() {
        switchGrids('.js-grid-switcher', '.js-results-block');
        switchGrids('.js-tab-switcher', '.js-tab-panel');
        initSelect2();
        goToNewsletter();
        PropertyMap.init();
    });
};
