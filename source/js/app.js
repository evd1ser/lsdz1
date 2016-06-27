(function() {
    'use strict';

    $('.js-login').click(function(e) {
        e.preventDefault();
        $('.b-portfolio').toggleClass('b-portfolio_delay').toggleClass('b-portfolio_animate');
    });

    $('.js-menu').click(function(e) {
        e.preventDefault();
        $('#menu').toggleClass('b-nav_close');
    });
    $('.js-aside').click(function(e) {
        // event.stopPropagation();
        e.stopPropagation();
        console.log(e);
        $('.js-aside').toggleClass('b-blog-asid_openmpb');
    });

    var paral = $(".b-content-head_nohome");
    $(window).scroll(function() {
        var
            wScroll = $(window).scrollTop(),
            wHeigt = $(window).height(),
            pos = 50 + 0.5*(wScroll*100)/wHeigt;
            $(paral).css({
                'background-position-y': pos + '%',
                'transition': "all 0.1s",
                'background-size': "120%"
            });


    });

    //** SLIDER **//
    var
        slider = $("#sliderwork"),
        btnlnk = $(".b-slider__item_small"),
        nextcover = $(".b-slider__next"),
        prevcover = $(".b-slider__prev"),
        imgconteiner = $(".b-slider_allimg"),
        bigitem = $(".b-slider__item_big"),
        timeanim = 1000;


        var texttoslide = function (elem) {
            var
                title = $(elem).data("title"),
                tag = $(elem).data("tag"),
                link = $(elem).data("link"),
                i = 0;
            $("#title").html('');
            $("#title").html(title);

            $.fn.animate_Text = function() {
                var string = this.text();
                return this.each(function(){
                    var $this = $(this);
                    $this.html(string.replace(/./g, '<span class="b-slider__span">$&</span>'));
                    $this.find('span.b-slider__span').each(function(i, el){
                        setTimeout(function(){ $(el).addClass('b-slider__span_op zoomInDown'); }, 100 * i);
                    });
                });
            };
            $("#title").show();
            $("#title").animate_Text();

            // function animateText(id, text, i) {
            //     document.getElementById(id).innerHTML = text.substring(0, i);
            //     i++;
            //     if (i > text.length) i = 0;
            //     setTimeout("animateText('" + id + "','" + text + "'," + i + ")", 100);
            // }
            // animateText("title", "MyRusakov.ru - Как создать свой сайт", 0);
        }

        $(btnlnk).on("click", function (e) {
            e.preventDefault();

                var link = $(this);
                if ($(link).hasClass("b-slider__next")) {
                    var slideUpTobig = $(link).find('.b-slider__img').first(),
                        slideDownTosmall = $(bigitem).find($('.b-slider__img')).first(),
                        slideSmallOut = $('#sliderwork .b-slider__prev .b-slider__img').first(),
                        slideSmallIn = $(imgconteiner).find('.b-slider__img').last();

                    texttoslide(slideUpTobig);

                    slideDownTosmall.fadeOut(timeanim, function () {
                        $(this).remove();
                    }).clone().removeAttr("style").css({"top": "100%"}).appendTo(prevcover).animate({
                        top: "0"
                    }, timeanim, function() {
                        //
                    });

                    slideUpTobig.animate({
                        top: "100%"
                    }, timeanim, function() {
                        $(this).remove();
                    }).clone().removeAttr("style").appendTo(bigitem).fadeOut(0).fadeIn(timeanim);

                    slideSmallOut.animate({
                        top: "-100%"
                    }, timeanim, function() {
                        $(this).remove();
                    }).clone().removeAttr("style").prependTo(imgconteiner);


                    slideSmallIn.css({"top": "-100%"}).appendTo(nextcover).animate({
                        top: "0"
                    }, timeanim, function() {
                        //
                    });

                } else {
                    var slideUpTobig = $(link).find('.b-slider__img').first(),
                        slideDownTosmall = $(bigitem).find($('.b-slider__img')).first(),
                        slideSmallOut = $('#sliderwork .b-slider__next .b-slider__img').first(),
                        slideSmallIn = $(imgconteiner).find('.b-slider__img').first();
                    // slideUpTobig.siblings().remove();
                    // slideDownTosmall.siblings().remove();
                    // slideSmallOut.siblings().remove();
                    texttoslide(slideUpTobig);


                    slideDownTosmall.fadeOut(timeanim, function () {
                        $(this).remove();
                    }).clone().removeAttr("style").css({"top": "-100%"}).appendTo(nextcover).animate({
                        top: "0"
                    }, timeanim, function() {
                        //
                    });

                    slideUpTobig.animate({
                        top: "-100%"
                    }, timeanim, function() {
                        $(this).remove();
                    }).clone().removeAttr("style").appendTo(bigitem).fadeOut(0).fadeIn(timeanim);

                    slideSmallOut.animate({
                        top: "100%"
                    }, timeanim, function() {
                        $(this).remove();
                    }).clone().removeAttr("style").appendTo(imgconteiner);


                    slideSmallIn.css({"top": "100%"}).appendTo(prevcover).animate({
                        top: "0"
                    }, timeanim, function() {
                        //
                    });
                }

        })

})();
