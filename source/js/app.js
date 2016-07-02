(function() {
    'use strict';


    /*
    preloader
     */
    var numimg = 0;
    var qr;
    var cssUrlRegex = /url\(\s*(['"]?)(.*?)\1\s*\)/g;
    var images = new Array();
    var cssImageProps = [
        'background',
        'backgroundImage',
        'backgroundImage',
        'borderImage',
        'borderCornerImage',
        'listStyleImage',
        'cursor'
    ];


    function load(url) {
        return new Promise(function (resolve, reject) {
            var newimg = new Image();
            newimg.src = url;
            newimg.onload = function () {
                resolve();
            };
            newimg.onerror = function () {
                reject();
            };
        });
    };
    function getimg(url) {
        load(url).then(
            function () {
                timer();
            },
            function () {
                timer();
            }
        );
    };
    function repeatimg(url) {
        if ($.inArray(url, images) == -1) {
            getimg(url);
            images.push(url);
        };
    };

    $("*").each(function (i, e) {

        if ($(e).is('img') && $(e).attr("src")) {
            repeatimg($(e).attr("src"));
        };

        $.each(cssImageProps, function (i, property) {
            var propertyValue = $(e).css(property);
            var match;
            if (!propertyValue) {
                return true;
            }

            match = cssUrlRegex.exec(propertyValue);
            if (match) {
                repeatimg(match[2]);
            }
        });
    });
    function numAnimate(toNum,fromNum) {
        clearInterval(qr);
        qr = setInterval(function () {
            fromNum++;
            if (fromNum <= toNum) {
                $('.loader__text').text(fromNum);
            };
        }, 1);
    };
    function timer(){
        var persent;
        numimg = numimg + 1;
        persent = numimg * 70 / images.length;
        persent = persent + 30;
        persent = (persent-persent%1);
        var fromNum = $('.loader__text').text();

        if (numimg == 1 ){
            fromNum = 0;
        };
        if (persent == 100 ){
            clearInterval(qr);
            $('.loader__text').text('100');
            closepreloader();
        } else {
            numAnimate(persent,fromNum);
        };
    };
    function closepreloader() {
        $('.loader').delay(500).fadeOut();
        $('.b-portfolio_flipJS').delay(500).queue(function() {
            $(this).addClass('b-portfolio_flipin');

            $('.b-portfolio').delay(1500).queue(function() {
                $('.b-portfolio').removeClass('b-portfolio_flipin');
            });
        });

        $('body').removeClass('i-overflow_hidden');
    };


    /*
    login
     */


    $('.js-login').click(function(e) {
        e.preventDefault();
        $('.b-portfolio').removeClass('b-portfolio_flipin').delay(10).toggleClass('b-portfolio_delay').toggleClass('b-portfolio_animate');
    });

    /*
    menu svg
     */
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


    if ($('#jspointclick')){
        $('#jspointclick').click(function(e) {
            // event.stopPropagation();
            e.stopPropagation();
            $('#jspointclick').toggleClass('b-blog-asid_openmpb');
        });

    };
    var paral = $(".b-content-head_nohome");
    $(window).scroll(function() {
        var
            wScroll = $(window).scrollTop(),
            wHeigt = $(window).height(),
            pos = 50 + 0.1*(wScroll*100)/wHeigt;
        $(paral).css({
            'background-position-y': pos + '%',
            'transition': "all 0.1s",
            // 'background-size': "120%"
        });


    });
})();
