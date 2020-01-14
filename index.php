<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/css/bundle.min.css?v=1.2">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,500i,600|Roboto:400,500,700&display=swap&subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="assets/main.min.css">
	<title>УЮТ ПРОФИ</title>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MDHKRL2');
    </script>
    <!-- End Google Tag Manager -->
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKG44XL"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div id="wrapper">
    <header id="header">
        <div class="sticky-header">
            <div class="container">
                <a href="#" class="logo">Компания «УЮТ ПРОФИ»</a>
                <nav class="main-nav">
                    <a href="#" class="nav-opener"><span></span></a>
                    <div class="nav-drop">
                        <ul id="nav">
                            <li><a href="#table-pricing">Прайс</a></li>
                            <li><a href="#review" data-href="#callback-btn-header" class="hypercomments">Отзывы</a></li>
                            <li><a href="#services">Сервис</a></li>
                            <li><a href="#our-advantages">Наши преимущества</a></li>
                            <li><a href="#contact">Оставить заявку</a></li>
                            <li class="contact-list"><span id="contact-list-btn">Контакты</span>
                                <section class="call contact-drop-down">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="phone_number">
                                        <span>08:30-21:00 Ежедневно</span>
                                    </div>
                                    <?php
                                    $phone_numbers = [
                                        'day' => [
                                            'ks' => '+38 (098) 223-74-76',
                                            'mts' => '+38 (050) 246-83-52',
                                            'life' => '+38 (050) 246-83-52',
                                        ],
                                        'night' => [
                                            'ks' => '+38 (098) 223-74-76',
                                            'mts' => '+38 (050) 246-83-52',
                                            'life' => '+38 (050) 246-83-52',
                                        ],
                                    ];

                                    //$key = 'day';
                                    $key = date('H') >= 19 || date('H') < 10 ? 'night' : 'day';
                                    $key = date('w') == 6 ? 'day' : (date('w') == 0 ? 'night' : $key);
                                    
                                    ?>
                                    <div class="phone_number">
                                    <span title="Vodafone" class="mobo-vodafone-16">&nbsp;<a class="phone-clicable" href="tel:<?php echo $phone_numbers[$key]['mts']; ?>"><?php echo $phone_numbers[$key]['mts']; ?></a></span>
                                        <span title="Київстар" class="mobo-kyivstar-16">&nbsp;<a class="phone-clicable" href="tel:<?php echo $phone_numbers[$key]['ks']; ?>"><?php echo $phone_numbers[$key]['ks']; ?></a></span>
                                        <span title="Lifecell" class="mobo-lifecell-16">&nbsp;<a class="phone-clicable" href="tel:<?php echo $phone_numbers[$key]['life']; ?>"><?php echo $phone_numbers[$key]['life']; ?></a></span>
                                    </div>
                                    <div class="phone_number" id="text_head">
                                        <span>Бесплатный выезд мастера и диагностика!</span>
                                    </div>
                                    <div class="call_me">
                                        <button class="btn btn-default modal-b" type="submit" data-toggle="modal" data-target="#modal-callback">Перезвоните мне</button>
                                    </div>
                                </section>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="main-slider-wrapper">
            <div class="main-slider">
                <div class="main-slider__img" style="background-image: url(images/window-07.jpg)"></div>
                <div class="main-slider__img" style="background-image: url(images/window-05.jpg)"></div>
                <div class="main-slider__img" style="background-image: url(images/window-06.jpg)"></div>
                <div class="main-slider__img" style="background-image: url(images/window-03.jpg)"></div>
            </div>
            <div class="main-slogan">
                <h1><mark>Ремонт металлопластиковых окон и дверей в Киеве</mark></h1>
                <script>
                    if (document.location.href.indexOf('utm_term') > 0) {
                        var utmTerms = decodeURI(document.location.href.split('&utm_term=')[1].split('&')[0]);
                        document.getElementsByTagName("h1")[0].innerHTML = utmTerms.replace(/[^А-Яа-яЁё\s]/gi, '').toUpperCase();
                    }
                </script>
                <p><mark>КОМПАНИЯ «УЮТ ПРОФИ»</mark></p>
            </div>
            <div id="btn-down">
                <a href="#services" class="icon-scroll bounce">
                <img width="40" height="40" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDMyIDMyIiBoZWlnaHQ9IjMycHgiIGlkPSLQodC70L7QuV8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMycHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxwYXRoIGQ9Ik0yNC4yODUsMTEuMjg0TDE2LDE5LjU3MWwtOC4yODUtOC4yODhjLTAuMzk1LTAuMzk1LTEuMDM0LTAuMzk1LTEuNDI5LDAgIGMtMC4zOTQsMC4zOTUtMC4zOTQsMS4wMzUsMCwxLjQzbDguOTk5LDkuMDAybDAsMGwwLDBjMC4zOTQsMC4zOTUsMS4wMzQsMC4zOTUsMS40MjgsMGw4Ljk5OS05LjAwMiAgYzAuMzk0LTAuMzk1LDAuMzk0LTEuMDM2LDAtMS40MzFDMjUuMzE5LDEwLjg4OSwyNC42NzksMTAuODg5LDI0LjI4NSwxMS4yODR6IiBmaWxsPSIjMTIxMzEzIiBpZD0iRXhwYW5kX01vcmUiLz48Zy8+PGcvPjxnLz48Zy8+PGcvPjxnLz48L3N2Zz4=" />
                </a>
                <div/>
            </div>
    </header>
    <main id="main">
        <section class="services" id="services">
            <div class="container">
                <button class="btn btn-leave__request pulse-effect" type="submit" data-toggle="modal" data-target="#leave-request">Закажите бесплатную диагностику прямо сейчас!</button>
                <div class="heading">
                    <h2></h2>
                    <p>Компания «Уют Профи» предлагает профессиональное сервисное обслуживание и ремонт евроокон из металлопластика, дерева и алюминия>
                </div>
                <div id="our-services">
                    <div class="services__items">
                        <div class="service__item">
                            <div class="service__item-img ">
                               <img src="images/icon/029-worker.svg" alt="">
                            </div>
                            <strong class="service__item-title">Замена уплотнителя </strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/maintenance.svg" alt="">
                            </div>
                            <strong class="service__item-title">Регулировка окон и дверей</strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/007-paint-roller.svg" alt="">
                            </div>
                            <strong class="service__item-title">Чистка и смазка фурнитуры </strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/002-blueprint-3.svg" alt="">
                            </div>
                            <strong class="service__item-title">Ремонт: фурнитуры окон и дверей из пластика,евробруса и алюминия </strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/012-brickwall.svg" alt="">
                            </div>
                            <strong class="service__item-title">Заделка щелей герметиком, устранение продуваний </strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/019-engineer-1.svg" alt="">
                            </div>
                            <strong class="service__item-title">Устранение запотеваний стекол</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-advantages" id="our-advantages">
            <div class="container">
                <div class="heading">
                    <h2>Наши преимущества:</h2>
                    <p> Обращаясь к нам, Вы можете быть уверены, что работаете с профессионалами!</p>
                </div>
                <ul class="items-our-advantages">
                    <li>
                        <div class="item-our-advantages">
                            <img src="images/icon/006-engineer-2.svg" alt="">
                            <div class="our-advantage__description">
                                <p>Высоквалифицированные мастера.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-our-advantages">
                            <img src="images/icon/002-blueprint-3.svg" alt="">
                            <div class="our-advantage__description">
                                <p>Гарантия на работы - 2 года.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-our-advantages">
                            <img src="images/icon/022-truck.svg" alt="">
                            <div class="our-advantage__description">
                                <p>Выезд в течении часа.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-our-advantages">
                            <img src="images/icon/030-engineer.svg" alt="">
                            <div class="our-advantage__description">
                                <p>Бесплатная диагностика.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="price-table" id="table-pricing">
            <div class="container">
                <div class="heading">
                    <h2>Прайс-лист технического обслуживания и ремонта оконных систем</h2>
                </div>
                <div class="table-responsive">
                    <table id="table-pricing">
                        <tr>
                            <th class="name">Наименование</th>
                            <th class="name ">Единица<br> измерения</th>
                            <th class="name ">Цена грн.</th>
                            <th class="name ">Опция</th>
                        </tr>
                        <tr>                            
                            <td>Регулировка окна/балконной двери</td>
                            <td class="center">створка/дверь</td>
                            <td class="center td-width">150/200</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
							<td>Полное ТО (чистка,смазка,регулировка механизма) окна/балконной двери</td>
                            <td class="center">створка/дверь</td>
                            <td class="center td-width">250/300</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>      
                            <td>Регулировка входной пластиковой/алюминиевой двери</td>
                            <td class="center">дверь</td>
                            <td class="center td-width">400</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
							<td>Ремонт фурнитуры окна/балконной двери </td>
                            <td class="center">створка/дверь</td>
                            <td class="center td-width">от 200</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
                            <td>Замена уплотнителя (пенополиуритан Германия)</td>
                            <td class="center">м.п</td>
                            <td class="center td-width">60</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
							<td>Заделка мелких щелей герметиком внутри/снаружи</td>
                            <td class="center">м.п</td>
                            <td class="center td-width">50/70</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
                            <td>Заделка крупных щелей пеной/подпенка отлива</td>
                            <td class="center">м.п</td>
                            <td class="center td-width">100</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>             
                            <td>Профилактическая чистка и смазка резинового уплотнителя силиконом</td>
                            <td class="center">створка</td>
                            <td class="center td-width">70</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
							<td>Замена поворотной ручки, Hoppe Германия</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">200</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
							<td>Замена нижней петлевой группы окно/дверь</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">650/700</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
							<td>Установка ручки курильщика + защелка</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">250</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>							
							 <td>Установка детского замка «оконной няни»</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">250</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>       
							<td>Установка приточно-вентиляционного клапана (устранение запотевания стекол) </td>
                            <td class="center">шт.</td>
                            <td class="center td-width">480</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
                            <td>Переделывание фурнитуры окна/двери на поворотно-откидную (указана только стоимость работ)</td>
                            <td class="center">створка</td>
                            <td class="center td-width">450/550</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>                           
                            <td>Полная замена механизма окна/двери</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">1500-1900</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>                                                                                                         
                            <td>Замена секрета замка в двери (изделие+работа) </td>
                            <td class="center">шт.</td>
                            <td class="center td-width">от 450</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
                            <td>Замена замка в двери(изделие+работа) </td>
                            <td class="center">шт.</td>
                            <td class="center td-width">от 700</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>                                                                                                                 
                            <td>Замена пластиковых декоративных частей на петлях </td>
                            <td class="center">комплект</td>
                            <td class="center td-width">70</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
							<td>Регулировка дверного доводчика</td>
                            <td class="center">шт</td>
                            <td class="center td-width">300</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
							<td>Установка москитной сетки</td>
                            <td class="center">шт</td>
                            <td class="center td-width"> от 350</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Заказать</button></td>
                        </tr>
                        <tr>
                    </table>
                </div>
                <div class="text-table">
                    <p>* По ремонту и замене фурнитуры (механизма) указаны приблизительные цены, более точную информацию мастер сможет предоставить на месте после диагностики.</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <div id="contact-us">
                <div class="container" id="contacts">
                    <div class="heading">
                        <h2>Обратная связь</h2>
                        <p>Если у Вас возникли вопросы или пожелания - Вы всегда можете связаться с нами по телефонам, указанным ниже или написав нам на e-mail</p>
                    </div>
                   <div class="row">
                    <form id="main-contact-form" name="contact-form" class="footer_form">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Имя">
                            <input type="hidden" name="form" class="form-control" value="Обратная связь">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Телефон">
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="4" maxlength="200" placeholder="Введите текст заявки"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn-submit btn">Отправить заявку</button>
                        </div>
                    </form>
                    <div class="contact-us__img" style="background-image: url(images/window-08.jpg");"></div>
                   </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer">
        <div class="container">
            <div class="address-row">
                <div class="address">
                    <strong>Киев</strong>
                    <address>Проспект Петра Григоренка 41</address>
                    <address>Дарницкий Бульвар 9</address>
                    <address>ул.Владимирская 77</address>
                </div>
                <ul class="list-tell">
                <li><span title="Vodafone" class="mobo-vodafone-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['mts']; ?>"><?php echo $phone_numbers[$key]['mts']; ?></a></span></li>
                <li><span title="Lifecell" class="mobo-lifecell-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['life']; ?>"><?php echo $phone_numbers[$key]['life']; ?></a></span></li>
                <li><span title="Київстар" class="mobo-kyivstar-16">&nbsp;<a href="tel:<?php echo $phone_numbers[$key]['ks']; ?>"><?php echo $phone_numbers[$key]['ks']; ?></a></span></li>
                <li><i class="icon-envelope-o"></i> &nbsp;&nbsp;<a href="mailto:uyutprofi.kiev@gmail.com">uyutprofi.kiev@gmail.com</a></li>
            </ul>
            </div>
        </div>
    </footer>
    <div id="modal-callback" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header"> 
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Оставьте Ваш номер телефона, мы свяжемся с Вами и ответим на все вопросы!</h5>
                    </div>
                    <div class="modal-body">
                        <p>
                            <form class="modal-form">
                                <div class="input-with-icon">
                                    <label for="fieldPhone">Введите ваш номер телефона</label>
                                    <i class="icon icon-Phone thirstphone"></i>
                                    <input name="form" type="hidden" value="Перезвоните мне">
                                    <input id="fieldPhone" name="phone" type="text">
                                </div>
                                <button type="submit" class="btn formSub">Отправить</button>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="leave-request" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Оставьте Ваши данные, мы свяжемся с Вами и ответим на все вопросы!</h5>
                    </div>
                    <div class="modal-body">
                        <p>
                            <form class="modal-form">
                                <div class="input-with-icon">
                                    <label for="fieldName">Введите ваше имя</label>
                                    <input id="fieldName" name="name" type="text">
                                </div>
                                <div class="input-with-icon">
                                    <label for="fieldPhone">Введите ваш номер телефона</label>
                                    <i class="icon icon-Phone thirstphone"></i>
                                    <input name="form" type="hidden" value="Оставить заявку">
                                    <input id="fieldPhone" name="phone" type="text">
                                </div>
                                <button type="submit" class="btn formSub">Отправить</button>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="free-diagnostic" class="modal-static modal" role="dialog">
            <div>
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Оформите заявку на бесплатную диагностику</h5>
                    </div>
                    <div class="modal-body">
                        <p>
                            <form class="modal-form">
                                <div class="input-with-icon">
                                    <label for="phone-field">Оставьте номер телефона и наш менеджер свяжется с Вами</label>
                                    <i class="icon icon-Phone thirstphone"></i>
                                    <input type="hidden" name="form" class="form-control" value="Поп-ап: Заявка на бесплатную диагностику">
                                    <input id="phone-field" name="phone" type="text" placeholder="Телефон">
                                </div>
                                <button type="submit" class="btn diagnosticSub">Оформить заявку</button>
                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <script src='app/js/libs.min.js?v=1.3'></script>
    <script src="./js/old-libs/mask.js"></script>
    <script src="app/js/bundle.min.js?v=1.4"></script>
    <script type="text/javascript">
    (function(d, w, s) {
        var widgetHash = '3y5g3pb5rye5l2r5bfn5', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
        gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
        var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
    })(document, window, 'script');
    </script>
    <script type="text/javascript">
        _hcwp = window._hcwp || [];
        _hcwp.push({widget:"Stream", widget_id: 91643, social: "google, facebook, twitter, tumblr, livejournal"});
        (function() {
            if("HC_LOAD_INIT" in window)return;
            HC_LOAD_INIT = true;
            var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
            var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
            hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/91643/"+lang+"/widget.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hcc, s.nextSibling);
        })();
    </script>
    <script src="assets/main.min.js"></script>
</body>
</html>