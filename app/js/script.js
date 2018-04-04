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
        if ($(this).width() > 1024) {
            $('.main-slider__top').find('.main-slider__top--title').delay(1200).animate({
                    opacity: 1,
                    right: 88
                }, 'slow'
            );
        }
    });
    /*close*/

    /*animate scroll menu*/
    $(document).on('click', '.header__nav li.go-to a', function (event) {
        event.preventDefault();
        if($(this).hasClass('menu-active')) {
            $(this).removeClass('menu-active')
        } else {
            $('.header__nav li.go-to a').removeClass('menu-active');
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
    // $('.main-slider__top').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     fade: true,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     asNavFor: '.main-slider__for'
    // });
    // $('.main-slider__for').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     asNavFor: '.main-slider__top',
    //     dots: false,
    //     arrows: false,
    //     centerMode: true,
    //     focusOnSelect: true,
    //     responsive: [
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 arrows: false,
    //                 centerMode: true,
    //                 slidesToShow: 3
    //             }
    //         },
    //         {
    //             breakpoint: 700,
    //             settings: {
    //                 arrows: false,
    //                 centerMode: true,
    //                 slidesToShow: 2
    //             }
    //         }
    //     ]
    // });
    /*close*/

    /*about slider*/
    // $('.about__slider-top').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     fade: true,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     asNavFor: '.about__slider-for'
    // });
    // $('.about__slider-for').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     asNavFor: '.about__slider-top',
    //     dots: false,
    //     arrows: false,
    //     centerMode: true,
    //     focusOnSelect: true,
    //     responsive: [
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 arrows: false,
    //                 centerMode: true,
    //                 slidesToShow: 3
    //             }
    //         },
    //         {
    //             breakpoint: 700,
    //             settings: {
    //                 arrows: false,
    //                 centerMode: true,
    //                 slidesToShow: 2
    //             }
    //         }
    //     ]
    // });
    /*close*/

    /*about slider*/
    // $('.team__slider-top').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     fade: true,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     asNavFor: '.team__slider-for'
    // });
    // $('.team__slider-for').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     asNavFor: '.team__slider-top',
    //     dots: false,
    //     arrows: false,
    //     centerMode: true,
    //     focusOnSelect: true,
    //     responsive: [
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 arrows: false,
    //                 centerMode: true,
    //                 slidesToShow: 3
    //             }
    //         },
    //         {
    //             breakpoint: 700,
    //             settings: {
    //                 arrows: false,
    //                 centerMode: true,
    //                 slidesToShow: 2
    //             }
    //         }
    //     ]
    // });
    /*close*/

    /*media slider*/
    $('#media-slider').slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        fade: false,
        infinite: true,
        touchMove: false,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 4000
    });
    /*close*/

    /*about slider*/
    // $('.media__slider-top').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     fade: true,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     asNavFor: '.media__slider-for'
    // });
    // $('.media__slider-for').slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 4000,
    //     asNavFor: '.media__slider-top',
    //     dots: false,
    //     arrows: false,
    //     centerMode: true,
    //     focusOnSelect: true,
    //     responsive: [
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 arrows: false,
    //                 centerMode: true,
    //                 slidesToShow: 3
    //             }
    //         },
    //         {
    //             breakpoint: 700,
    //             settings: {
    //                 arrows: false,
    //                 centerMode: true,
    //                 slidesToShow: 2
    //             }
    //         }
    //     ]
    // });
    /*close*/

    /*slider title animation*/
    $(window).scroll(function(){
        var about_slider = $('.about__slider-top').offset().top - $(window).height(),
            team_slider = $('.team__slider-top').offset().top - $(window).height(),
            media_slider = $('.media__slider-top').offset().top - $(window).height();

        if ($(this).width() > 1024) {
            if  ($(window).scrollTop() >= about_slider) {
                $('.about__slider-top').find('.about__slider-top--title').delay(1200).animate({
                    opacity: 1,
                    right: 88
                }, 'slow');
            }
            if  ($(window).scrollTop() >= team_slider) {
                $('.team__slider-top').find('.team__slider-top--title').delay(1200).animate({
                    opacity: 1,
                    right: 88
                }, 'slow');
            }
            if  ($(window).scrollTop() >= media_slider) {
                $('.media__slider-top').find('.media__slider-top--title').delay(1200).animate({
                    opacity: 1,
                    right: 88
                }, 'slow');
            }
        }
    });
    /*close*/

    /*contacts form*/
    $('#contact-name, #contact-email, #contact-phone, #contact-text').unbind().blur(function () {

        var id = $(this).attr('id');
        var val = $(this).val();

        switch (id) {
            case 'contact-name':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/;
                if (val.length > 2 && val != '' && rv_name.test(val)) {
                    $(this).removeClass('error').addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');
                }
                break;

            case 'contact-email':
                var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
                if (val != '' && rv_email.test(val)) {
                    $(this).removeClass('error').addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');
                }
                break;

            case 'contact-phone':
                var rv_phone = /^([0-9_-])+/;
                if (val != '' && rv_phone.test(val)) {
                    $(this).removeClass('error').addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');
                }
                break;

            case 'contact-text':
                if (val != '' && val.length < 5000) {
                    $(this).removeClass('error').addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');
                }
                break;

        } // end switch(...)

    }); // end blur()
    $('#contact-form').submit(function (event) {
        event.preventDefault();
        var name = $('#contact-name').val(),
            mail = $('#contact-email').val(),
            phone = $('#contact-phone').val(),
            message = $('#contact-text').val();
        $.ajax({
            url: myajax.url,
            type: "POST",
            data: {
                action: 'contact',
                name: name,
                mail: mail,
                phone: phone,
                message: message
            },
            success: function(data){
                $('#contact-form input, textarea').val('').removeClass('error, not_error').text('');
                // alert(data);
            }
        }); // end ajax({...})
        return false;
    }); // end submit()
    /*close*/
});