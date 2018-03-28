$(document).ready(function () {

    /*preloader*/
    var preloader = {
        open: function () {
            $('body').addClass('hidden-overflow');
            $('.js-open').fadeIn('fast');
        },
        close: function () {
            $('body').removeClass('hidden-overflow');
            $('.js-open').fadeOut('fast');
        }
    };

    preloader.open();

    $(window).on('load', function () {
        setTimeout(function () {
            preloader.close();
        }, 400);
    });
    /*close*/

    /*animate scroll menu*/
    $(document).on('click', '.header__nav li a', function (event) {
        event.preventDefault();
        if($(this).hasClass('menu-active')) {
            $(this).removeClass('menu-active')
        } else {
            $('.header__nav li a').removeClass('menu-active');
            $(this).addClass('menu-active');
        }
        var href = $(this).attr('href');
        var target = $(href);
        if (window.innerWidth < 710) {
            var m_height = parseInt('54px');
            var top = target.offset().top - m_height;
            console.log(m_height);
            $('html,body').animate({scrollTop: top}, 1000);
            return false;
        } else {
            var m_height = $('.header__nav').height();
            var top = target.offset().top - m_height;
            console.log(m_height);
            $('html,body').animate({scrollTop: top}, 1000);
            return false;
        }
    });
    /*close animate scroll menu*/

    /*mobile menu*/
    $(document).on('click', '#header-trigger', function (event) {
        event.preventDefault();
        var menu = $(this).closest('.header__navigation').find('.header__nav');
        if ($(this).hasClass('js-trigger-active')) {
            $(this).removeClass('js-trigger-active');
            menu.slideUp('slow');
        } else {
            $(this).addClass('js-trigger-active');
            menu.slideDown('slow');
        }
        return false;
    });
    if (window.innerWidth < 756) {
        $(document).mouseup(function (event) {
            var block = $('.header__navigation');
            if (!block.is(event.target)
                && block.has(event.target).length === 0) {
                $('#mobile-menu').removeClass('js-trigger-active');
                $('.header__nav').slideUp('500');
            }
        });
    }
    /*close*/

    /*main-slider*/
    $('.main-slider__top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        asNavFor: '.main-slider__for'
    });
    $('.main-slider__for').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        asNavFor: '.main-slider__top',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 700,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2
                }
            }
        ]
    });
    /*close*/

    /*about slider*/
    $('.about__slider-top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        asNavFor: '.about__slider-for'
    });
    $('.about__slider-for').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        asNavFor: '.about__slider-top',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 700,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2
                }
            }
        ]
    });
    /*close*/

    /*about slider*/
    $('.team__slider-top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        asNavFor: '.team__slider-for'
    });
    $('.team__slider-for').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        asNavFor: '.team__slider-top',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 700,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 2
                }
            }
        ]
    });
    /*close*/
});