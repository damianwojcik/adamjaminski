jQuery(document).ready(function () {

    var body = jQuery('body'),
        $wind = jQuery(window),
        windW = $wind.width(),
        windH = $wind.height();

    $wind.on('resize', function(){
        windW = $wind.width(),
        windH = $wind.height();
        equalizeArticlesHeight();

        if (windW > 960) {
            jQuery('.primary-nav').removeClass('opened');
        }
    });

    // init functions
    blazy();
    mobile_menu();
    modal_search();
    eventsSwiper();
    partnersSwiper();
    equalizeArticlesHeight();
    countUp();
    magnificPopup();

    var vid = document.getElementsByTagName("video");
    vid.controls = false;

    function blazy(){
        var blazy_item = jQuery('.b-lazy');
        if (blazy_item.length > 0){var bLazy = new Blazy(); }
    }

    function mobile_menu() {

        var btn = jQuery('.js-toggle-nav'),
            menuWrapper = jQuery('.primary-nav');

        btn.on('click', function() {
            menuWrapper.toggleClass('opened');
        });

        if (windW < 960) {
            menuWrapper.removeClass('opened');
        }

    }

    function modal_search() {

        var btn = jQuery('.js-search-link'),
            modalWrapper = jQuery('.modal-search'),
            closeBtn = jQuery('.modal-search__close-button');

        btn.on('click', function() {
            modalWrapper.toggleClass('opened');
            document.getElementById("s").focus();
        });

        closeBtn.on('click', function() {
            modalWrapper.toggleClass('opened');
        });

    }

    function countUp() {

        var elem = document.getElementsByClassName('counter__title'),
            start = Number(elem.dataset.start),
            end = Number(elem.dataset.end),
            step = Number(elem.dataset.step),
            time = Number(elem.dataset.time),
            stepTime = time / (end-start),
            range = setInterval(frame, stepTime);

        function frame() {

            if (start >= end) {
                clearInterval(range);
            } else {
                start = start+step;
                elem.innerHTML = start;
            }

        }

    }

    function eventsSwiper() {

        var swiper_events = new Swiper('.section--events .swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            },
            slidesPerView: 3,
            autoHeight: true,
            spaceBetween: 30,

            // Responsive breakpoints
            breakpoints: {
                1024: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 1
                }
            },
        });

        jQuery(".section--events .swiper-container").hover(function() {
            swiper_events.autoplay.stop();
        }, function() {
            swiper_events.autoplay.start();
        });

    }

    function partnersSwiper() {

        var swiper_partners = new Swiper('.section--partners .swiper-container', {
            slidesPerView: 1,
            centeredSlides: true,
            lazy: true,
            preloadImages: false,
            loop: true,
            spaceBetween: 30,
            autoplay: {
                delay: 3000,
                disableOnInteraction: true,
            }
        });

        jQuery(".section--partners .swiper-container").hover(function() {
            swiper_partners.autoplay.stop();
        }, function() {
            swiper_partners.autoplay.start();
        });

    }

    // equalize height of article
    function equalizeArticlesHeight() {

        var highestBox = 0;

        jQuery('.article__wrap').each(function() {

            if (jQuery(this).height() > highestBox) {
                highestBox = jQuery(this).height();
            }

        });

        if(windW>=1024) {
            jQuery('.article__wrap').css("height", highestBox + "px");
        } else {
            jQuery('.article__wrap').css("height",  "auto");
        }
    }

    function countUp() {

        jQuery('.js-countUp').counterUp({
            delay: 10,
            time: 1000
        });
    }

    function magnificPopup() {

        jQuery('.gallery').each(function() { // the containers for all your galleries

            var items = [];

            jQuery(this).children('.gallery__items').find('a').each(function() {
                items.push( {
                    src: jQuery(this).attr('href')
                } );
            });

            jQuery(this).magnificPopup({
                type: 'image',
                items: items,
                gallery: {
                    enabled: true,
                    tPrev: 'Poprzednie zdjęcie',
                    tNext: 'Następne zdjęcie',
                    tCounter: '%curr% z %total%'
                }
            });
        });

    }

});
