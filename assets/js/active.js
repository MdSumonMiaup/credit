(function (jQuery) {
    'use strict';

    var browserWindow = jQuery(window);

    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {
        jQuery('.preloader').fadeOut('slow', function () {
            jQuery(this).remove();
        });
    });

    // :: 2.0 Nav Active Code
    if (jQuery.fn.classyNav) {
        jQuery('#creditNav').classyNav();
    }

    // :: 3.0 Sliders Active Code
    if (jQuery.fn.owlCarousel) {
        var welcomeSlide = jQuery('.hero-slideshow');

        welcomeSlide.owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 10000,
            smartSpeed: 500
        });

        welcomeSlide.on('translate.owl.carousel', function () {
            var slideLayer = jQuery("[data-animation]");
            slideLayer.each(function () {
                var anim_name = jQuery(this).data('animation');
                jQuery(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        welcomeSlide.on('translated.owl.carousel', function () {
            var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = jQuery(this).data('animation');
                jQuery(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        jQuery("[data-delay]").each(function () {
            var anim_del = jQuery(this).data('delay');
            jQuery(this).css('animation-delay', anim_del);
        });

        jQuery("[data-duration]").each(function () {
            var anim_dur = jQuery(this).data('duration');
            jQuery(this).css('animation-duration', anim_dur);
        });
    }

    // :: 4.0 ScrollUp Active Code
    if (jQuery.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i> Top'
        });
    }

    // :: 5.0 CounterUp Active Code
    if (jQuery.fn.counterUp) {
        jQuery('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: 6.0 Progress Bar Active Code
    if (jQuery.fn.circleProgress) {
        jQuery('.circle').circleProgress({
            size: 90,
            emptyFill: "rgba(0, 0, 0, .0)",
            fill: '#fff',
            thickness: '3',
            reverse: true
        });
    }

    // :: 7.0 Tooltip Active Code
    if (jQuery.fn.tooltip) {
        jQuery('[data-toggle="tooltip"]').tooltip();
    }

    // :: 8.0 Prevent Default a Click
    jQuery('a[href="#"]').on('click', function (jQuery) {
        jQuery.preventDefault();
    });

    // :: 9.0 Jarallax Active Code
    if (jQuery.fn.jarallax) {
        jQuery('.jarallax').jarallax({
            speed: 0.2
        });
    }

    // :: 10.0 Sticky Active Code
    if (jQuery.fn.sticky) {
        jQuery("#sticker").sticky({
            topSpacing: 0
        });
    }

    // :: 11.0 Wow Active Code
    if (browserWindow.width() > 767) {
        new WOW().init();
    }

    // :: 12.0 Collapsible 
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("callapse-active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
    }

})(jQuery);