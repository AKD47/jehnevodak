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
        var m_height = $('.header__nav').height();
        var href = $(this).attr('href');
        var target = $(href);
        var top = target.offset().top - m_height;
        console.log(top, m_height);
        $('html,body').animate({scrollTop: top}, 1000);
        return false;
    });
    /*close animate scroll menu*/

    /*main-slider*/
    $('.main-slider__top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.main-slider__for'
    });
    $('.main-slider__for').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
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
                breakpoint: 480,
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
        asNavFor: '.about__slider-for'
    });
    $('.about__slider-for').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
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
                breakpoint: 480,
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