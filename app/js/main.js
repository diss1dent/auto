(function($) {
    "use strict";

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 53 )
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '#mainNav',
        offset: 54
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse>ul>li>a').click(function() {
        $('.navbar-collapse').collapse('hide');
    });

    // jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    });

    //slider logos
    $('.logos').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000
    });
    $('.car-images').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000
    });

    //niceScroll
    $(document).ready(function() {
        $("html").niceScroll({
            mousescrollstep: 50
        });
        //contact
        $('.contact-item-city').on('click', function(e){
            e.preventDefault();
            $('.contact-item-city.active, .contact-item-info.active').removeClass('active');
            $(this).addClass('active');

            if ($('.city-1').hasClass('active')) {
                $('.city-info-1').addClass('active');
                var citymap_1 = {
                    center: {lat: 46.413257, lng: 30.710342},
                    zoom: 15
                };
                addressmap.setOptions(citymap_1);

            } else if ($('.city-2').hasClass('active')) {
                $('.city-info-2').addClass('active');
                var citymap_2 = {
                    center: {lat: 49.423779, lng: 32.040941},
                    zoom: 15
                };
                addressmap.setOptions(citymap_2);
            } else  if ($('.city-3').hasClass('active')) {
                $('.city-info-3').addClass('active');
                var citymap_3 = {
                    center: {lat: 50.4489241, lng: 30.6003772},
                    zoom: 15
                };
                addressmap.setOptions(citymap_3);
            }
        });

        //copyright
        $('#year').html(new Date().getFullYear());

    });

})(jQuery);

