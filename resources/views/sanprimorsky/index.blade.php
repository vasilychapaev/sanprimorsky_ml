<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Официальный отдел реализации путёвок санатория Приморский</title>
    <meta name="description"
          content="Приобретайте путёвки в санаторий Приморский напрямую и без переплат. Официальный отдел реализации путёвок санатория Приморский Беларусь. У нас гарантия лучшей цены. Лечение в медицинском центре управления делами президента РБ. Более 20 лечебных процедур. Заходите!">
    <meta name="robots" content="index,follow"/>
    <meta name="keywords"
          content="санаторий в белоруссии, санаторий Приморский, купить путёвку в санаторий, оздоровительный санаторий, Санаторий приморский беларусь, санаторий в белоруссии лечение, санаторий в белоруссии цены"/>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/theme.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/main.min.css">


    <link rel="stylesheet" href="{{ asset('js/jqueryui/jquery-ui.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-12/css/all.min.css" integrity="sha256-cC4ByuxbguozEVx8jcKy94MFiGvxN9GwjCqZ8f3+yBk=" crossorigin="anonymous" />

</head>
<body>
<div class="page">
    <header id="top">
        <div id="head-css" class="row-fluid">
            <div class="container">
                <div class="col-lg-6 col-md-4">
                    <div class="logo text-center">
                        <a href="">
                            <img src="images/logo.png" alt="logo" class="image-fluid">
                        </a>
                        <div class="clearfix"></div>
                        <span>Сайт санатория "Приморский"</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="row-fluid">
                        <div class="col-lg-6 col-md-6 col-sm-6 pad-top">
                            <img class="flag" src="images/icons/flag-ru.png" alt="Телефон санатория Приморский для россиян"><span class="number"><a href="tel:+7 499 938 43 43" id="podmena">+7 499 938 43 43</a></span>
                            <div class="clearfix"></div>
                            <img class="flag" src="images/icons/flag-bl.png" alt="Белорусский телефон отдела реализации путёвок санатория Приморский"><span class="number"><a
                                        href="tel:+375 29 107 44 00">+375 29 107 44 00</a></span>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 pad-top but text-center">
                            <a href="#" class="button-callback call-back-js" data-toggle="modal" data-target="#consult">Бесплатная консультация</a>
                            <div class="clearfix"></div>
                            <span>Минский район, д. Семков городок</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="section banner">
            <div class="row-fluid">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="banner__title">Проведите отдых с пользой для здоровья <br><span> в популярном санатории Беларуси "Приморский" </span></h1>
                        <div class="after-title">
                            <img src="images/content/best.png" alt="Гости санатория приморский">
                            <h3 class="bg-white">В нашем санатории регулярно оздоравливаются врачи Белоруссии и РФ</h3>
                            <h3 class="bg-grad">Гарантия лучшей цены на этот санаторий</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="container" style="margin-top: 80px;">
                    <div class="row-fluid">
                        <div id="header-form" class="col-lg-6 col-md-7 col-sm-8">
                            <div class="forma text-center">
                                <div class="form-title">Успейте сэкономить! Бронирование 2019!</div>
                                <div class="form-title-before">
                                    <img src="images/content/var5.jpg" alt="акция санатория Приморский">
                                </div>
                                <form class="form datespeoplesphone">
                                        <span>Заполните форму и узнайте<br>
                                            сниженную стоимость путёвки</span>
                                    <div class="row-fluid">
                                        <label>Выберите возможные даты бронирования</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="datestart" id="datep-on" class="date js_datepicker" placeholder="c __.__.____">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="datefinish" id="datep-off" class="date js_datepicker" placeholder="до __.__.____" >
                                        </div>
                                    </div>
                                    {{--<div class="row-fluid">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <label>Выберите лечебный профиль:</label>
                                            <div class="clearfix"></div>
                                            <select name="profile">
                                                <option value="Сердечно-сосудистая система">Сердечно-сосудистая система</option>
                                                <option value="Опорно-двигательный аппарат">Опорно-двигательный аппарат</option>
                                                <option value="Органы дыхания">Органы дыхания</option>
                                                <option value="Верхние дыхательные пути">Верхние дыхательные пути</option>
                                                <option value="Органы ЖКТ">Органы ЖКТ</option>
                                                <option value="Нервная система">Нервная система</option>
                                                <option value="Общетерапевтический профиль">Общетерапевтический профиль</option>
                                                <option value="Органы пищеварения">Органы пищеварения</option>
                                                <option value="Костно-мышечные болезни">Костно-мышечные болезни</option>
                                            </select>
                                        </div>
                                    </div>--}}
                                    <div class="row-fluid">
                                        <label>Выберите количество отдыхающих:</label>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-6">
                                            <select name="people-val" class="select people">
                                                <option value="1 взрослый">1 взрослый</option>
                                                <option value="2 взрослых">2 взрослых</option>
                                                <option value="3 взрослых">3 взрослых</option>
                                                <option value="4 взрослых">4 взрослых</option>
                                                <option value="5 взрослых">5 взрослых</option>
                                                <option value="6 взрослых">6 взрослых</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select name="baby-val" class="select baby">
                                                <option value="Без детей">Без детей</option>
                                                <option value="1 ребенок">1 ребенок</option>
                                                <option value="2 детей">2 детей</option>
                                                <option value="3 детей">3 детей</option>
                                                <option value="4 детей">4 детей</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row-fluid">
                                        <label>Введите номер телефона для связи с Вами:</label>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <input type="text" name="phone" class="phone" placeholder="+_(___) ___ __ __" required="">
                                        </div>
                                    </div>
                                    <input type="hidden" name="form_name" value="Форма на превом экране">
                                    <input type="hidden" id="utm_term" name="utm_term" value="undefined">
                                    <input type="hidden" id="utm_source" name="utm_source" value="undefined">
                                    <input type="hidden" id="utm_medium" name="utm_medium" value="undefined">
                                    <input type="hidden" id="utm_content" name="utm_content" value="undefined">
                                    <input type="hidden" id="utm_campaign" name="utm_campaign" value="undefined">
                                    <input type="hidden" id="roistat" name="roistat">
                                    <div class="row-fluid">
                                        <button type="submit">Узнать сниженную стоимость</button>
                                    </div>
                                    <div class="row-fluid">
                                        <span class="form-ob">Мы свяжемся с Вами в течение 20 минут и подберём предложение</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section">
            <div class="slider-reviw">
                <div class="container">
                    <div class="row-fluid">
                        <div class="col-xs-12 slide-block">
                            <div class="stars">
                                <img src="images/content/stars.jpg" alt="Отзывы о санатории Приморский">
                            </div>
                            <div class="slider carousel slide" id="carousel-example-generic" data-ride="carousel">
                                <ul class="slides carousel-inner">
                                    <li class="slide item active">
                                        <div class="slide-text">
                                            «<span>Наконец нашли хороший санаторий, в который можно
                                                ездить регулярно</span>. Спасибо большое обслуживающему
                                            персоналу, как и ожидалось цены на лечение
                                            и правда выгоднее.»
                                        </div>
                                        <span class="slide-date">22.11.2018</span>
                                    </li>
                                    <li class="slide item">
                                        <div class="slide-text">
                                            «<span>Рекомендую Хороший тихий спокойный санаторий</span>. Везде чисто. Лечебная база прекрасная, медицинский персонал отличный. Всё понравилось. Спасибо.»
                                        </div>
                                        <span class="slide-date">25.09.2018</span>
                                    </li>
                                    <li class="slide item">
                                        <div class="slide-text">
                                            «Отдыхала в "Приморском" с 10 апреля по 27 апреля 2019 года. <span>Отличное отношение всех сотрудников к отдыхающим, разнообразное питание, прекрасное лечение!</span>»
                                        </div>
                                        <span class="slide-date">28.05.2019</span>
                                    </li>
                                </ul>

                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <img src="images/icons/arrow-left.png" alt="Санаторий Приморский левее">
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <img src="images/icons/arrow-right.png" alt="Санаторий приморский правее">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section soveti">
            <div class="container">
                <h2 class="text-center">
                    Почему много Белорусов и Россиян<br>советуют санаторий Приморский:
                </h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="title">
                                <div class="icon">
                                    <img src="images/icons/volna.png" alt="Приморский на Минском Море">
                                </div>
                                <div class="text">
                                    Находится прямо на Минском Море
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="desc">
                                Санаторий располагается вблизи невероятно красивого и чистого Заславского водохранилища. Это второе по величине водохранилище Белоруссии. У санатория есть свой
                                <span>собственный пляж, который позволяет проводить досуг интересно как летом, так и зимой.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="title">
                                <div class="icon">
                                    <img src="images/icons/markers.png" alt="Приморский 10 км от Минска">
                                </div>
                                <div class="text">
                                    Санаторий в 10 км от Минска
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="desc">
                                Самое главное преимущество нашего санатория . Приехав из России, вам будет очень легко добраться до санатория. Также
                                <span>у Вас есть возможность посмотреть столицу Белоруссии,</span>
                                съездить на экскурсии от санатория и посмотреть самые популярные места страны.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="title">
                                <div class="icon">
                                    <img src="images/icons/fonenedo.png" alt="Приморский Лечебная база">
                                </div>
                                <div class="text">Большая лечебная база</div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="desc">
                                В нашем санатории представлены
                                <span>самые эффективные процедуры для лечения органов дыхания, опорно-двигательного аппарата, сердечно-сосудистой системы, заболеваний нервной системы, органов ЖКТ. </span>
                                Гости санатория очень ценят уникальные процедуры, которые присутствуют только в нашем санатории.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="title">
                                <div class="icon">
                                    <img src="images/icons/juice.png" alt="Санаторий приморский Без очередей на процедуры">
                                </div>
                                <div class="text">
                                    Без очередей
                                    на процедуры
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="desc">
                                Вам не придётся отстаивать в очередях для того, чтобы поесть, попасть на популярные процедуры или развлечения благодаря эффективной организации места и небольшой вместительности санатория.
                                <span>Гости очень ценят такую возможность.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="title">
                                <div class="icon">
                                    <img src="images/icons/pole.png" alt="Санаторий Приморский Чистый и полезный воздух">
                                </div>
                                <div class="text">
                                    Чистый и полезный воздух
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="desc">
                                Санаторий находится вблизи соснового леса. Хвойная терапия – тысячелетиями проверенный способ борьбы со многими болезнями, а также их своевременной профилактики. Все посетители отмечают,
                                что
                                <span>воздух в Приморском очень чистый и свежий.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="title">
                                <div class="icon">
                                    <img src="images/icons/kopilka.png" alt="Санаторий Приморский Цены">
                                </div>
                                <div class="text">
                                    Действительно невысокие цены
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="desc">
                                Россияне отмечают, что в Белоруссии
                                <span>стоимость очень отличается, в лучшую сторону, на лечебные процедуры. Обосновано это нашим гос. регулированием цен на медицинские услуги.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('sanprimorsky.block_wizard')

        <div class="section after-calc">
            <div class="container">
                <div class="row-fluid">
                    <div class="text-center">
                        <img src="images/icons/arrow-top.png" alt="Гарантия низких цен на путёвки" class="arrow-top">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col-md-6 no-padding">
                        <div class="block-info text-center">
                            <img src="images/icons/gar.png" alt="Гарантируем низкие цены на приморский" class="gar">
                            <div class="green">Мы официальный отдел реализации путёвок санатория Приморский!</div>
                            <div>Не покупайте путевки у перекупов</div>
                            <div class="red">Гарантируем лучшую стоимость</div>
                            <div class="black">Оставьте заявку на расчет стоимости выше,</div>
                            <div class="border"></div>
                            <div class="phone">либо звоните по телефону</div>
                            <div class="phone-num">
                                <img src="images/icons/icon-phone.png" alt="Номер телефона для Россиян"><a href="tel:+7 499 938 43 43" id="podmena">+7 499 938 43 43</a></div>
                        </div>
                        <div class="name">
                            Ирина Нефедова<br>
                            <span>специалист отдела реализации</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section services text-center">
            <div class="container">
                <div class="title-container">
                    "Приморский" оздоровительный санаторий –
                    круглогодичный, многопрофильный отдых,
                    пользующийся большой популярностью среди Россиян
                </div>
                <div class="row-fluid">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img1.jpg" alt="Стоунтерапия в Приморском">
                            </div>
                            <div class="title">
                                Стоунтерапия<br>
                                и спелеотерапия
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img2.jpg" alt="Водные процедуры в Приморском">
                            </div>
                            <div class="title">
                                Водные процедуры<br>
                                и массаж
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img3.jpg" alt="Иглорефлексотерапия в Приморском">
                            </div>
                            <div class="title">
                                Иглорефлексотерапия,<br>
                                карбокситерапия
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img4.jpg" alt="Кедровая бочка в Приморском">
                            </div>
                            <div class="title">
                                Кедровая бочка<br>
                                и спа-капсула
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img5.jpg" alt="Сухое вытяжение в Приморском">
                            </div>
                            <div class="title">
                                Сухое вытяжение<br>
                                позвоночника
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img6.jpg" alt="Сауна с мини-бассейном в приморском">
                            </div>
                            <div class="title">
                                Сауна с<br>
                                мини-бассейном
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img7.jpg" alt="Бесплатные выезды в Минск в Приморском">
                            </div>
                            <div class="title">
                                Бесплатные выезды<br>
                                в аквапарк в г. Минск
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img8.jpg" alt="Хвойные, йодобромные и жемчужные ванны в приморском">
                            </div>
                            <div class="title">
                                Хвойные, йодобромные,<br>
                                жемчужные ванны.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img9.jpg" alt="Детские площадки в Приморском">
                            </div>
                            <div class="title">
                                Детские площадки<br>
                                и игровые комнаты
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img10.jpg" alt="Зимняя рыбалка в Приморском">
                            </div>
                            <div class="title">
                                Зимняя и<br>
                                летняя рыбалка
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img11.jpg" alt="Кедровая бочка и спа капсула в Приморском">
                            </div>
                            <div class="title">
                                Кедровая бочка<br>
                                и спа-капсула
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="item">
                            <div class="image">
                                <img src="images/content/img12.jpg" alt="5ти разовое заказное питание в приморском">
                            </div>
                            <div class="title">
                                Заказное 5-ти разовое<br>
                                питание
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="description">
                    <b>В нашем санатории вы можете сделать общий анализ крови, ультразвуковую, лабораторную диагностику в 3-5 раз дешевле чем в России.</b><br>
                    У нас работают квалифицированные специалисты: врач – терапевт, врач
                    УЗ – диагностики (УЗИ внутренних органов, щитовидной железы),
                    врач функциональной диагностики, врач-педиатр.
                </div>
            </div>
        </div>
        <div class="section osobennosti">
            <div class="container">
                <h2 class="text-center">
                    Посмотрите особенности Приморского санатория:
                    <img src="/images/icons/arrow-bottom-green.png" alt="Зелёная стрелка">
                </h2>
                <div class="blocks">
                    <div class="row-fluid">
                        <div class="col-md-3 col-sm-4">
                            <ul class="ul-menu">
                                <li class="active"><a href="#skidki" class="skidki" data-toggle="tab">Скидки и акции</a></li>
                                <li><a href="#pitanie" class="pitanie" data-toggle="tab">Питание</a></li>
                                <li><a href="#otdih" data-toggle="tab" class="otdih">Отдых</a></li>
                                <li><a href="#lechenie" class="lechenie" data-toggle="tab">Лечение</a></li>
                                <li><a href="#prozivanie" class="proz" data-toggle="tab">Проживание</a></li>
                                <!--  <li><a href="#transfer" class="transfer" data-toggle="tab">Трансфер</a></li> -->

                            </ul>
                        </div>
                        <div class="col-md-9 col-sm-8">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="skidki">
                                    <div class="bordered">
                                        <div class="row-fluid">
                                            <div class="texts">
                                                <span class="text-bold">В данном разделе вы можете увидеть актуальные скидки на путёвки санатория "Приморский".</span>
                                                <ul class="marker-check">
                                                    <li><span class="top">Прогулка на яхте по Минскому морю <span>В ПОДАРОК!!!</span></span></li>
                                                    <!-- <li><span class="top">Посещение аквапарка <span>В ПОДАРОК!!!</span></span></li> -->
                                                    <!--  <li><span class="top"><span>Бесплатный трансфер</span> с вокзала</span></li> -->
                                                    <li><span class="top"><span>Прогулка на яхте в подарок</span> при покупке путёвки от 8 дней</span></li>
                                                    <li><span class="top">Скидки для пенсионеров</span></li>
                                                </ul>
                                                <div class="text-center">
                                                    <p>Подробнее об акциях уточняйте у менеджера по номеру: <span class="text-bold"><a href="tel:+7 499 938 43 43" id="podmena">+7 499 938 43 43</a></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pitanie">
                                    <div class="bordered">
                                        <div class="row-fluid">
                                            <div class="texts">
                                                <ul class="marker-check">
                                                    <li>
                                                            <span class="top">
                                                                <span>В санатории предусмотрено заказное 5-ти разовое питание</span>
                                                                (Завтрак, второй завтрак, обед, полдник, ужин). Вы сами модете выбрать, что хотите, на завтрак, обед и ужин.
                                                            </span>
                                                    </li>
                                                    <li>
                                                            <span class="top">
                                                                Присутствует также дополнительное меню:
                                                                <span>вегетарианское, детское, постное и диетическое питание.</span>
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <span class="top">Питаться Вы будете в ресторане, летнем кафе, или баре.</span>
                                                    </li>
                                                    <li>
                                                        <span class="top">Возможна консультация медицинской сестры-диетолога.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="images text-center">
                                                <a data-fancybox="gallery" href="/img/Food/dinner2_1-min.jpg"><img src="/img/Food/mini/dinner2_1_min.FaFWe.jpg" alt="Ужин в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Food/dinner2_2-min.jpg"><img src="/img/Food/mini/dinner2_2_min.rs65e.jpg" alt="Обед в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Food/evant1_0-min.jpg"><img src="/img/Food/mini/evant1_0_min.SSuAx.jpg" alt="Завтрак в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Food/img_6422_0-min.jpg"><img src="/img/Food/mini/img_6422_0_min.bjKcD.jpg" alt="Полдник в санатории Приморский"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="otdih">
                                    <div class="bordered">
                                        <div class="row-fluid">
                                            <div class="texts">
                                                <span class="text-bold">Хорошо организован досуг отдыхающих.</span>
                                                <ul class="marker-check">
                                                    <li>
                                                            <span class="top">
                                                                Детские развлекательные программы и экскурсии
                                                            </span>
                                                    </li>
                                                    <li>
                                                            <span class="top">
                                                                Дискотеки ,концерты профессиональных коллективов
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <span class="top">Посещение театра, музея и др. мероприятия в городе</span>
                                                    </li>
                                                    <li><span class="top">Просмотр кинофильмов, мастер-классы</span></li>
                                                    <li><span class="top">Большой выбор экскурсий по Республике Беларусь</span></li>
                                                    <li><span class="top">Спа-процедуры</span></li>
                                                    <li><span class="top">Спортивный отдых</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="images text-center">
                                                <a data-fancybox="gallery" href="/img/Rest/0917w-min.jpg"><img src="/img/Rest/mini/0917w_min.QNObX.jpg" alt="Пляж в санатории Приморской"></a>
                                                <a data-fancybox="gallery" href="/img/Rest/2c1a598b26e6712ae10ad3d8e6c6f8e6-min.jpg"><img src="/img/Rest/mini/2c1a598b26e6712ae10ad3d8e6c6f8e6_min.eYJn6.jpg"
                                                                                                                                          alt="Бассейн в санатории Приморской"></a>
                                                <a data-fancybox="gallery" href="/img/Rest/9941-1250-min.jpg"><img src="/img/Rest/mini/9941_1250_min.kCic9.jpg" alt="Бильярд в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Rest/c88dfbb547f0986635185abedc63bbd8-min.jpg"><img src="/img/Rest/mini/c88dfbb547f0986635185abedc63bbd8_min.zQbux.jpg"
                                                                                                                                          alt="Место для релакса в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Rest/cfd185aa17fb9e0fcaa3ebeda1a7b23d-min.jpg"><img src="/img/Rest/mini/cfd185aa17fb9e0fcaa3ebeda1a7b23d_min.1Fo2A.jpg"
                                                                                                                                          alt="Баня в санатории Приморский"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="lechenie">
                                    <div class="bordered">
                                        <div class="row-fluid">
                                            <div class="texts">
                                                <ul class="marker-check">
                                                    <li>
                                                            <span class="top">
                                                                Медицинские профили санатория: Болезни сердечно-сосудистой системы , органов дыхания, опорно-двигательного аппарата, органов пищеварения, нервной системы
                                                            </span>
                                                    </li>
                                                    <li>
                                                            <span class="top">
                                                                Дополнительные: Болезни костно-мышечной системы и соединительной ткани, кровообращения
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <span class="top">Природные лечебные процедуры: климатолечение, грязелечение</span>
                                                    </li>
                                                    <li><span class="top">Диагностика: Ультразвуковая диагностика (УЗИ), ЭКГ</span></li>
                                                    <li><span class="top">И многое другое, в том числе общий анализ крови.</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="images text-center">
                                                <a data-fancybox="gallery" href="/img/Treatment/79947b57765b0bd8aeae26fa61aeb0c3-min.jpg"><img src="/img/Treatment/mini/79947b57765b0bd8aeae26fa61aeb0c3_min.loac6.jpg"
                                                                                                                                               alt="Джакузи в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Treatment/b2_0-min.jpg"><img src="/img/Treatment/mini/b2_0_min.Rj6o5.jpg" alt="Кедровая бочка в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Treatment/eol1-min.jpg"><img src="/img/Treatment/mini/eol1_min.zYaFG.jpg" alt="Процедуры в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Treatment/g5_3-min.jpg"><img src="/img/Treatment/mini/g5_3_min.56VQ3.jpg" alt="Процедуры в Приморском"></a>
                                                <a data-fancybox="gallery" href="/img/Treatment/gryaz1-min.jpg"><img src="/img/Treatment/mini/gryaz1_min.Pdiyo.jpg" alt="Грязевое обёртывание в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Treatment/shutterstock_151824476-min.jpg"><img src="/img/Treatment/mini/shutterstock_151824476_min.vbJ5G.jpg"
                                                                                                                                     alt="Спа капсула в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Treatment/vanny1-min.jpg"><img src="/img/Treatment/mini/vanny1_min.ThVUj.jpg" alt="Гидрованны в санатории Приморский"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="prozivanie">
                                    <div class="bordered">
                                        <div class="row-fluid">
                                            <div class="texts">
                                                <span class="text-bold">Проживать в санатории можно в следующих номерах:</span>
                                                <ol>
                                                    <li>
                                                            <span class="top">
                                                                2-местный 1-комнатный номер
                                                            </span>
                                                    </li>
                                                    <li>
                                                            <span class="top">
                                                                1-местный 1-комнатный люкс
                                                            </span>
                                                    </li>
                                                    <li>
                                                        <span class="top">2-местный 2-комнатный люкс</span>
                                                    </li>
                                                    <li>
                                                        <span class="top">2-местный 2-комнатный улучшенный люкс</span>
                                                    </li>
                                                </ol>
                                                Номера оборудованы всей необходимой техникой и принадлежностями.
                                                Подробнее вы можете узнать прямо сейчас по номеру: <span class="text-bold"><a href="tel:+7 499 938 43 43" id="podmena">+7 499 938 43 43</a></span>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="images text-center">
                                                <a data-fancybox="gallery" href="/img/Apport/9392-min.jpg"><img src="/img/Apport/mini/9392_min.0zf5w.jpg" alt="Люкс Санаторий Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Apport/img_9344-min.jpg"><img src="/img/Apport/mini/img_9344_min.mn8Aj.jpg" alt="Двухместный стандарт санаторий Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Apport/img_9382-min.jpg"><img src="/img/Apport/mini/img_9382_min.wQvX1.jpg" alt="Двухкомнатный люкс в Приморском"></a>
                                                <a data-fancybox="gallery" href="/img/Apport/img_9407_0-min.jpg"><img src="/img/Apport/mini/img_9407_0_min.Ep3AH.jpg" alt="Гостинная в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Apport/img_9415_0-min.jpg"><img src="/img/Apport/mini/img_9415_0_min.6Avx8.jpg" alt="Ванная комната в санатории Приморский"></a>
                                                <a data-fancybox="gallery" href="/img/Apport/img_9453-min.jpg"><img src="/img/Apport/mini/img_9453_min.XY1QN.jpg" alt="Кровать в санатории Приморский"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="transfer">
                                    <div class="bordered">
                                        <div class="row-fluid">
                                            <div class="texts">
                                                <span class="text-bold">Вам не нужно думать о том, как найти санаторий и чем добраться – сотрудник санатория встретит Вас прямо у вагона поезда или у терминала аэропорта и доставит в санаторий "Приморский".</span>
                                                <div class="text-center">
                                                    <p>Для уточнения стоимости и заказа трансфера звоните по номеру: <span class="text-bold"><a href="tel:+7 499 938 43 43" id="podmena">+7 499 938 43 43</a></span></p>
                                                    <p>Также рядом с санаторием ходит большое количество общественного транспорта, подробнее уточняйте у операторов.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="images text-center">
                                                <img src="/img/Transfer/mini/f09b84b0b3f931732cbda3776fd9e043_min.ezgRW.jpg" alt="Трансфер до санатория Приморский">
                                                <img src="/img/Transfer/mini/reno2_20_0_min.udVH8.jpg" alt="Трансфер до санатория Приморский">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row-fluid">
                        <div class="text-center">
                            <a href="" class="button-to-vileo" data-toggle="modal" data-target="#video">Посмотреть видео о санатории >></a>
                        </div>

                        <h3 class="text-center">Для бесплатной консультации или бронирования звоните сейчас по номеру:</h3>

                        <div class="number clearfix text-center">
                            <img src="/images/icons/icons-seti.png" alt="Российский телефон санатория Примосркий">&nbsp;<a href="tel:+7 499 938 43 43" id="podmena">+7 499 938 43 43</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section rating">
            <div class="container text-center">
                <img src="/images/icons/five-stars.png" alt="Звёзды">
                <div class="clearfix"></div>
                <span>Нас оценили уже более <span class="underline">13200 человек</span></span>
                <div class="clearfix"></div>
                Посмотрите отзывы о Приморском санатории
            </div>
        </div>
        <div class="section review">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <img src="images/icons/five-stars-rew.png" alt="Отзывы о санатории Приморский" class="stars">
                            <div class="text">
                                <span class="text-bold">Николай</span><br>
                                «Отдыхал в санатории
                                "Приморском в сентябре 2018 г.
                                Огромные слова
                                благодарности работникам
                                ресторана- за превосходное
                                питание и разнообразное
                                меню. А вечерний досуг
                                превращался в праздник.
                                Индивидуальный подход
                                к каждому отдыхающему.»
                            </div>
                            <span class="date">27.09.2018</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <img src="images/icons/five-stars-rew.png" alt="Отзывы о санатории Приморский" class="stars">
                            <div class="text">
                                <span class="text-bold">Юлия</span><br>
                                «Рекомендую
                                Хороший тихий спокойный
                                санаторий! Везде чисто.
                                Лечебная база прекрасная,
                                медицинский персонал
                                отличный. Все понравилось,
                                спасибо.»
                            </div>
                            <span class="date">13.07.2018</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <img src="images/icons/five-stars-rew.png" alt="Отзывы о санатории Приморский" class="stars">
                            <div class="text">
                                <span class="text-bold">Олег</span><br>
                                «Добрый день! Я ещё нахожусь в санатории и получаю море приятных впечатлений, также хочу поделиться о грамотно подобранном индивидуально каждому отдыхающему лечение и это заслуга лечащих
                                врачей. Очень вкусное, здоровое питание. Рекомендую.»
                            </div>
                            <span class="date">05.06.2019</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <img src="images/icons/five-stars-rew.png" alt="Отзывы о санатории Приморский" class="stars">
                            <div class="text">
                                <span class="text-bold">Наталья</span><br>
                                «Отдыхала в "Приморском"
                                с 10 по 27 марта 2019
                                года. Отличное отношение
                                всех сотрудников к
                                отдыхающим, разнообразное
                                питание, прекрасное лечение!
                                Хочется отметить
                                инструктора по ЛФК
                                Людмилу Евгеньевну и
                                мастера массажа Ирину.
                                Чудесно отдохнула и
                                оздоровилась! Спасибо!»
                            </div>
                            <span class="date">21.04.2019</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <img src="images/icons/five-stars-rew.png" alt="Отзывы о санатории Приморский" class="stars">
                            <div class="text">
                                <span class="text-bold">Юрий</span><br>
                                «Наконец нашли хороший
                                санаторий, в который можно
                                ездить регулярно. Спасибо
                                большое обслуживающему
                                персоналу, как и ожидалось
                                цены на лечение
                                и правда выгоднее.»
                            </div>
                            <span class="date">18.12.2018</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="item">
                            <img src="images/icons/five-stars-rew.png" alt="Отзывы о санатории Приморский" class="stars">
                            <div class="text">
                                <span class="text-bold">Наталья</span><br>
                                «Всем приветик! Девушки из
                                номера 223 выражают
                                искреннею благодарность
                                всему персоналу санатория!
                                Все очень доброжелательны
                                и отзывчивы! Из процедур
                                особенно понравились
                                "массажная кушетка",
                                "спа-капсула",
                                "циркуляционный душ".
                                Еда также вкусная! Из
                                пожеланий: кофе-машина.
                                Обязательно вернёмся сюда!»
                            </div>
                            <span class="date">27.11.2018</span>
                        </div>
                    </div>
                </div>
                <div class="row-fluid text-center">
                    <button class="add_review text-bold" data-toggle="modal" data-target="#otziv">Оставить отзыв</button>
                </div>
            </div>
        </div>
        <div class="section promo">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <div class="forma text-center">
                            <div class="form-title">Успейте сэкономить! Бронирование 2019!</div>
                            <div class="form-title-before">
                                <img src="/images/content/var5.jpg" alt="Акция в санатории Приморский">
                            </div>
                            <form class="form datespeoplesphone">
                                <input type="hidden" name="form_name" value="Форма внизу страницы">
                                <input type="hidden" id="utm_term" name="utm_term">
                                <input type="hidden" id="utm_source" name="utm_source">
                                <input type="hidden" id="utm_medium" name="utm_medium">
                                <input type="hidden" id="utm_content" name="utm_content">
                                <input type="hidden" id="utm_campaign" name="utm_campaign">
                                <input type="hidden" id="roistat" name="roistat">
                                <span>Заполните формы и узнайте<br>
                                            сниженную стоимость путёвки</span>
                                <div class="row-fluid">
                                    <label>Выберите возможные даты бронирования</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="datestart" id="datep-on3" class="date" placeholder="c __.__.____">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="datefinish" id="datep-off3" class="date" placeholder="до __.__.____">
                                    </div>
                                </div>
                                {{--<div class="row-fluid">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <label>Выберите лечебный профиль:</label>
                                        <div class="clearfix"></div>
                                        <select name="profile">
                                            <option value="Сердечно-сосудистая система">Сердечно-сосудистая система</option>
                                            <option value="Опорно-двигательный аппарат">Опорно-двигательный аппарат</option>
                                            <option value="Органы дыхания">Органы дыхания</option>
                                            <option value="Верхние дыхательные пути">Верхние дыхательные пути</option>
                                            <option value="Органы ЖКТ">Органы ЖКТ</option>
                                            <option value="Нервная система">Нервная система</option>
                                            <option value="Общетерапевтический профиль">Общетерапевтический профиль</option>
                                            <option value="Органы пищеварения">Органы пищеварения</option>
                                            <option value="Костно-мышечные болезни">Костно-мышечные болезни</option>
                                        </select>
                                    </div>
                                </div>--}}
                                <div class="row-fluid">
                                    <label>Выберите количество отдыхающих:</label>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6">
                                        <select name="people-val" class="select people">
                                            <option value="1 взрослый">1 взрослый</option>
                                            <option value="2 взрослых">2 взрослых</option>
                                            <option value="3 взрослых">3 взрослых</option>
                                            <option value="4 взрослых">4 взрослых</option>
                                            <option value="5 взрослых">5 взрослых</option>
                                            <option value="6 взрослых">6 взрослых</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="baby-val" class="select baby">
                                            <option value="Без детей">Без детей</option>
                                            <option value="1 ребенок">1 ребенок</option>
                                            <option value="2 детей">2 детей</option>
                                            <option value="3 детей">3 детей</option>
                                            <option value="4 детей">4 детей</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <label>Введите номер телефона для связи с Вами:</label>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <input type="text" name="phone" class="phone" placeholder="+_(___) ___ __ __" required>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <button type="submit">Узнать сниженную стоимость</button>
                                </div>
                                <div class="row-fluid">
                                    <span class="form-ob">Мы свяжемся с Вами в течение 20 минут и подберём предложение</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section contacts">
            <div class="container">
                <h2 class="text-center">Наши контакты:</h2>
            </div>
            <div class="map">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9603e5271d8a98df6db1ceb4cc75bbf4813aa05f0441add047f5ee2342e75839&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container text-center">
            <div class="col-md-4">
                <div class="logo">
                    <img src="images/logo_footer.png" alt="лого в санатории Приморский">
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-md-push-4 col-sm-push-6">
                <div class="phones text-bold">
                    <div class="title">Для консультации звоните по номеру сейчас!</div>
                    <div class="numbers">
                        <img src="images/icons/flag-ru.png" alt="Российский номер телефона"><span id="podmena" style="margin-top: 7px;"><a href="tel:+74999384343" style="color: white;">&nbsp;+7 499 938 43 43</a></span>
                        <div class="clearfix"></div>
                        <img src="images/icons/flag-bl.png" alt="Белорусский номер телефона"><a href="tel:+375291074400" style="color: white;">&nbsp;+375 29 107 44 00 </a></div>
                    <button class="text-bold" data-toggle="modal" data-target="#consult">Бесплатная консультация</button>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-md-pull-4 col-sm-pull-6">
                <span>Спасибо, что выбираете нас!</span>
                <div class="clearfix"></div>
                <a id="back-top" href="#"><img src="images/icons/to-top.png" alt=""></a>
            </div>
        </div>
    </footer>
</div>


<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-title text-center">
                <span class="text-bold">Cанаторий Приморский</span>
            </div>
            <div class="form-modal video"></div>
        </div>
    </div>
</div>


@include('sanprimorsky.popups')

<button id="plavbutton" class="plav visible-md visible-lg" data-toggle="modal" data-target="#action" style="opacity: 0;"><b style="color:white;">Узнать цены</b></button>


{{--<script type="text/javascript" src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5687957026635776"></script>--}}
<script>
    let btn = document.querySelector('#plavbutton');

    window.onscroll = magic;

    function magic() {
        if (window.pageYOffset > 1000) {
            btn.style.opacity = '1';
        } else {
            btn.style.opacity = '0';
        }
    }

    btn.onclick = function () {
        window.scrollTo(0, 0);
    };
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>--}}
<script src="{{ asset('js/jqueryui/jquery-ui.min.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="js/main.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>