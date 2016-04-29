window.SS = window.SS || {};

window.SS.post_type_archive_address_book = function($) {
    var $addressBookContainer = $('.js-address-book');
    
    function fetchData(query) {
        console.log(query);
        $.ajax({
            type: 'GET',
            url: '/wp-admin/admin-ajax.php',
            data: {
                action: 'get_address_book_posts',
                data: query
            },
            success: function(response) {
                $addressBookContainer.html(response);
            },
            error: function(message) {
                console.log(message);
            }
        });
    }

    function init() {
        var $selectLocalization = $('.js-address-book-localization');
        var $selectCategory = $('.js-address-book-category');
        var currentLocalization = $selectLocalization.val();
        var currentCategory = $selectCategory.val();
        var pageUrl = 'http://' + '192.168.99.100:8000/' + window.location.pathname;

        function generatePath() {
            var path = '?';

            if (currentCategory) {
                path += 'tax_category=' + currentCategory + '&';
            }
            if (currentLocalization) {
                path += 'tax_localization=' + currentLocalization;
            }

            return path;
        }

        $selectLocalization.on('change', function() {
            currentLocalization = $(this).val();
            history.pushState({}, window.title, pageUrl + generatePath());
            fetchData(generatePath());
        });

        $selectCategory.on('change', function() {
            currentCategory = $(this).val();
            history.pushState({}, window.title, pageUrl + generatePath());
            fetchData(generatePath());
        });
    }

    $(document).ready(function() {
        init();
    });
};
