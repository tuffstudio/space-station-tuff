window.SS = window.SS || {};

window.SS.post_type_archive_address_book = function($) {
    var $addressBookContainer = $('.js-address-book');

    function fetchData(query) {
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
        var pageUrl = window.location.href;
        var pageUrlArray = pageUrl.split("/");

        pageUrl = pageUrlArray[0] + "//" + pageUrlArray[2] + "/address-book/";

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

        function dataUpdater() {
            var newPath = generatePath();
            history.pushState({}, window.title, pageUrl + newPath);
            fetchData(newPath);
        }

        $selectLocalization.on('change', function() {
            currentLocalization = $(this).val();
            dataUpdater();
        });

        $selectCategory.on('change', function() {
            currentCategory = $(this).val();
            dataUpdater();
        });
    }

    $(document).ready(function() {
        init();
    });
};
