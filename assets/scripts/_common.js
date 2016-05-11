window.SS = window.SS || {};

window.SS.common = function($) {
    var $window = $(window);
    var $body = $('body');
    var isDesktop = $window.width() > 1024 ? true : false;
    var $navTrigger = $('.js-nav-trigger');
    var $mobileNavigation = $('.js-primary-nav');

    function setIsMobile() {
        if (isDesktop) {
            $body.addClass('is-desktop');
        }
    }

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

    function userBox() {
        var $userBox = $('.js-favourites-box');
        var $userBoxTrigger = $userBox.find('.js-favourites-box-trigger');
        var $userBoxClose = $userBox.find('.js-favourites-box-close');
        var $subMenu = $('.sub-menu');
        var $navigation = $('.navigation-menu');

        $userBoxTrigger.on('click', function() {
            $body.toggleClass('favourites-box--is-opened');
            $subMenu.removeClass('is-opened');
            $navigation.removeClass('is-normal');
        });

        $userBoxClose.on('click', function() {
            $body.removeClass('favourites-box--is-opened');
            $navigation.removeClass('is-normal');
        });
    }

    function toggleMobileNavigation() {
        $navTrigger.on('click', function(event) {
            $navTrigger.toggleClass('is-opened');
            $mobileNavigation.toggleClass('is-opened');
        });
    }

    function toggleSubMenu() {
        var $navigation = $('.navigation-menu');
        var $menuItem = $('.navigation-menu > .Nav-item');

        $menuItem.each(function() {
            var $this = $(this);

            if ($this.children('ul').length > 0) {
                var $subMenu = $this.find('.sub-menu');
                var toggled = false;

                $this.addClass('has-menu');

                $this.on('click', function(event) {
                    var toggled = !$subMenu.hasClass('is-opened');
                    var isSpecialItem = $(this).hasClass('Item--find-a-property');
                    $body.removeClass('favourites-box--is-opened');

                    if(toggled) {
                        $('.sub-menu').removeClass('is-opened');
                        $subMenu.addClass('is-opened');
                        $navigation.removeClass('is-normal');

                        if (isSpecialItem) {
                            $navigation.addClass('is-normal');
                        }
                    } else {
                        $subMenu.removeClass('is-opened');
                        $navigation.removeClass('is-normal');
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

        var cookieValue = escape(value) + ((daysLeft === null) ? '' : '; expires=' + expireDate.toUTCString() + '; path=/');

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

    function revealSections() {
        $('.js-section-reveal').viewportChecker({
            classToAdd: 'is-revealed',
            offset: 50
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
            autoplayHoverPause: true,
            nav: true,
            navText: ['<', '>']
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
                    offset_top: 100
                });
            }
        });
    }

    function canvasAnimation() {
        var $canvasAnimation = $('.js-canvas-animation');

        $(window).on('scroll', function() {
            if ($(this).scrollTop() >= 200) {
                $canvasAnimation.addClass('is-visible');
            } else {
                $canvasAnimation.removeClass('is-visible');
            }
        });
    }

    function goBack() {
        $('.js-go-back').on('click', function(event) {
            event.preventDefault();
            window.history.back();
        });
    }

    function smoothScroll() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    }

    function cookiesInfo() {
        var $closeBtn = $('.js-cookies-close');
        var $cookiesBar = $('.js-cookies-bar');
        var $navigation = $('.js-navigation');
        var cookie = getCookie('ss-new-user');


        if (cookie === null) {
            $cookiesBar.addClass('active');
            $navigation.addClass('cookies-opened');
            $body.addClass('cookies-opened');
        }

        $closeBtn.on('click', function(event) {
            event.preventDefault();
            setCookie('ss-new-user', 1, 500);
            $cookiesBar.removeClass('active');
            $navigation.removeClass('cookies-opened');
            $body.removeClass('cookies-opened');
        });
    }

    function shareAnimations() {
        var $shareTitle = $('.js-share-title');
        var $shareBtns = $('.js-share-btn');
        var $shareContainer = $('.js-share-container');
        var RESET_DELAY = 7000;

        $shareTitle.on('click', function() {
            $shareContainer.addClass('active');
        });

        $shareBtns.on('click', function() {
            $shareContainer.addClass('thanks');

            setTimeout(function() {
                $shareContainer.removeClass('active thanks');
            }, RESET_DELAY);
        });
    }

    $(document).ready(function() {
        setIsMobile();
        toggleMobileNavigation();
        toggleSubMenu();
        goToTopButton();
        revealSections();
        caseStudiesCarousel();
        stickyMenu();
        userBox();
        canvasAnimation();
        SS.initSelect2();
        goBack();
        smoothScroll();
        cookiesInfo();
        shareAnimations();

        setTimeout(function() {
            subMenuAlignment();
        }, 200);

    });

    $(window).resize(function() {
        subMenuAlignment();
    });
};


// Common function visible everywhere
// ----------------------------------
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

// Google map integration. Revealing module pattern
window.SS.PropertyMap = function(id, initCoords, customOptions) {
    // private
    var map;
    var containerId = id;
    var containerObject = document.getElementById(containerId);

    if (initCoords === undefined) {
        initCoords = {
            latitude: 50.2945,
            longitude: 18.6714
        };
    }

    var mapStyles = [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}];

    var mapOptions = {
        zoom: 10,
        center: new google.maps.LatLng(initCoords.latitude, initCoords.longitude),
        styles: mapStyles,
        mapTypeControl: false,
        zoomControl: false,
        streetViewControl: false,
    };
    var allMarkers = [];

    if (customOptions !== undefined) {
        for (var option in customOptions) {
            mapOptions[option] = customOptions[option];
        }
    }

    var getJson = function() {
        return JSON.parse(containerObject.getAttribute('data-json'));
    };

    var createPin = function(LatLng, title, url) {
        var iconsPath = SS.settings.imagesPath;
        var iconDefault = 'mapicon.png';
        var iconActive = 'mapicongold.png';

        var pinOptions = {
            position: LatLng,
            map: map,
            title: title,
            animation: google.maps.Animation.DROP,
            icon: iconsPath + iconDefault
        };

        var pin = new google.maps.Marker(pinOptions);

        pin.changeIcon = function(state) {
            if (state !== undefined) {
                // set new icon
                pin.setIcon(iconsPath + iconActive);
            } else {
                // reset icon to default
                pin.setIcon(iconsPath + iconDefault);
            }
        };

        if (url !== undefined) {
            pin.addListener('click', function() {
                window.open(url, '_blank');
            });
        }

        return pin;
    };

    var createPopup = function(property) {
        var template = '<div class="masonry__link">' +
            '<div class="single-result__image">' +
                '<img src="http://lorempicsum.com/up/350/200/3">' +
            '</div>' +
            '<div class="single-result__info">' +
                '<div class="masonry__tile-border"></div>' +
                '<p class="masonry__tile-category">Commercial: <span>Rent</span></p>' +
                '<h3 class="masonry__tile-title">' + property.title + '</h3>' +
                '<p class="masonry__tile-price">114,905 pa</p>' +
                '<p class="masonry__tile-desc masonry__tile-desc--big">610sqm UNIT</p>' +
            '</div>' +
            '</div>';

        var popup = new google.maps.InfoWindow({
            content: template,
            maxWidth: 330
        });

        return popup;
    };

    var popupStyling = function(infowindow) {
        google.maps.event.addListener(infowindow, 'domready', function() {
            var $iwOuter = $('.gm-style-iw');
            var $iwBackground = $iwOuter.prev();
            var $iwCloseBtn = $iwOuter.next();

            $iwBackground.children(':nth-child(2), :nth-child(4)').addClass('gm-wrapper');

            $iwCloseBtn.addClass('gm-close-btn');
        });
    };

    var closeOtherMarkers = function() {
        allMarkers.forEach(function(object) {
            object.popup.close();
            object.pin.changeIcon();
        });
    };

    var setupMarkers = function(json) {
        if (json === undefined) {
            json = getJson();
        }

        json.forEach(function(property) {
            var pin = createPin(property.coordinates, property.title);
            var popup = createPopup(property);

            allMarkers.push({
                pin: pin,
                popup: popup
            });

            pin.addListener('click', function() {
                closeOtherMarkers();
                popup.open(map, pin);
                pin.changeIcon('active');
            });

            popup.addListener('closeclick', function() {
                pin.changeIcon();
            });

            popupStyling(popup);
        });
    };

    var initMap = function() {
        map = new google.maps.Map(containerObject, mapOptions);
    };

    // public
    return {
        init: initMap,
        setupMarkers: setupMarkers,
        setPin: createPin,
        getJson: getJson
    };
};

window.isMobile = function() {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        return true;
    }
    else {
        return false;
    }
};
