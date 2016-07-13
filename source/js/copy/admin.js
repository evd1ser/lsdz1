$('.js-tab').click(function (e) {
    e.preventDefault();
    var link = $(this),
        alllink = $('.js-tab');
        activtab = $('.tab_activ'),
        alltab = $('.tab');

    if ($(activtab)[0] == $(link.attr('href'))[0]){
        //
    } else {
        alllink.removeClass('tabcontrol__link_activ');
        link.addClass('tabcontrol__link_activ');

        alltab.removeClass('tab_activ');
        $(link.attr('href')).addClass('tab_activ');
    }
});