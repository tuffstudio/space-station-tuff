window.SS = window.SS || {};

window.SS.common = function($) {
    var $window = $(window);
    var isDesktop = $window.width() > 1024 ? true : false;
    var $navTrigger = $('.js-nav-trigger');
    var $mobileNavigation = $('.js-primary-nav');

    function subMenuAlignment() {
        var siteWidth = $(window).width();
        var $itemsWithSubMenu = $('.has-menu');

        function calculatePosition($parentItem){
            var parentPosition = $parentItem.position().left;
            var itemWidth = $parentItem.width();
            var centerPosition = itemWidth/2 + parentPosition;
            var $subMenu = $parentItem.find('.sub-menu');
            var $subMenuItems = $subMenu.find('li');
            var subMenuWidth = 0;
            var padding = 12;

            $subMenuItems.each(function() {
                subMenuWidth += $(this).outerWidth();
                subMenuWidth += padding;
            });

            if(siteWidth > 1024) {
                $subMenu.css({
                    'padding-left': centerPosition - subMenuWidth/2
                });
            }
            else {
                $subMenu.css({
                    'padding-left': ''
                });
            }
        }

        $itemsWithSubMenu.each(function() {
            calculatePosition($(this));
        });
    }

    function toggleMobileNavigation() {
        $navTrigger.on('click', function(event) {
            $navTrigger.toggleClass('is-opened');
            $mobileNavigation.toggleClass('is-opened');
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
                    var toggled = !$subMenu.hasClass('is-opened');

                    if(toggled) {
                        $('.sub-menu').removeClass('is-opened');
                        $subMenu.addClass('is-opened');
                    } else {
                        $subMenu.removeClass('is-opened');
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

    function revealSections() {
        $('.js-section-reveal').viewportChecker({
            classToAdd: 'is-revealed',
            offset: 100
        });
    }

    function caseStudiesCarousel() {
        var $carousel = $('.js-case-studies-carousel');

        $carousel.owlCarousel({
            items: 1,
            mouseDrag: false,
            autoplay: true,
            loop: true,
            autoplaySpeed: 2000,
            autoplayHoverPause: true
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

    function equalHeight(owner, target) {
        var $owner = $(owner);
        var $target = $(target);
        var ownerHeight = $owner.height();

        $target.height(ownerHeight);
    }

    function stickyMenu() {
        $('.js-canvas').imagesLoaded(function() {
            if (isDesktop) {
                equalHeight('.js-owner', '.js-target');

                $('.js-sticky').stick_in_parent({
                    offset_top: 200
                });
            }
        });
    }

    $(document).ready(function() {
        toggleMobileNavigation();
        toggleSubMenu();
        goToTopButton();
        revealSections();
        caseStudiesCarousel();
        subMenuAlignment();
        goToNewsletter();
        stickyMenu();
        SS.initSelect2();
    });

    $(window).resize(function() {
        subMenuAlignment();
    });
};

window.SS.switchGrids = function(switcher, panel) {
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
};

window.SS.initSelect2 = function () {
    var $selects = $('select');

    $selects.each(function() {
        var $this = $(this);
        var placeholder = $this.attr('placeholder');

        $this.select2({
            minimumResultsForSearch: Infinity,
            placeholder: placeholder
        });
    });
};
