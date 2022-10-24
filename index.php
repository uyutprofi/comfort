<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script defer src="https://www.googletagmanager.com/gtag/js?id=UA-158367382-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-158367382-1');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <link rel="stylesheet" href="app/css/bundle.min.css?v=1.2">-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,500i,600|Roboto:400,500,700&display=swap&subset=cyrillic" rel="stylesheet">-->
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,500i,600|Roboto:400,500,700&display=swap&subset=cyrillic" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant+Infant:400,500i,600|Roboto:400,500,700&display=swap&subset=cyrillic"></noscript>
    <link rel="stylesheet" href="assets/main.min.css?v=1.1">
    <title>ПРОФІ ЗАТИШОК</title>

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
                <a href="#" class="logo">Діагностика - БЕЗКОШТОВНО!</a>
                <nav class="main-nav">
                    <a href="#" class="nav-opener"><span></span></a>
                    <div class="nav-drop">
                        <ul id="nav">
                            <li><a href="#table-pricing">Прайс</a></li>
                            <li><a href="#review" data-href="#callback-btn-header">Відгуки</a></li>
                            <li><a href="#services">Сервіс</a></li>
                            <li><a href="#our-advantages">Наші переваги</a></li>
                            <li class="contact-list"><span id="contact-list-btn">Контакти</span>
                                <section class="call contact-drop-down">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <div class="phone_number">
                                        <span>08:30-21:00 Щоденно</span>
                                    </div>
                                    <?php
                                    $phone_numbers = [
                                        'day' => [
                                            'ks' => '+38 (068) 798-34-99',
                                            'mts' => '+38 (066) 617-15-18',
                                            'life' => '+38 (063) 789-18-59',
                                        ],
                                        'night' => [
                                            'ks' => '+38 (068) 798-34-99',
                                            'mts' => '+38 (066) 617-15-18',
                                            'life' => '+38 (063) 789-18-59',
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
                                        <span>Безкоштовний виїзд майстра та діагностика</span>
                                    </div>
                                    <div class="call_me">
                                        <button class="btn btn-default modal-b" type="submit" data-toggle="modal" data-target="#modal-callback">Передзвоніть мені</button>
                                    </div>
                                </section>
                            </li>
                            <li class="send-callback"><a href="#contact">Залишити заявку</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container">
                <span class="info">Працюємо! Донатимо! Разом Переможемо!</span>
            </div>
        </div>
        <div class="main-slider-wrapper">
            <div class="main-slider">
                <div class="main-slider__img" style="background-image: url(images/window-07.webp)"></div>
                <div class="main-slider__img" style="background-image: url(images/window-05.webp)"></div>
                <div class="main-slider__img" style="background-image: url(images/window-06.webp)"></div>
                <div class="main-slider__img" style="background-image: url(images/window-03.webp)"></div>
            </div>
            <div class="main-slogan">
                <h1><mark>Ремонт металопластикових вікон в Києві та області </mark></h1>
                <script>
                    function capitalizeFirstLetter(string) {
                        return string.charAt(0).toUpperCase() + string.slice(1);
                    }
                    if (document.location.href.indexOf('utm_term') > 0) {
                        var utmTerms = decodeURI(document.location.href.split('&utm_term=')[1].split('&')[0]);
                        document.getElementsByTagName("mark")[0].innerHTML = capitalizeFirstLetter(utmTerms.replace(/[^А-Яа-яЁё\s]/gi, ''));
                    }
                </script>
                <p><mark>СЕРВІС ПРИВАТНОГО МАЙСТРА «ПРОФІ ЗАТИШОК»</mark></p>
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
                <button class="btn btn-leave__request pulse-effect" type="submit" data-toggle="modal" data-target="#leave-request">Замовте безкоштовну діагностику прямо зараз!</button>
                <div class="heading">
                    <h2></h2>
                    <p>Сервіс приватного майстра "ПРОФІ ЗАТИШОК" пропонує професійне обслуговування та ремонт євровікон із пластику, дерева та алюмінію. Досвід більше 10 років. Зробимо все, щоб врятувати навіть найпроблемніші вікна. Готівковий та Безготівковий розрахунок! Чек і офіційна гарантія на роботи!
                </div>
                <div id="our-services">
                    <div class="services__items">
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/029-worker.svg" alt="">
                            </div>
                            <strong class="service__item-title">Заміна ущільнювача </strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/maintenance.svg" alt="">
                            </div>
                            <strong class="service__item-title">Регулювання вікон та дверей</strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/007-paint-roller.svg" alt="">
                            </div>
                            <strong class="service__item-title">Чистка та змащування механізмів </strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/002-blueprint-3.svg" alt="">
                            </div>
                            <strong class="service__item-title">Ремонт фурнітури вікон та дверей з пластику, євробрусу та алюмінію </strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/012-brickwall.svg" alt="">
                            </div>
                            <strong class="service__item-title">Герметизація щілин, усунення протягів </strong>
                        </div>
                        <div class="service__item">
                            <div class="service__item-img ">
                                <img src="images/icon/019-engineer-1.svg" alt="">
                            </div>
                            <strong class="service__item-title">Усунення запотівання скла</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-advantages" id="our-advantages">
            <div class="container">
                <div class="heading">
                    <h2>5 причин звернутися до нас:</h2>
                    <p> Залишаючи заявку, Ви можете бути впевнені, що працюєте з професіоналами!</p>
                </div>
                <ul class="items-our-advantages">
                    <li>
                        <div class="item-our-advantages">
                            <img src="images/icon/006-engineer-2.svg" alt="">
                            <div class="our-advantage__description">
                                <p>Це не фірма! По телефону Вас консультує безпосередньо майстер </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-our-advantages">
                            <img src="images/icon/002-blueprint-3.svg" alt="">
                            <div class="our-advantage__description">
                                <p>Фіскальний чек і реальна гарантія на роботи - 2 роки.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-our-advantages">
                            <img src="images/icon/022-truck.svg" alt="">
                            <div class="our-advantage__description">
                                <p>Майстер опрятний, ввічливий та зі змінним взуттям!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-our-advantages">
                            <img src="images/icon/030-engineer.svg" alt="">
                            <div class="our-advantage__description">
                                <p>Безкоштовна діагностика.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="price-table" id="table-pricing">
            <div class="container">
                <div class="heading">
                    <h2>Прайс-лист технічного обслуговування та ремонту віконних систем.</h2>
                </div>
                <div class="table-responsive">
                    <table id="table-pricing">
                        <tr>
                            <th class="name">Найменування</th>
                            <th class="name ">Одиниця<br> виміру</th>
                            <th class="name ">Ціна грн.</th>
                            <th class="name ">Опція</th>
                        </tr>
                        <tr>
                            <td>Регулювання вікна/балконних дверей</td>
                            <td class="center">створка/двері</td>
                            <td class="center td-width">150/200</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Повне ТО(чистка, змащування, регулювання механізму) вікна/балконних дверей</td>
                            <td class="center">створка/двері</td>
                            <td class="center td-width">250/300</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Регулювання вхідних пластикових/алюмінієвих дверей</td>
                            <td class="center">двері</td>
                            <td class="center td-width">від 400</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Ремонт фурнітури вікна/балконних дверей </td>
                            <td class="center">вікно/двері</td>
                            <td class="center td-width">от 250</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Заміна ущільнювача(пінополіуритан Німеччина)</td>
                            <td class="center">м.п</td>
                            <td class="center td-width">85</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Усунення дрібних щілин герметиком всередині/ззовні</td>
                            <td class="center">м.п</td>
                            <td class="center td-width">80</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Усунення широких щілин герметиком/підпінка відливу</td>
                            <td class="center">м.п</td>
                            <td class="center td-width">250</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Заміна поворотної ручки, Hoppe Німеччина</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">250</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Заміна нижніх петель вікно/двері</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">750/800</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Монтаж защілки + ручка курця</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">450</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Монтаж дитячого замка на вікно</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">350</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Встановлення приточно-вентиляційного клапана (усунення запотівання скла) </td>
                            <td class="center">шт.</td>
                            <td class="center td-width">700</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Перероблення фурнітури вікна/дверей на поворотно-відкидну (вказана тільки вартість робіт)</td>
                            <td class="center">створка</td>
                            <td class="center td-width">450/550</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Повна заміна механізму вікна/дверей</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">1700-3300</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Заміна секрету замка дверей (виріб+робота)</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">от 450</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Заміна замка дверей(виріб+робота)</td>
                            <td class="center">шт.</td>
                            <td class="center td-width">от 700</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Заміна пластикових декоративних частин на петлях</td>
                            <td class="center">комплект</td>
                            <td class="center td-width">70</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Регулювання дверного доводчика</td>
                            <td class="center">шт</td>
                            <td class="center td-width">300</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                            <td>Встановлення москітної сітки</td>
                            <td class="center">шт</td>
                            <td class="center td-width"> от 350</td>
                            <td class="center"><button class="btn" type="submit" data-toggle="modal" data-target="#leave-request">Замовити</button></td>
                        </tr>
                        <tr>
                    </table>
                </div>
                <div class="text-table">
                    <p>* По ремонту та заміні фурнітури(механізму) вказані приблизні ціни, більш точну інформацію майстер зможе надати на місці після діагностики.</p>
                </div>
            </div>
        </section>
        <section id="contact">
            <div id="contact-us">
                <div class="container" id="contacts">
                    <div class="heading">
                        <h2>Зворотній зв'язок</h2>
                        <p>Якщо у Вас виникли питання - Ви завжди можете зв'язатися з майстром, по вказаним нижче телефонам, або написати на e-mail</p>
                    </div>
                    <div class="row">
                        <form id="main-contact-form" name="contact-form" class="footer_form" data-event="contact-form" data-event-category="form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Ім'я">
                                <input type="hidden" name="form" class="form-control" value="Зворотній зв'язок">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Телефон">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" maxlength="200" placeholder="Введіть текст заявки"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-submit btn">Відправити заявку</button>
                            </div>
                        </form>
                        <div class="contact-us__img" style="background-image: url(images/window-08.webp");"></div>
                </div>
            </div>
</div>
</section>
</main>
<footer id="footer">
    <div class="container">
        <div class="address-row">
            <div class="address">
                <strong>Київ</strong>
                <address>Проспект Петра Григоренка 41</address>
                <address>вул.Княжий затон 17</address>
                <address>Бульвар Лесі Українки 28</address>
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
                <h5 class="modal-title">Залиште Ваш номер телефону, ми зв'яжемося з Вами та відповімо на усі питання!</h5>
            </div>
            <div class="modal-body">
                <p>
                <form class="modal-form" id="header_callback" data-event="callback" data-event-category="form">
                    <div class="input-with-icon">
                        <label for="fieldPhone">Введіть ваш номер телефону</label>
                        <i class="icon icon-Phone thirstphone"></i>
                        <input name="form" type="hidden" value="Передзвоніть мені">
                        <input id="fieldPhone" name="phone" type="text">
                    </div>
                    <button type="submit" class="btn formSub">Відправити</button>
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
                <h5 class="modal-title">Залиште Ваші дані, майстер зв'яжеться з Вами та відповість на усі питання!</h5>
            </div>
            <div class="modal-body">
                <p>
                <form class="modal-form" id="free_diagnostic" data-event="send" data-event-category="button">
                    <div class="input-with-icon">
                        <label for="fieldName">Введіть Ваше ім'я </label>
                        <input id="fieldName" name="name" type="text">
                    </div>
                    <div class="input-with-icon">
                        <label for="fieldPhone">Введіть Ваш номер телефону</label>
                        <i class="icon icon-Phone thirstphone"></i>
                        <input name="form" type="hidden" value="Залишити заявку">
                        <input id="fieldPhone" name="phone" type="text">
                    </div>
                    <button type="submit" class="btn formSub">Відправити</button>
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
                <h5 class="modal-title">Оформіть заявку на безкоштовну діагностику</h5>
            </div>
            <div class="modal-body">
                <p>
                <form class="modal-form">
                    <div class="input-with-icon">
                        <label for="phone-field">Залиште номер телефону і наш майстер зателефонує Вам</label>
                        <i class="icon icon-Phone thirstphone"></i>
                        <input type="hidden" name="form" class="form-control" value="Поп-ап: Заявка на безкоштовну діагностику">
                        <input id="phone-field" name="phone" type="text" placeholder="Телефон">
                    </div>
                    <button type="submit" class="btn diagnosticSub">Оформити заявку</button>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<script src='app/js/libs.min.js?v=1.3'></script>
<script src="./js/old-libs/mask.js"></script>
<!--    <script src="app/js/bundle.min.js?v=1.4"></script>-->
<div id="review">
    <div id="disqus_thread"></div>
</div>

<script src="assets/main.min.js?v=1.1"></script>

<script type="text/javascript">
    (function(d, w, s) {
        var widgetHash = '1zulbjamhfmxhjja9mfx', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
        gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
        var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
    })(document, window, 'script');
</script>
<!--  telegram widget-->
<script type="text/javascript">
    (function() {var script=document.createElement("script");script.type="text/javascript";script.async =true;script.src="//telegram.im/widget-button/index.php?id=@uyt_profi";document.getElementsByTagName("head")[0].appendChild(script);})();
</script>
<a href="https://telegram.im/@uyt_profi" target="_blank" class="telegramim_button telegramim_shadow telegramim_pulse" style="font-size:26px;width:48px;background:#27A5E7;box-shadow:1px 1px 5px #27A5E7;color:#FFFFFF;border-radius:100px;position:fixed;bottom: 70px;right: 10px;" title="Зв'язатися з УЮТ ПРОФИ"><i></i></a>
<!--  telegram widget end-->
<!--  viber widget-->
<a href="https://msng.link/o/?380687983499=vi" target="_blank" style="bottom: 67px;right: 67px;width:55px;position:fixed;" title="Зв'язатися з ПРОФІ ЗАТИШОК">
    <img src="images/viber.webp">
</a>
<!--  viber widget end-->

<script>

    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://oknaremont-kiev-ua.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//oknaremont-kiev-ua.disqus.com/count.js" defer></script>
</body>
</html>