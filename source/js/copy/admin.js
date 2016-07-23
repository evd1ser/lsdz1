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


var files;

// Вешаем функцию на событие
// Получим данные файлов и добавим их в переменную

$('#workfile').change(function(){
    files = this.files;
});


$('#workload').click(function( event ){
    var $title = $('#worktitleadd').val(),
        $technologies = $('#worktechnologiesadd').val(),
        $link = $('#workurladd').val(),
        $okey = 1;

    if (!$title){
        $okey = $okey * 0;
    } else {
        $okey = $okey * 1;
    }
    if (!$technologies){
        $okey = $okey * 0;
    } else {
        $okey = $okey * 1;
    }
    if (!$link){
        $okey = $okey * 0;
    } else {
        $okey = $okey * 1;
    }
    if (!files){
        $okey = $okey * 0;
    } else {
        $okey = $okey * 1;
    }
    event.stopPropagation(); // Остановка происходящего
    event.preventDefault();  // Полная остановка происходящего

    // Создадим данные формы и добавим в них данные файлов из files
    if ($okey){
        var data = new FormData();
        $.each( files, function( key, value ){
            data.append( key, value );
        });
        // Отправляем запрос

        $.ajax({
            url: './work.loadfile.php?uploadfiles',
            type: 'POST',
            data: data,
            cache: false,
            dataType: 'json',
            processData: false, // Не обрабатываем файлы (Don't process the files)
            contentType: false, // Так jQuery скажет серверу что это строковой запрос
            success: function( respond, textStatus, jqXHR ){

                // Если все ОК

                if( typeof respond.error === 'undefined' ){
                    // Файлы успешно загружены, делаем что нибудь здесь

                    // выведем пути к загруженным файлам в блок '.ajax-respond'

                    var files_path = respond.files;

                    var $img = files_path[0];
                    var data2 = {

                        'title' : $title,
                        'technologies' : $technologies,
                        'link' : $link,
                        'img' : $img
                    };
                    data2 = JSON.stringify(data2);

                    $.ajax({
                        type: "POST",
                        url: "/work.class.php?addwork",
                        data: {
                            data: data2
                        }
                    }).done(function(result) {
                        alert(result);
                    });
                }
                else{
                    console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
                }
            },
            error: function( jqXHR, textStatus, errorThrown ){
                console.log('ОШИБКИ AJAX запроса: ' + textStatus );
            }
        });
    } else {
        alert('ОШИБКА, заполните все поля');
    }


});

$('#blogadd').click(function ( event ) {
    event.stopPropagation(); // Остановка происходящего
    event.preventDefault();  // Полная остановка происходящего
    var blogtitle = $('#blogtitle').val(),
        blogdate = $('#blogdate').val(),
        blogtext,
        $okey;
    if (!blogtitle){
        $okey = $okey * 0;
    } else {
        $okey = $okey * 1;
    }

    if (!blogdate){
        $okey = $okey * 0;
    } else {
        $okey = $okey * 1;
    }

    if (tinymce.activeEditor !== null) { // выход, если нет текущего активного редактора
        blogtext = tinyMCE.activeEditor.getContent();
    } else {
        blogtext = $('#blogtext').val();
    }
    if (!blogtext){
        $okey = $okey * 0;
    } else {
        $okey = $okey * 1;
    }

    if ($okey) {
        var data = {

            'title' : blogtitle,
            'blogdate' : blogdate,
            'blogtext' : blogtext
        };
        data = JSON.stringify(data);

        $.ajax({
            type: "POST",
            url: "/blog.class.php?addpost",
            data: {
                data: data
            }
        }).done(function(result) {
            alert(result);
        });
    }
});
