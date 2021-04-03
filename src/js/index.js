/*
 * =============================================================================
 *  Required Dependencies by Bootstrap's JavaScript Components
 * =============================================================================
 */

import $ from 'jquery'
// import 'popper.js'

/*
 * =============================================================================
 *  Bootstrap JavaScript Components
 * =============================================================================
 */

import AOS from 'aos'
import sticky from 'jquery-sticky'
import 'owl.carousel';
import 'slicknav/dist/jquery.slicknav.min.js';
import 'bootstrap/js/dist/util'
// import 'bootstrap/js/dist/alert'
import 'bootstrap/js/dist/button'
import 'bootstrap/js/dist/carousel'
import 'bootstrap/js/dist/collapse'
// import 'bootstrap/js/dist/dropdown'
// import 'bootstrap/js/dist/modal'
// import 'bootstrap/js/dist/popover'
// import 'bootstrap/js/dist/scrollspy'
import 'bootstrap/js/dist/tab'
// import 'bootstrap/js/dist/toast'
// import 'bootstrap/js/dist/tooltip'


/*
 * =============================================================================
 *  Application Styles
 * =============================================================================
 */

import '../scss/app.scss'

/*
 * =============================================================================
 *  Asset files
 * =============================================================================
 */

/*
 * =============================================================================
 *  Application Scripts
 * =============================================================================
 */

window.$ = $

!(function($) {
  "use strict";

    /*------------------
        Preloader
    --------------------*/
    $(window).on('load', function () {
        $(".loader").fadeOut();
        $("#preloder").delay(200).fadeOut("slow");
    });

    /*------------------
        Background Set
    --------------------*/
    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    //Canvas Menu
    $(".canvas__open").on('click', function () {
        $(".offcanvas__menu__wrapper").addClass("show__offcanvas__menu");
        $(".offcanvas__menu__overlay").addClass("active");
    });

    $(".canvas__close, .offcanvas__menu__overlay").on('click', function () {
        $(".offcanvas__menu__wrapper").removeClass("show__offcanvas__menu");
        $(".offcanvas__menu__overlay").removeClass("active");
    });

    /*------------------
        Accordin Active
    --------------------*/
    $('.collapse').on('shown.bs.collapse', function () {
        $(this).prev().addClass('active');
    });

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).prev().removeClass('active');
    });

    /*------------------
    Navigation
  --------------------*/
    $(".mobile-menu").slicknav({
        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });

    /*------------------
        Carousel Slider
    --------------------*/
    var hero_s = $(".hero__slider");
    hero_s.owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        dots: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true
    });

    /*------------------
        Testimonial Slider
    --------------------*/
    $(".testimonial__slider").owlCarousel({
        loop: true,
        margin: 0,
        items: 3,
        dots: true,
        smartSpeed: 1200,
        autoHeight: false,
        autoplay: true,
        responsive: {
            320: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            }
        }
    });
    /*------------------
        Achieve Counter
    --------------------*/
    $('.achieve-counter').each(function () {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

})(jQuery);