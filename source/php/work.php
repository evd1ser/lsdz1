<?php
include_once('work.class.php');
$work = new Work();
$myworks = $work->get_works();
$links = '';
foreach ($myworks as $mywork){
    $works_title = $mywork[works_title];
    $works_technologies = $mywork[works_technologies];
    $works_link = $mywork[works_link];
    $works_img = "/uploads/" . $mywork[works_img];
    $links .= '<div class="b-slider__slid">
<img src="' . $works_img . '" alt="' . $works_title . '" data-tag="' . $works_technologies . '" data-link="' . $works_link . '" class="b-slider__img">
</div>';
}
?><!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <title>Мои работы</title>
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
        <li class="b-nav__item"><a href="/works.html" class="b-nav__link b-nav__link_activ">Мои работы</a>
        </li>
        <li class="b-nav__item"><a href="/blog.html" class="b-nav__link">Блог</a>
        </li>
        <li class="b-nav__item"><a href="/aboutme.html" class="b-nav__link">Обо мне</a>
        </li>
        <li class="b-nav__item"><a href="/login.html" class="b-nav__link">Авторизация</a></li>
    </ul>
</nav>
<div id="scrolltobtn"></div>
<div class="b-content-head">
    <main class="b-main b-main_nopad b-main-content b-main_noflex">
        <section class="i-clear i-text-center i-relat">
            <svg viewBox="0 0 100 100" preserveAspectRatio="none" class="i-topskat">
                <g>
                    <polygon points="50,100 100,0 100,100" class="i-topskat__item i-topskat__item_right"></polygon>
                </g>
                <g>
                    <polygon points="0,0 0,100 50,100" class="i-topskat__item i-topskat__item_left"></polygon>
                </g>
            </svg>
            <h2 class="b-title-h2 b-title-h2_works i-upper i-under i-under_h22 i-under_invers">Мои Работы</h2>
            <div id="sliderwork" class="i-h100">
                <div class="b-slider b-slider__main col-p-12 col-hd-6 i-col_flr_moby">
                    <div class="b-slider__item b-slider__item_big">
                        <?php echo $links; ?>
                    </div>
                </div>
                <div class="b-my-work col-p-12 col-hd-6 i-clear">
                    <div class="b-my-work__item center_flex">
                        <h2 id="title" class="b-my-work__title i-upper i-under i-under_invers"></h2>
                        <div class="b-my-work__tag">
                            <ul id="tag" class="b-tag-list">
                            </ul>
                        </div>
                        <div class="b-my-work__linkconteinet"><a id="link" href="#" class="b-my-work__link">Посмотреть сайт</a></div>
                    </div>
                </div>
                <div class="b-slider b-slider_nav col-p-12 col-hd-6 i-clear">
                    <a href="#" class="b-slider__item b-slider__item_small b-slider__next col-p-6">
                        <?php echo $links; ?>
                    </a>
                    <a href="#" class="b-slider__item b-slider__item_small b-slider__prev col-p-6">
                        <?php echo $links; ?>
                    </a></div>
            </div>
        </section>
        <section class="b-about i-clear i-text-center">
            <h2 class="b-title-h2 b-title-h2_about i-upper i-under i-under_invers"><span class="i-block">Что обо мне</span><span>говорят</span></h2>
            <div class="container i-clear">
                <div class="i-clear b-about-me-block">
                    <div class="b-about-me col-t-6 col-p-12">
                        <div class="b-imgcover b-imgcover_small"><img src="/assets/img/Layer-8.png" alt="Ковальчук Дмитрий" class="b-imgcover__avatar"></div>
                        <div class="b-about-me__comment">Этот парень проходил обучение веб-разработке не где-то, а в LoftSchool! 2 месяца только самых тяжелых испытаний и бессонных ночей!</div>
                        <div class="b-about-me__name">Ковальчук Дмитрий</div>
                        <div class="b-about-me__who">— основатель Loftschool</div>
                    </div>
                    <div class="b-about-me col-t-6 col-p-12">
                        <div class="b-imgcover b-imgcover_small"><img src="/assets/img/layer-9.png" alt="Зар Захаров" class="b-imgcover__avatar"></div>
                        <div class="b-about-me__comment">Этот код выдержет любые испытания. Только пожалуйста, не загружается сайт на слишком старых браузерах!</div>
                        <div class="b-about-me__name">Зар Захаров</div>
                        <div class="b-about-me__who">— главный преподаватель</div>
                    </div>
                </div>
                <div class="center_flex blur"><img src="/assets/img/bg-about_1.png" alt="" class="blur__img">
                    <div class="b-portfolio b-portfolio_tema_about">
                        <h2 class="b-title-h3 b-title-h3_col_darcm3 b-portfolio__name i-upper i-under i-under_col_darcm3 b-portfolio_tema_about__title">Связаться со мной</h2>
                        <form id="loginform" class="b-form-a b-form-about">
                            <div id="namegrup" class="b-formgrup">
                                <input id="name" type="text" placeholder="Имя" required class="b-form-a__input">
                            </div>
                            <div id="emailgrup" class="b-formgrup">
                                <input type="email" placeholder="Email" required class="b-form-a__input">
                            </div>
                            <div class="b-formgrup">
                                <textarea id="message" rows="5" placeholder="Ваше сообщение" required class="b-form-a__textarea"></textarea>
                            </div>
                            <div class="b-menu">
                                <button type="submit" class="b-menu__link js-submit_message">Отправить</button>
                                <button type="reset" class="b-menu__link">Очистить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="b-top"><a href="#scrolltobtn" class="b-top__link js-scrollto"><i aria-hidden="true" class="fa fa-chevron-up"></i><span class="sr-only">Наверх</span></a></div>
            <footer class="b-footer b-footer_nohome">
                <div class="b-footer__big i-clear">
                    <div class="b-footer_nohome__col1 b-footer__col col-pc-4 col-t-6 col-p-12 b-footer__text">
                        Этот сайт я сделал в рамках обучения
                        в Школе онлайн образования LoftSchool.
                    </div>
                    <div class="b-footer__col col-pc-4 col-t-6 col-p-12 b-footer_nohome__centerb">
                        <nav id="menu_footer" class="b-nav b-nav_footer">
                            <ul class="b-nav__list">
                                <li class="b-nav__item"><a href="/works.html" class="b-nav__link b-nav__link_activ">Мои работы</a>
                                </li>
                                <li class="b-nav__item"><a href="/blog.html" class="b-nav__link">Блог</a>
                                </li>
                                <li class="b-nav__item"><a href="/aboutme.html" class="b-nav__link">Обо мне</a>
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
        </section>
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

                text += '<span class="char" style="animation-delay: "' + 0.05 * j + 's">' + str[i] + '</span>';
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
<script>
    $(document).ready(function () {
        setBlur();
    });

    $(window).resize(function () {
        setBlur();
    });


    function setBlur() {
        var
            blur = $('.blur'),
            blurimg = $('.blur__img'),
            html = $('html'),
            bottomblur;

        bottomblur = blur.offset().top + blur.height() - html.height();
        blurimg.css({'bottom': bottomblur});
    }
</script>
</body>
</html>