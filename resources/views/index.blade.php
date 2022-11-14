<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Site Metas -->
    <title>Rebar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="muhiddinovich">
    <!-- Site Icons -->
    {{--    <link rel="shortcut icon" href="{{ asset("images/favicon.ico.png") }}" type="image/x-icon"/>--}}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="{{ asset("css/colors.css") }}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{ asset("css/versions.css") }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset("css/responsive.css") }}">
    <!-- building CSS -->
    <link rel="stylesheet" href="{{ asset("css/building.css") }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="building_version" data-spy="scroll" data-target=".header">
<!-- LOADER -->
<div id="preloader">
    <img class="preloader" src="{{ asset("images/loaders/loader-building2.gif") }}" alt="">
</div>
<!-- end loader -->
<!-- END LOADER -->
<header class="header header_style_01">
    <nav class="megamenu navbar navbar-default" data-spy="affix">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-hidden">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-hidden">
                            <div class="gem-contacts-item gem-contacts-phone">
                                <a class="phone-icon" href="#" target="_blank" title="phone">
                                    <i
                                        class="fa fa-phone"
                                        aria-hidden="true"
                                    >
                                    </i>
                                    {{--                                    +1 999-888-77-66--}}
                                </a>
                            </div>
                        </div>
                        <div class="top-area-block top-area-socials socials-colored-hover">
                            <div class="socials inline-inside">
                                <a
                                    class="socials-item"
                                    href="https://www.facebook.com/profile.php?id=100087992041614"
                                    target="_blank"
                                    title="facebook"
                                >
                                    <i
                                        class="fa fa-facebook"
                                        aria-hidden="true"
                                    >
                                    </i>
                                </a>
                                <a
                                    class="socials-item"
                                    href="#"
                                    target="_blank"
                                    title="instagram"
                                >
                                    <i
                                        class="fa fa-instagram"
                                        aria-hidden="true"
                                    >
                                    </i>
                                </a>

                                <a
                                    class="socials-item"
                                    href="#"
                                    target="_blank"
                                    title="telegram"
                                >
                                    <i
                                        class="fa fa-telegram"
                                        aria-hidden="true"
                                    >
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route("main") }}">
                    {{--                    <img--}}
                    {{--                        src="{{ asset("images/logo-icon.png") }}"--}}
                    {{--                        alt="image">--}}
                    <span>LI DA Steel</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a data-scroll href="#home">Главная</a></li>
                    <li><a data-scroll href="#about">О нас</a></li>
                    <li><a data-scroll href="#services">Сертификаты</a></li>
                    <li><a data-scroll href="#projects">Наши продукты</a></li>
                    <li><a data-scroll href="#testimonials">Биржевые котировки</a></li>
                    <li><a data-scroll href="#price">Прайсинг</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div
    id="home"
    class="parallax first-section"
    data-stellar-background-ratio="0.4"
    style="background-image:url('{{ asset("images/background_3.jpg") }}');"
>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-offset-2 text-center">
                <div class="big-tagline">
                    <img
                        class="border-line-img"
                        src="{{ asset("uploads/building/sep-line-white.png") }}"
                        alt=""
                    />
                    <h2><span class="yellow">LI DA Steel</span></h2>
                    <img
                        style="margin-bottom:40px;"
                        class="border-line-img"
                        src="{{ asset("uploads/building/sep-line-white.png") }}"
                        alt=""/>
                    <p
                        class="lead"
                    >
                        СП ООО «LI DA METAL TECHNOLOGY» было основано в 2017 году и зарегистрирована в едином реестре
                        предприятий.
                    </p>
                    <a
                        data-scroll
                        href="#services"
                        class="btn btn-light btn-radius btn-brd"
                    >
                        Сертификаты
                    </a>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end section -->

<div id="about" class="section wb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="message-box">
                    <h2>О нас</h2>
                    {{--                    <h5>МЫ - ЛИДЕРЫ В СТРОИТЕЛЬНОЙ ИНДУСТРИИ!</h5>--}}
                </div>
                <!-- end messagebox -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="message-box">
                    <p class="lead" style="color: black">
                        Компания СП ООО «LI DA METAL TECHNOLOGY» начала свою деятельность в 2018 году.
                        Годовая производственная мощность предприятия составляет 200 тыс. тн. готовой продукции.
                        <span id="dots"></span>
                        <span id="more" style="display: none">
                            СП ООО «LI DA METAL TECHNOLOGY»   было основано в 2017 году и зарегистрирована в едином реестре предприятий Республики 24 августа 2017 года за номером №539506. Компания была запущена в 2018 году и являлась частным предприятием ИП ООО «LI DA METAL TECHNOLOGY», со 100% долей иностранных инвесторов в уставном фонде до января 2022 года (иностранным инвестором проекта выступала китайская компания «Jiangsu Huaiye Technology Development Co. Ltd.»)
Годовая производственная мощность предприятия составляет 200 тыс. тн. готовой продукции. Ввод производства в эксплуатацию состоялся в 2020 году.
В связи с проведенными реформами, направленными на развитие черной металлургии в Республике Узбекистан с 27 января 2022 года, компания изменила свою форму деятельности с частного предприятия на совместное предприятие, после приобретения Акционерным обществом «Узбекский металлургический комбинат» доли в размере 51% от уставного фонда предприятия. Таким образом, компания поменяла форму деятельности с ИП на СП и стала именоваться СП ООО «LI DA METAL TECHNOLOGY».
В компании работает свыше 700 человек.
СП ООО «LI DA METAL TECHNOLOGY» активно развивает кооперационные связи с предприятиями Республики, а также с предприятиями малого бизнеса и частного предпринимательства, создает новые рабочие места, вносит значительный вклад в развитие социальной инфраструктуры г. Ахангаран и Ахангаранской области.
В состав металлургического комплекса входят:
- участок ИКМ для приемки и перерабки лома и отходов черных металлов;
- сталеплавильный цех;
- прокатный цех;
- ремонтно-механический цех;
- кислородно-компрессорный цех (производство жидкого кислорода с чистотой свыше 99,6%);
- электроподстанция;
- участок водоочистки и водоподготовки;
- рентгено-спектральная и физико-механическая лаборатории;
- Автотранспортный участок и тд.
Основным видом деятельность СП ООО «LI DA METAL TECHNOLOGY»  является литье стали для производства термоупрочнённой арматуры строительного назначения диаметром от 10 до 25 мм классов прочности А400 и А500 по ГОСТ34028-2016.
                        </span>
                    </p>
                    <a id="myBtn" class="read-more" onclick="myFunction()">Читать подробно</a>
                </div>
                <!-- end messagebox -->
            </div>
        </div>
        <div class="row text-center about-row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{ asset("images/image_5.jpg") }}" data-rel="prettyPhoto[gal]"
                               class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img
                                src="{{ asset("images/image_5.jpg") }}"
                                alt=""
                                class="img-responsive img-rounded"
                            >
                        </div>
                    </div>
                    <!-- end service -->
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{ asset("images/background_3.jpg") }}" data-rel="prettyPhoto[gal]"
                               class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img
                                src="{{ asset("images/background_3.jpg") }}"
                                alt=""
                                class="img-responsive img-rounded"
                            >
                        </div>
                    </div>
                    <!-- end service -->
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{ asset("images/background_4.jpg") }}" data-rel="prettyPhoto[gal]"
                               class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="{{ asset("images/background_4.jpg") }}" alt="" class="img-responsive img-rounded">
                        </div>
                    </div>
                    <!-- end service -->
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <div class="sep1"></div>
</div>
<!-- end section -->
<div id="services" class="parallax section db parallax-off no-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div style="margin-bottom: 0" class="message-box">
                    <h2>Сертификаты</h2>
                </div>
            </div>
        </div>
        <div class="row text-center about-row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{ asset("images/certificate_1.jpg") }}" data-rel="prettyPhoto[gal]"
                               class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img
                                style="height: 380px;"
                                src="{{ asset("images/certificate_1.jpg") }}"
                                alt=""
                                class="img-responsive img-rounded"
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{ asset("images/certificate_2.jpg") }}" data-rel="prettyPhoto[gal]"
                               class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img
                                style="height: 380px;"
                                src="{{ asset("images/certificate_2.jpg") }}"
                                alt=""
                                class="img-responsive img-rounded"
                            >
                        </div>
                    </div>
                    <!-- end service -->
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="service-widget">
                        <div class="post-media wow fadeIn">
                            <a href="{{ asset("images/certificate_3.jpg") }}" data-rel="prettyPhoto[gal]"
                               class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img
                                style="height: 380px;"
                                src="{{ asset("images/certificate_3.jpg") }}"
                                alt=""
                                class="img-responsive img-rounded"
                            >
                        </div>
                    </div>
                    <!-- end service -->
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 serv" style="background-color:#222;">--}}
    {{--                <div class="serv-blog">--}}
    {{--                    <img src="{{ asset("images/sr1.png") }}" alt="#"/>--}}
    {{--                </div>--}}
    {{--                <div class="serv-blog-cont">--}}
    {{--                    <h3>Manufacturing</h3>--}}
    {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper--}}
    {{--                        mattis, pulvinar dapibus leo.</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv" style="background:#181818;">--}}
    {{--                <div class="serv-blog">--}}
    {{--                    <img src="{{ asset("images/sr2.png") }}" alt="#"/>--}}
    {{--                </div>--}}
    {{--                <div class="serv-blog-cont">--}}
    {{--                    <h3>Fabrication</h3>--}}
    {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper--}}
    {{--                        mattis, pulvinar dapibus leo.</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv" style="background:#222;">--}}
    {{--                <div class="serv-blog">--}}
    {{--                    <img src="{{ asset("images/sr3.png") }}" alt="#"/>--}}
    {{--                </div>--}}
    {{--                <div class="serv-blog-cont">--}}
    {{--                    <h3>Construction</h3>--}}
    {{--                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper--}}
    {{--                        mattis, pulvinar dapibus leo.</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</div>
<!-- end section -->
<div id="projects" class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="message-box">
                    <h2>Наши продукты</h2>
                    <h5> - Арматура класса A400(B400B)</h5>
                    <h5> - Арматура класса A500(B500B)</h5>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="container gal-container">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="{{ asset("images/background_1.jpg") }}" alt="#"/>
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset("images/background_1.jpg") }}" alt="background_1"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="{{ asset("images/image_3.jpg") }}" alt="#"/>
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset("images/image_3.jpg") }}" alt="#"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="{{ asset("images/background_4.jpg") }}" alt="#"/>
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset("images/background_4.jpg") }}" alt="#"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="{{ asset("images/image_4.jpg") }}" alt="image_1"/>
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset("images/image_4.jpg") }}" alt="image_1"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="{{ asset("images/image_2.jpg") }}" alt="image_2"/>
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="{{ asset("images/image_2.jpg") }}" alt="image_2"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section -->
<div id="testimonials" class="section db">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <h3>Биржевые котировки</h3>
            </div>
            <!-- end col -->
        </div>
        <!-- end title -->
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h5 style="color: white;">Узметкомбинат (Бекабад)</h5>
                <table class="table">
                    <thead>
                    <tr style="color: white">
                        <th scope="col">Номер конракта</th>
                        <th scope="col">диаметр арматуры</th>
                        <th scope="col">класс арматуры</th>
                        <th scope="col">цена мин.</th>
                        <th scope="col">цена макс</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="color: white">
                        <th scope="row">56013</th>
                        <th>10</th>
                        <th>A500</th>
                        <th>8.655.000</th>
                        <th>8.656.000</th>
                    </tr>
                    <tr style="color: white">
                        <th scope="row">3939</th>
                        <th>12</th>
                        <th>A400</th>
                        <th>8.751.000</th>
                        <th>8.777.000</th>
                    </tr>
                    <tr style="color: white">
                        <th scope="row">56012</th>
                        <th>12</th>
                        <th>A500</th>
                        <th>8.668.000</th>
                        <th>8.674.000</th>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6 col-sm-12">
                <h5 style="color: white">СП ООО LI DA Metal Technology</h5>
                <table class="table">
                    <thead>
                    <tr style="color: white">
                        <th>Номер конракта</th>
                        <th>диаметр арматуры</th>
                        <th>класс арматуры</th>
                        <th>цена мин.</th>
                        <th>цена макс</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr style="color: white">
                        <th>55575</th>
                        <th>12</th>
                        <th>A400</th>
                        <th>не продано</th>
                        <th>не продано</th>
                    </tr>
                    <tr style="color: white">
                        <th>55575</th>
                        <th>12</th>
                        <th>A400</th>
                        <th>не продано</th>
                        <th>не продано</th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end section -->
<div id="price" class="section pr">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="tab-pane active fade in" id="tab1">
                        <div class="row text-center" style="display: flex; justify-content: center;">
                            <div class="col-md-6">
                                <div class="pricing-table pricing-table-highlighted">
                                    <div class="pricing-table-header grd1">
                                        <h2>WordPress Hosting</h2>
                                        <h3>$59/year</h3>
                                    </div>
                                    <div class="pricing-table-space"></div>
                                    <div class="pricing-table-text">
                                        <p>This is a perfect choice for small businesses and startups.</p>
                                    </div>
                                    <div class="pricing-table-features">
                                        <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                        <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                        <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                        <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                        <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                    </div>
                                    <div class="pricing-table-sign-up">
                                        <a href="#contact" data-scroll=""
                                           class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--<div id="contact" class="section wb">--}}
{{--    <div class="container">--}}
{{--        <div class="section-title row text-center">--}}
{{--            <div class="col-md-8 col-md-offset-2">--}}
{{--                <h3>Наши контакты</h3>--}}
{{--            </div>--}}
{{--            <!-- end col -->--}}
{{--        </div>--}}
{{--        <!-- end title -->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-12 col-md-12">--}}
{{--                <div class="contant-info">--}}
{{--                    <ul >--}}
{{--                        <li>--}}
{{--                            <div class="info-shape accent-color background fs-23">--}}
{{--                                <div class="icon"><i class="fa fa-home"></i></div>--}}
{{--                            </div>--}}
{{--                            <div class="info-content">--}}
{{--                                <h6 class="uppercase"> Address:</h6>--}}
{{--                                <p> 1010 Berkler avenue, Brooklyn New York City, NY 10018 US</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="info-shape accent-color background fs-23">--}}
{{--                                <div class="icon"><i class="fa fa-volume-control-phone"></i></div>--}}
{{--                            </div>--}}
{{--                            <div class="info-content">--}}
{{--                                <h6 class="uppercase"> Phone No:</h6>--}}
{{--                                <p> +212 386 5575<br>+212 386 5575</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="info-shape accent-color background fs-23">--}}
{{--                                <div class="icon"><i class="fa fa-envelope-o"></i></div>--}}
{{--                            </div>--}}
{{--                            <div class="info-content">--}}
{{--                                <h6 class="uppercase"> Email Address:</h6>--}}
{{--                                <p>Demo@gmail.com</p>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</div>--}}
<!-- end section -->
<!-- footer -->
<footer id="footer">
    <div id="footer-widgets" class="container style-1">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_text">
                    <h2 class="widget-title"><span>О нас</span></h2>
                    <div class="textwidget">
                        <a
                            class="navbar-brand"
                            href="{{ route("main") }}"
                        >
                            <img src="{{ asset("images/logo-icon.png") }}"
                                 alt="image"
                            >
                            <span>
                                Rebar
                            </span>
                        </a>
                        <p>СП ООО «LI DA METAL TECHNOLOGY» было основано в 2017 году и зарегистрирована в
                            едином реестре предприятий.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_links">
                    <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                    <ul class="wprt-links clearfix col2">
                        <li><a data-scroll="" href="#home">Главная</a></li>
                        <li><a data-scroll="" href="#about">О нас</a></li>
                        <li><a data-scroll="" href="#services">Сертификаты</a></li>
                        <li><a data-scroll="" href="#projects">Наши продукты</a></li>
                        <li><a data-scroll="" href="#testimonials">Биржевые котировки</a></li>
                        <li><a data-scroll="" href="#price">Прайсинг</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget widget_information">
                    <h2 class="widget-title"><span>Наши контакты</span></h2>
                    <ul>
                        <li class="address clearfix">
                            <span class="hl">Адрес:</span>
                            <span class="text">Узбекистан, город Ахангаран, промзона</span>
                        </li>
                        <li class="phone clearfix">
                            <span class="text">Главный офис: +998 (70) 202-80-00</span>
                            <span class="text">Отдел экспорта: +998 (90) 033-44-57</span>
                        </li>
                        <li class="email clearfix">
                            <span class="hl">Почта:</span>
                            <span class="text">business@support.com</span>
                        </li>
                    </ul>
                </div>
                <div class="widget widget_socials">
                    <div class="socials">
                        <a target="_blank" href="https://www.facebook.com/profile.php?id=100087992041614"><i
                                class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div id="bottom" class="clearfix style-1">--}}
    {{--        <div class="container">--}}
    {{--            <div id="bottom-bar-inner" class="wprt-container">--}}
    {{--                <div class="bottom-bar-inner-wrap">--}}
    {{--                    <div class="bottom-bar-content">--}}
    {{--                        <div id="copyright">All Rights Reserved. Company Name © 2018</div>--}}
    {{--                        <!-- /#copyright -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /.bottom-bar-content -->--}}
    {{--                    <div class="bottom-bar-menu pull-right">--}}
    {{--                        <ul class="bottom-nav">--}}
    {{--                            <li><a href="#/">HISTORY</a></li>--}}
    {{--                            <li><a href="#/">FAQ</a></li>--}}
    {{--                            <li><a href="#/">EVENTS</a></li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                    <!-- /.bottom-bar-menu -->--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</footer>
<!-- end footer -->
<a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
<!-- ALL JS FILES -->
<script src="{{ asset("js/all.js") }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset("js/custom.js") }}"></script>
<script src="{{ asset("js/portfolio.js") }}"></script>
<script src="{{ asset("js/hoverdir.js") }}"></script>

<script>
    function myFunction() {
        let dots = document.getElementById("dots");
        let moreText = document.getElementById("more");
        let btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Читать подробно";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Показать меньше";
            moreText.style.display = "inline";
        }
    }
</script>
</body>
</html>

