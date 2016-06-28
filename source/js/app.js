(function() {
    'use strict';

    $('.js-login').click(function(e) {
        e.preventDefault();
        $('.b-portfolio').toggleClass('b-portfolio_delay').toggleClass('b-portfolio_animate');
    });
    
    var pathA = document.getElementById('pathA'),
        pathC = document.getElementById('pathC'),
        segmentA = new Segment(pathA, 8, 32),
        segmentC = new Segment(pathC, 8, 32);


    function inAC(s) {
        s.draw('80% - 24', '80%', 0.3, {delay: 0.1, callback: function(){
            inAC2(s)
        }});
    }
    function inAC2(s) {
        s.draw('100% - 54.5', '100% - 30.5', 0.6, {easing: ease.ease('elastic-out', 1, 0.3)});
    }


// Initialize
    var pathB = document.getElementById('pathB'),
        segmentB = new Segment(pathB, 8, 32);

// Expand the bar a bit
    function inB(s) { s.draw(8 - 6, 32 + 6, 0.1, {callback: function(){ inB2(s) }}); }

// Reduce with a bounce effect
    function inB2(s) { s.draw(8 + 12, 32 - 12, 0.3, {easing: ease.ease('bounce-out', 1, 0.3)}); }

// Run the animation
    function outAC(s) { s.draw('90% - 24', '90%', 0.1, {easing: ease.ease('elastic-in', 1, 0.3), callback: function(){ outAC2(s) }}); }
    function outAC2(s) { s.draw('20% - 24', '20%', 0.3, {callback: function(){ outAC3(s) }}); }
    function outAC3(s) { s.draw(8, 32, 0.7, {easing: ease.ease('elastic-out', 1, 0.3)}); }

    function outB(s) { s.draw(8, 32, 0.7, {delay: 0.1, easing: ease.ease('elastic-out', 2, 0.4)}); }

// Run the animations
    var trigger = document.getElementById('menu-icon-trigger'),
        toCloseIcon = true;

    $('.js-menu').click(function() {
        if (toCloseIcon) {
            inAC(segmentA);
            inB(segmentB);
            inAC(segmentC);
        } else {
            outAC(segmentA);
            outB(segmentB);
            outAC(segmentC);
        }
        toCloseIcon = !toCloseIcon;
        $('.b-nav_main').toggleClass('b-nav_main_active')
        $("html,body").toggleClass('i-overflow_hidden');
    });

    $('.js-login').click(function(e) {
        e.preventDefault();
        $('.b-portfolio').toggleClass('b-portfolio_delay').toggleClass('b-portfolio_animate');
    });

    $('#jspointclick').click(function(e) {
        // event.stopPropagation();
        e.stopPropagation();
        $('#jspointclick').toggleClass('b-blog-asid_openmpb');
    });

    var paral = $(".b-content-head_nohome");
    $(window).scroll(function() {
        var
            wScroll = $(window).scrollTop(),
            wHeigt = $(window).height(),
            pos = 50 + 0.9*(wScroll*100)/wHeigt;
            $(paral).css({
                'background-position-y': pos + '%',
                'transition': "all 0.1s",
                // 'background-size': "120%"
            });


    });

    //** Menu blog **//
    // var
    //     pointas = $("#jspoint"),
    //     hpointas = $("#jspoint").offset().top,
    //     aside = $(".js-aside");
    //     $(window).scroll(scrols);
    //     $(window).resize(scrols);
    //
    // function scrols() {
    //
    //     var
    //         aw = $("#jspoint").width(),
    //         aofl = $("#jspoint").offset().left,
    //         wScroll = $(window).scrollTop(),
    //         win_w = $(window).width();
    //     console.log(win_w);
    //     if ((wScroll >= hpointas) & (win_w > 767) ) {
    //
    //         if (!aside.hasClass('i-fix')) {
    //             console.log('win');
    //             aside.addClass('i-fix').css({
    //                 "top": 0,
    //                 "left": aofl,
    //                 "width": aw
    //             });
    //
    //         } else {
    //             aside.css({
    //                 "top": 0,
    //                 "left": aofl,
    //                 "width": aw
    //             });
    //         }
    //
    //
    //     } else {
    //         aside.removeClass('i-fix').removeAttr("style");
    //     }
    //
    //
    //
    // }
    $(window).scroll(function () {
        var wScroll = $(window).scrollTop();
        $("section.b-blog-sec").each(function () {
            if ( (wScroll >= $(this).offset().top) & (wScroll <= $(this).offset().top + $(this).height() )){
                console.log($(this));
            }
        });

    });

    //** SLIDER **//
    var
        btnlnk = $(".b-slider__item");

        $(btnlnk).on("click", function (e) {
            e.preventDefault();
            var link = $(this);
            var
                active = $(btnlnk).find(".b-slider__slid_active"),
                next = "";

            if ($(link).hasClass("b-slider__next")){

                $(active).each(function () {

                    if ( $(this).prev().length){

                        next = $(next).add( $(this).prev() );
                    } else {
                        next = $(next).add( $(this).parent().children().last() );
                    }

                });

            } else {
                $(active).each(function () {

                    if ( $(this).next().length){

                        next = $(next).add( $(this).next() );
                    } else {
                        next = $(next).add( $(this).parent().children().first() );
                    }

                });
            }
            $(active).removeClass('b-slider__slid_active');

            $(next).addClass("b-slider__slid_active");

            var bigActiv = $(".b-slider__item_big").find(".b-slider__slid_active .b-slider__img"),
                newTitle = $(bigActiv).data('title'),
                newTag = $(bigActiv).data('tag'),
                newLink = $(bigActiv).data('link'),
                tagstr = '',
                j = 0;

            for(var key in newTag) {
                tagstr += '<li class="b-tag-list__item"><a href="' + key + '" class="b-tag-list__link">' + animtext(newTag[key]) + '</a></li>';
                console.log(tagstr);
            };
            j = 0;
            $('#title').html(animtext(newTitle));
            $('#tag').html(tagstr);
            $('#link').attr('href', newLink);



            function animtext(str){
                var text = "";

                for(var i = 0; i < str.length; i++){
                    if(i==0){
                        text = "<span class='word'>";
                    };

                    text += "<span class='char' style='animation-delay: " + 0.05 * j + "s'>" + str[i] + "</span>";
                    if(str[i] == " " || str[i] == "&nbsp;"){
                        text += "</span><span class='letter'>&nbsp;</span><span class='word'>";
                    }
                    if(i == str.length-1) {
                        text += "</span>";
                    };
                    j += 1;
                }
                return text;

            }


        })

})();
