(function() {
    'use strict';

    $('.js-login').click(function(e) {
        e.preventDefault();
        $('.b-portfolio').toggleClass('b-portfolio_delay').toggleClass('b-portfolio_animate');
    });

    $('.js-menu').click(function(e) {
        e.preventDefault();
        $('#menu').toggleClass('b-nav_close');
    })
    $('.js-aside').click(function(e) {
        // event.stopPropagation();
        e.stopPropagation();
        console.log(e);
        $('.js-aside').toggleClass('b-blog-asid_openmpb');
    })
})();