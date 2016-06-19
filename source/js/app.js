(function() {
    'use strict';

    $('#login').click(function(e) {
        e.preventDefault();
        $('.b-portfolio').toggleClass('b-portfolio_delay').toggleClass('b-portfolio_animate');
    });

    $('.js-menu').click(function(e) {
        e.preventDefault();
        $('#menu').toggleClass('b-nav_close');
    })
})();