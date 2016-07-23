<?php
include_once './about.class.php';
$skill = new Skill();
$skills = $skill->getskill();


$HTML5 = skill_persent($skills->Frontend->HTML5);
$CSS3 = skill_persent($skills->Frontend->CSS3);
$JS = skill_persent($skills->Frontend->JS);
$PHP = skill_persent($skills->Backend->PHP);
$mySQL = skill_persent($skills->Backend->mySQL);
$Node = skill_persent($skills->Backend->Node);
$Mong = skill_persent($skills->Backend->Mong);
$Git = skill_persent($skills->WorkFlow->Git);
$Gulp = skill_persent($skills->WorkFlow->Gulp);
$Bower = skill_persent($skills->WorkFlow->Bower);


    function skill_persent($persent) {
        $all = 50*3.14;
        return ((100-$persent)*2/100)*$all;
    }
?><!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="utf-8">
    <title>Обо мне</title>
    <meta content="Evdokimov Sergey" name="author">
    <meta content="Мой личный сайт" name="description">
    <meta content="site, evd1ser, программист, разработчик, дизайнер" name="keywords">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <script src="/assets/js/ease.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/foundation.css">
    <link rel="icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <script src="/assets/js/segment.min.js" defer></script>
    <script src="/assets/js/app.js" defer></script><!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
    <link rel="stylesheet" href="/assets/css/app.css">
    <style>
        .b-diagram__html {
            stroke-dashoffset: <?= $HTML5 ?>; }
        .b-diagram__css {
            stroke-dashoffset: <?= $CSS3 ?>; }
        .b-diagram__js {
            stroke-dashoffset: <?= $JS ?>; }
        .b-diagram__php {
            stroke-dashoffset: <?= $PHP ?>; }
        .b-diagram__mySQL {
            stroke-dashoffset: <?= $mySQL ?>; }
        .b-diagram__nodejs {
            stroke-dashoffset: <?= $Node ?>; }
        .b-diagram__mongo {
            stroke-dashoffset: <?= $Mong ?>; }
        .b-diagram__git {
            stroke-dashoffset: <?= $Git ?>; }
        .b-diagram__gulp {
            stroke-dashoffset: <?= $Gulp ?>; }
        .b-diagram__bower {
            stroke-dashoffset: <?= $Bower ?>; }
    </style>
</head>
<body class="i-overflow_hidden">
<div class="loader">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="120px" height="95.113px" viewbox="0 0 80 95.113" enable-background="new 0 0 80 95.113" xml:space="preserve" class="loader__svg">
        <g>
            <path fill="none" stroke="#231F20" stroke-width="3.9003" stroke-miterlimit="10" d="M0,38.005c6.663,0,6.663,7.801,13.327,7.801c6.665,0,6.665-7.801,13.33-7.801c6.667,0,6.667,7.801,13.334,7.801c6.666,0,6.666-7.801,13.331-7.801c6.67,0,6.67,7.801,13.339,7.801S73.33,38.005,80,38.005" class="loader__path loader__path_1"></path>
        </g>
        <g>
            <path fill="none" stroke="#231F20" stroke-width="3.9003" stroke-miterlimit="10" d="M0,61.684c6.663,0,6.663,7.801,13.327,7.801c6.665,0,6.665-7.801,13.33-7.801c6.667,0,6.667,7.801,13.334,7.801c6.666,0,6.666-7.801,13.331-7.801c6.67,0,6.67,7.801,13.339,7.801S73.33,61.684,80,61.684" class="loader__path loader__path_2"></path>
        </g>
        <g>
            <path fill="none" stroke="#231F20" stroke-width="3.9003" stroke-miterlimit="10" d="M0,85.362c6.663,0,6.663,7.801,13.327,7.801                  c6.665,0,6.665-7.801,13.33-7.801c6.667,0,6.667,7.801,13.334,7.801c6.666,0,6.666-7.801,13.331-7.801                  c6.67,0,6.67,7.801,13.339,7.801S73.33,85.362,80,85.362" class="loader__path loader__path_3"></path>
        </g>
        <text transform="matrix(1 0 0 1 40 20)" font-family="'ArialMT'" font-size="24" text-anchor="middle" class="loader__text">Загрузка...</text>
      </svg>
</div>
<div class="b-content-head b-content-head_bgmain b-content-head_nohome">
    <!--[if lt IE 7]>
    <p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/">обновите его</a></p>
    <![endif]-->
    <header class="i-clear b-header b-header_text-right i-abs-top">
        <ul class="b-icongrup i-float_left">
            <li class="b-icongrup__item"><a href="http://vk.com/evd1ser" target="_blank" class="b-icongrup__icon b-icongrup__icon_opaciy"><i aria-hidden="true" class="fa fa-vk"></i><span class="sr-only">vkontakte</span></a></li>
            <li class="b-icongrup__item"><a href="https://github.com/evd1ser" target="_blank" class="b-icongrup__icon b-icongrup__icon_opaciy"><i aria-hidden="true" class="fa fa-github-alt"></i><span class="sr-only">github</span></a></li>
            <li class="b-icongrup__item"><a href="https://www.linkedin.com/in/evd1ser" target="_blank" class="b-icongrup__icon b-icongrup__icon_opaciy"><i aria-hidden="true" class="fa fa-linkedin"></i><span class="sr-only">linkedin</span></a></li>
        </ul><a id="menubtn" href="#menu" class="b-header__menu-btn js-menu">
            <svg width="5rem" viewBox="0 0 100 100" class="svg-menu">
                <path id="pathA" d="M 30 40 L 70 40 C 90 40 90 80 60 85 A 40 40 0 0 1 20 20 L 80 80" class="svg-menu__path svg-menu__path_1"></path>
                <path id="pathB" d="M 30 50 L 70 50" class="svg-menu__path svg-menu__path_2"></path>
                <path id="pathC" d="M 70 60 L 30 60 C 10 60 10 20 40 15 A 40 40 0 1 1 20 80 L 80 20" class="svg-menu__path svg-menu__path_3"></path>
            </svg></a>
    </header>
    <div class="b-main b-main_portfolio">
        <div class="center_flex">
            <div class="b-portfolio b-portfolio_tema_forest b-portfolio_no-bg">
                <div class="b-imgcover"><img src="/assets/img/avatar.png" alt="Евдокимов Сергей" class="b-imgcover__avatar"></div>
                <h1 class="b-portfolio__name">Евдокимов Сергей</h1><span class="b-portfolio__litteltext">Личный сайт веб разработчика</span>
            </div>
        </div>
        <div class="b-bottom"><a href="#scrolltobtn" class="b-bottom__link js-scrollto"><i aria-hidden="true" class="fa fa-chevron-down"></i><span class="sr-only">Смотри ниже ;)</span></a></div>
    </div>
</div>
<nav id="menu" class="b-nav b-nav_main">
    <ul class="b-nav__list">
        <li class="b-nav__item"><a href="/works.html" class="b-nav__link">Мои работы</a>
        </li>
        <li class="b-nav__item"><a href="/blog.html" class="b-nav__link">Блог</a>
        </li>
        <li class="b-nav__item"><a href="/aboutme.html" class="b-nav__link b-nav__link_activ">Обо мне</a>
        </li>
        <li class="b-nav__item"><a href="/login.html" class="b-nav__link">Авторизация</a></li>
    </ul>
</nav>
<div id="scrolltobtn"></div>
<div class="b-content-head i-relat">
    <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="i-topskat">
        <g>
            <polygon points="50,100 100,0 100,100" class="i-topskat__item i-topskat__item_right i-topskat__item_right_about"></polygon>
        </g>
        <g>
            <polygon points="0,0 0,100 50,100" class="i-topskat__item i-topskat__item_left i-topskat__item_left_about"></polygon>
        </g>
    </svg>
    <main class="b-main b-main_nopad b-main-content b-main_noflex">
        <section class="b-pabout i-clear">
            <div class="b-pabout__story col-hd-6 col-pc-6 col-p-12">
                <div class="col-xhd-6 col-p-12">
                    <h2 class="b-title-h2 b-title-h2_about i-text-center i-upper i-under i-under_invers">Обо мне</h2>
                </div>
                <div class="col-xhd-6 col-p-12">
                    <div class="b-imgcover b-imgcover_sqrt"><img src="/assets/img/avatar.png" alt="Евдокимов Сергей" class="b-imgcover__avatar"></div>
                    <h3 class="b-pabout__title b-title-h3 b-title-h3_col_darcm3 i-under i-under_col_darcm3 i-text-center">Кто я</h3>
                    <p class="b-pabout__text">
                        Я веб разработчик из Москвы. Мне 20 лет. Я занимаюсь разработкой современных сайтов и приложений. Мне нравится делать интересные и современные проекты.
                        Этот сайт я сделал в рамках обучения в Школе онлайн образования LoftSchool. Чуть позже я освежу в нём свой контент. А пока посмотрите, как тут всё классно и красиво!
                    </p>
                </div>
            </div>
            <div class="b-pabout__skill b-skill col-hd-6 col-pc-6 col-p-12">
                <div class="col-p-12">
                    <h3 class="b-pabout__titlestat b-title-h3 b-title-h3_col_darcm3 i-under i-under_sm i-under_col_darcm3 i-text-center">
                        Чем я могу быть
                        вам полезен
                    </h3>
                </div>
                <div class="col-p-12">
                    <p class="b-pabout__text">Больше всего меня привлекет Frontend разработка, но я также знаком и могу решать не сложные задачи на Backend. Но давайте по порядку.</p>
                </div>
                <div class="col-p-12">
                    <h4 class="b-skill__title">Frontend</h4>
                    <ul class="b-diagram">
                        <li class="b-diagram__item b-diagram__item_type1">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__html"></circle>
                                <text x="55" y="50%" class="b-diagram__text">HTML5</text>
                            </svg>
                        </li>
                        <li class="b-diagram__item b-diagram__item_type1">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__css"></circle>
                                <text x="55" y="50%" class="b-diagram__text">CSS3</text>
                            </svg>
                        </li>
                        <li class="b-diagram__item b-diagram__item_type1">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__js"></circle>
                                <text x="55" y="50%" class="b-diagram__text">
                                    <tspan x="55" y="50">JavaScript</tspan>
                                    <tspan x="55" y="65">& jQuery</tspan>
                                </text>
                            </svg>
                        </li>
                    </ul>
                </div>
                <div class="col-p-12">
                    <h4 class="b-skill__title">Backend</h4>
                    <ul class="b-diagram">
                        <li class="b-diagram__item b-diagram__item_type2">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__fillcircle_type2 b-diagram__php"></circle>
                                <text x="55" y="50%" class="b-diagram__text">PHP</text>
                            </svg>
                        </li>
                        <li class="b-diagram__item b-diagram__item_type2">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__fillcircle_type2 b-diagram__mySQL"></circle>
                                <text x="55" y="50%" class="b-diagram__text">mySQL</text>
                            </svg>
                        </li>
                        <li class="b-diagram__item b-diagram__item_type2">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__fillcircle_type2 b-diagram__nodejs"></circle>
                                <text x="55" y="50%" class="b-diagram__text">
                                    <tspan x="55" y="50">Node.js</tspan>
                                    <tspan x="55" y="65">& npm</tspan>
                                </text>
                            </svg>
                        </li>
                        <li class="b-diagram__item b-diagram__item_type2">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__fillcircle_type2 b-diagram__mongo"></circle>
                                <text x="55" y="50%" class="b-diagram__text">Mongo.db</text>
                            </svg>
                        </li>
                    </ul>
                </div>
                <div class="col-p-12">
                    <h4 class="b-skill__title">WorkFlow</h4>
                    <ul class="b-diagram">
                        <li class="b-diagram__item b-diagram__item_type3">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__fillcircle_type3 b-diagram__git"></circle>
                                <text x="55" y="50%" class="b-diagram__text">Git</text>
                            </svg>
                        </li>
                        <li class="b-diagram__item b-diagram__item_type3">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__fillcircle_type3 b-diagram__gulp"></circle>
                                <text x="55" y="50%" class="b-diagram__text">Gulp</text>
                            </svg>
                        </li>
                        <li class="b-diagram__item b-diagram__item_type3">
                            <svg viewBox="-5 -5 120 120" class="b-diagram__svg">
                                <circle r="50" cx="55" cy="55" class="b-diagram__circle b-diagram__nullcircle"></circle>
                                <circle r="50" cx="55" cy="55" transform="rotate(-90, 55, 55)" class="b-diagram__circle b-diagram__fillcircle b-diagram__fillcircle_type3 b-diagram__bower"></circle>
                                <text x="55" y="50%" class="b-diagram__text">Bower</text>
                            </svg>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="b-content-head b-map">
            <div id="map" class="b-map__mymap"></div>
            <div class="b-main b-main_tema-map i-clear">
                <div class="center_flex">
                    <div class="b-portfolio b-portfolio_tema_map">
                        <div class="b-portfolio__name b-portfolio__name_col_darcm3 i-upper i-under i-under_col_darcm3">Контакты</div>
                        <ul class="b-map__list">
                            <li class="b-map__item"><a href="skype:evd1ser" target="blank" class="b-map__link b-map__link_skype">evd1ser</a></li>
                            <li class="b-map__item"><a href="mailto:evd1ser@gmail.com" target="blank" class="b-map__link b-map__link_email">evd1ser@gmail.com</a></li>
                            <li class="b-map__item"><a href="tel:evd1ser@gmail.com" target="blank" class="b-map__link b-map__link_tel">+7 (999) 831-22-50</a></li>
                            <li class="b-map__item"><a href="https://www.google.ru/maps/place/55%C2%B047'14.9%22N+37%C2%B041'00.2%22E/@55.787487,37.6812083,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d55.787484!4d37.683397" target="blank" class="b-map__link b-map__link_map">Москва, ул 2-я Сокольническая</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <footer class="b-footer b-footer_nohome">
                <div class="b-footer__big i-clear">
                    <div class="b-footer_nohome__col1 b-footer__col col-pc-4 col-t-6 col-p-12 b-footer__text">
                        Этот сайт я сделал в рамках обучения
                        в Школе онлайн образования LoftSchool.
                    </div>
                    <div class="b-footer__col col-pc-4 col-t-6 col-p-12 b-footer_nohome__centerb">
                        <nav id="menu_footer" class="b-nav b-nav_footer">
                            <ul class="b-nav__list">
                                <li class="b-nav__item"><a href="/works.html" class="b-nav__link">Мои работы</a>
                                </li>
                                <li class="b-nav__item"><a href="/blog.html" class="b-nav__link">Блог</a>
                                </li>
                                <li class="b-nav__item"><a href="/aboutme.html" class="b-nav__link b-nav__link_activ">Обо мне</a>
                                </li>
                                <li class="b-nav__item"><a href="/login.html" class="b-nav__link">Авторизация</a></li>
                            </ul>
                        </nav>
                        <ul class="b-icongrup b-icongrup_maringtb b-footer_nohome__icon">
                            <li class="b-icongrup__item"><a href="http://vk.com/evd1ser" target="_blank" class="b-icongrup__icon b-icongrup__icon_opaciy"><i aria-hidden="true" class="fa fa-vk"><span class="sr-only">vkontakte</span></i></a></li>
                            <li class="b-icongrup__item"><a href="https://github.com/evd1ser" target="_blank" class="b-icongrup__icon b-icongrup__icon_opaciy"><i aria-hidden="true" class="fa fa-github-alt"><span class="sr-only">github</span></i></a></li>
                            <li class="b-icongrup__item"><a href="https://www.linkedin.com/in/evd1ser" target="_blank" class="b-icongrup__icon b-icongrup__icon_opaciy"><i aria-hidden="true" class="fa fa-linkedin"><span class="sr-only">linkedin</span></i></a></li>
                        </ul>
                    </div>
                    <div class="b-footer__text b-footer__col col-pc-4 col-p-12">
                        <div class="b-footer__blockquote">
                            <div class="b-footer__bqtext">Всегда пишите код так, будто сопровождать его будет склонный к насилию психопат, который знает, где вы живете.</div><span class="b-footer__who">— Martin Golding</span>
                        </div>
                    </div>
                </div>
                <div class="b-footer__small"><span class="b-footer_line">© Евдокимов Сергей</span><span>Создано с любовью в LoftSchool | 2016</span></div>
            </footer>
        </div>
    </main>
</div>
<script>
    (function() {
        var j = 0;
        function sliderinit() {
            var $prev = $('.b-slider__prev').children().first().next().addClass('b-slider__slid_active'),
                $next = $('.b-slider__next').children().last().addClass('b-slider__slid_active'),
                $main = $('.b-slider__item_big').children().first();
            $main.addClass('b-slider__slid_active');
            addmain($main.children().first());
        }
        function animtext(str) {
            var text = "";

            for (var i = 0; i < str.length; i++) {
                if (i == 0) {
                    text = "<span class='word'>";
                }
                ;

                text += "<span class='char' style='animation-delay: " + 0.05 * j + "s'>" + str[i] + "</span>";
                if (str[i] == " " || str[i] == "&nbsp;") {
                    text += "</span><span class='letter'>&nbsp;</span><span class='word'>";
                }
                if (i == str.length - 1) {
                    text += "</span>";
                }
                ;
                j += 1;
            }
            return text;

        }
        function addmain(bigActiv) {
            var newTitle = $(bigActiv).attr('alt'),
                newTag = $(bigActiv).data('tag'),
                newLink = $(bigActiv).data('link');

            j = 0;

            console.log(newTag);
            $('#title').html(animtext(newTitle));
            $('#tag').html(animtext(newTag));
            $('#link').attr('href', newLink);

        }


        //** SLIDER **//
        var
            btnlnk = $(".b-slider__item");
        if ($(btnlnk)) {
            sliderinit();
        }
        $(btnlnk).on("click", function (e) {
            e.preventDefault();
            var link = $(this);
            var
                active = $(btnlnk).find(".b-slider__slid_active"),
                next = "";

            if ($(link).hasClass("b-slider__next")) {

                $(active).each(function () {

                    if ($(this).prev().length) {

                        next = $(next).add($(this).prev());
                    } else {
                        next = $(next).add($(this).parent().children().last());
                    }

                });

            } else {
                $(active).each(function () {

                    if ($(this).next().length) {

                        next = $(next).add($(this).next());
                    } else {
                        next = $(next).add($(this).parent().children().first());
                    }

                });
            }
            $(active).removeClass('b-slider__slid_active');

            $(next).addClass("b-slider__slid_active");

            var bigActiv = $(".b-slider__item_big").find(".b-slider__slid_active .b-slider__img");

            addmain(bigActiv);




        });
    })();
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 14,
            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(55.78580095546115, 37.67971631182753),

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        },
                        {
                            "color": "#566358"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#6c9c5a"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(55.787438, 37.683427),
            map: map,
            title: 'Сергей Евдокимов!'
        });
    }
</script>
</body>
</html>