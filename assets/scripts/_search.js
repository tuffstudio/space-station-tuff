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
        $('select').select2({
            minimumResultsForSearch: Infinity
        });
    }

    $(document).ready(function() {
        switchGrids('.js-grid-switcher', '.js-results-block');
        switchGrids('.js-tab-switcher', '.js-tab-panel');
        initSelect2();
    });
};
