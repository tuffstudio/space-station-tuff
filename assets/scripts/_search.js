window.SS = window.SS || {};

window.SS.search = function($) {
    $(document).ready(function() {
        SS.switchGrids('.js-grid-switcher', '.js-results-block');
        SS.switchGrids('.js-tab-switcher', '.js-tab-panel');

        var map = new window.SS.PropertyMap('map');
        map.init();
        map.setupMarkers();
    });
};
