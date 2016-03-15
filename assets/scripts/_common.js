window.SS = window.SS || {};

window.SS.common = function($) {
    var $navTrigger = $('.js-nav-trigger');
    var $mobileNavigation = $('.js-primary-nav');

    function toggleMobileNavigation() {
        $navTrigger.on('click', function(event) {
            $navTrigger.toggleClass('open');
            $mobileNavigation.toggleClass('opened');
        });
    }

    function toggleSubMenu() {
        var $menuItem = $('.navigation-menu > .Nav-item');

        $menuItem.each(function() {
            var $this = $(this);

            if ($this.children('ul').length > 0) {
                var $subMenu = $this.find('.sub-menu');
                var toggled = false;

                $this.addClass('has-menu');
                $this.on('click', function(event) {
                    event.preventDefault();

                    var toggled = !$subMenu.hasClass('opened');

                    if(toggled) {
                        $('.sub-menu').removeClass('opened');
                        $subMenu.addClass('opened');
                    } else {
                        $subMenu.removeClass('opened');
                    }
                });
            }
        });
    }

    function goToTopButton() {
        var $button = $('.js-to-top');

        $(window).on('scroll', function() {
            if ($(this).scrollTop() >= 150) {
                $button.addClass('is-visible');
            } else {
                $button.removeClass('is-visible');
            }
        });

        $button.on('click', function() {
            $('html, body').stop().animate({ scrollTop: 0 }, 'slow');
        });
    }

    function setCookie(cookieName, value, daysLeft) {
        var expireDate = new Date();

        expireDate.setDate(expireDate.getDate() + daysLeft);

        var cookieValue = escape(value) + ((daysLeft === null) ? '' : '; expires=' + expireDate.toUTCString());

        document.cookie = cookieName + '=' + cookieValue;
    }

    function getCookie(cookieName) {
        var cookie = document.cookie;
        var cookieStart = cookie.indexOf(' ' + cookieName + '=');

        if (cookieStart === -1) {
            cookieStart = cookie.indexOf(cookieName + '=');
        }

        if (cookieStart === -1) {
            cookie = null;
        } else {
            cookieStart = cookie.indexOf('=', cookieStart) + 1;

            var cookieEnd = cookie.indexOf(';', cookieStart);

            if (cookieEnd === -1) {
                cookieEnd = cookie.length;
            }

            cookie = unescape(cookie.substring(cookieStart, cookieEnd));
        }

        return cookie;
    }

    function cookiesInfo($elem) {
        var cookie = getCookie(cookieUser);

        if (cookie === null) {
            $elem.show();
        }

        $elem.on('click', function(e) {
            var target  = $(e.target);
            if (target.is('a')) {
                return true;
            } else {
                e.preventDefault();
                setCookie(cookieUser, 1, 500);
                $elem.fadeOut('slow');
            }
        });
    }

    $(document).ready(function() {
        toggleMobileNavigation();
        toggleSubMenu();
    });
};
