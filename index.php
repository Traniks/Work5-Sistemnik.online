<?php
/*
	https://sistemnik.online?phrase_id=16030478513
	https://sistemnik.online?region_id=2
	https://sistemnik.online/?phrase_id=16030478513&region_id=3
	
	метка для заголовка и картинки phrase_id
	метка для города region_id
*/

/* if($_COOKIE["DevPL"]){
	echo "<br>_GET<pre>";
		print_r($_GET);
	echo "</pre>";
} */

$DefData = [
	"Title" => "Экспертный ремонт компьютерной техники у вас дома в течение 24 часов",
	"image" => "/assets/img/nout.webp",
	"city" => [
		"Москва",
		"Москве",
		"Москвы",
		"Московской",
		"всей Москве",
	],
];
require_once ("PL/UTMCheck.php");

/* if($_COOKIE["DevPL"]){
	echo "<br>PageUTMData<pre>";
		print_r($PageUTMData);
	echo "</pre>";
} */

?><!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description"
          content="Ремонт компьютерной техники <?php echo $PageUTMData["city"][0];?> и МО">
    <meta name="keywords" content="Ремонт компьютеров
                Компьютерный сервис
                Техническая поддержка ПК
                Восстановление данных
                Обслуживание компьютеров
                Устранение неисправностей ПК
                Замена комплектующих
                Диагностика ПК
                Ремонт ноутбуков
                Сервисный центр в <?php echo $PageUTMData["city"][1];?>
                Мастер по ремонту ПК
                Компьютерная помощь
                Ремонт ПК на дому
                Восстановление работоспособности ПК
                Профессиональный ремонт компьютерной техники">
    <meta name="author"
          content="Ремонт компьютерной техники sistemnik.online">
    <title>Ремонт компьютерной техники <?php echo $PageUTMData["city"][0];?> и МО</title>
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KJT7C8QC');</script>
	<!-- End Google Tag Manager -->

    <style>
        .hide {
            display: none !important;
        }
        @media (min-width: 1001px) {
            .item-selected {
                margin-bottom: 50px !important;
            }
            .item-selected_2 {
                margin-bottom: 50px !important;
            }
        }
        @media (max-width: 1000px) {
            .carousel__slide {
                width: 180% !important;
            }
        }
        .navbar__social-tel .choise__link-get:hover {
            color: #D21341;    
}
    </style>

    <link rel="stylesheet" crossorigin href="./assets/scss/slyder.css" />
    <link href="./assets/scss/main.css?v=3" rel="stylesheet">
    <link rel="stylesheet" href="./assets/font/stylesheet.css">
    <link rel="apple-touch-icon"
          href="./assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="./assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="./assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/img/favicon/site.webmanifest">
    <link rel="preload" href="./assets/img/info.webp" as="image">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
</head>

<body>
<div class="modalbox">
    <div class="container">
        <div class="modalbox__content">
            <div class="modalbox__close">
                <button class="get__popup modalbox__close-item"><img
                        src="./assets/img/ico/close.svg"
                        alt="close"></button>
            </div>
            <div class="modalbox__intro">
                <h1>Введите Ваш номер</h1>
                <form action="./assets/php/telegram.php" method="POST">
                    <input placeholder="+7 XXX XXX XX XX"
                           class="telephone__id modalbox__input"
                           name="user__phone" required>
                    <button
                    onclick="ym(96823870, 'reachGoal', 'button_37'); return true;"
                            class="modal__send btn__red">Отправить
                    </button>
                    <div class="modalbox__subtitle">
                        <input type="checkbox" name="modalbox__subtitle"
                               id="modalbox__subtitle" checked>
                        <p>Я даю согласие на обработку моих персональных
                            данных в соответствии с <a target="_blank"
                                                       href="Политика_Конфиденциальности.pdf">Политикой
                                конфиденциальности</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modalbox__diagnostics">
    <div class="container">
        <div class="modalbox__content">
            <div class="modalbox__close">
                <button
                        class="get__free-diagnostic modalbox__close-item"><img
                        src="./assets/img/ico/close.svg"
                        alt="close"></button>
            </div>
            <div class="modalbox__intro">
                <h1>Введите Ваш номер</h1>
                <h2>Для заказа бесплатной диагностики</h2>
                <form action="./assets/php/telegram.php" method="POST">
                    <input placeholder="+7 XXX XXX XX XX"
                           class="telephone__id modalbox__input"
                           name="user__phone" required>
                    <button
                    onclick="ym(96823870, 'reachGoal', 'button_39'); return true;"
                            class="modal__send btn__red">Отправить
                    </button>
                    <div class="modalbox__subtitle">
                        <input type="checkbox" name="modalbox__subtitle"
                               id="modalbox__subtitle" checked>
                        <p>Я даю согласие на обработку моих персональных
                            данных в соответствии с <a target="_blank"
                                                       href="Политика_Конфиденциальности.pdf">Политикой
                                конфиденциальности</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modalbox__master">
    <div class="container">
        <div class="modalbox__content">
            <div class="modalbox__close">
                <button class="get__master modalbox__close-item"><img
                        src="./assets/img/ico/close.svg"
                        alt="close"></button>
            </div>
            <div class="modalbox__intro">
                <h1>Введите Ваш номер</h1>
                <h2>Для вызова мастера</h2>
                <form action="./assets/php/telegram.php" method="POST">
                    <input placeholder="+7 XXX XXX XX XX"
                           class="telephone__id modalbox__input"
                           name="user__phone" required>
                    <button
                    onclick="ym(96823870, 'reachGoal', 'button_38'); return true;"
                            class="modal__send btn__red">Отправить
                    </button>
                    <div class="modalbox__subtitle">
                        <input type="checkbox" name="modalbox__subtitle"
                               id="modalbox__subtitle" checked>
                        <p>Я даю согласие на обработку моих персональных
                            данных в соответствии с <a target="_blank"
                                                       href="Политика_Конфиденциальности.pdf">Политикой
                                конфиденциальности</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modalbox__review">
    <div class="container">
        <div class="modalbox__content">
            <div class="modalbox__close">
                <button class="get__review modalbox__close-item"><img
                        src="./assets/img/ico/close.svg"
                        alt="close"></button>
            </div>
            <div class="modalbox__intro">
                <img class="modalbox__qr-item"
                     src="./assets/img/qrcode.webp" alt="qr">
                <h2>Для того чтобы оставить свой отзыв, отсканируйте QR код</h2>
            </div>
        </div>
    </div>
</div>
<div class="modalbox__price">
    <div class="container">
        <div class="modalbox__content">
            <div class="modalbox__close">
                <button
                        class="get__price-popup modalbox__close-item"><img
                        src="./assets/img/ico/close.svg"
                        alt="close"></button>
            </div>
            <div class="modalbox__intro">
                <h1 class="service__title">Введите Ваш номер</h1>
                <h2>Для заказа бесплатной диагностики</h2>
                <form action="./assets/php/telegram.php" method="POST">
                    <input placeholder="+7 XXX XXX XX XX"
                           class="telephone__id modalbox__input"
                           name="user__phone" required>
                    <button
                    onclick="ym(96823870, 'reachGoal', 'button_40'); return true;"
                            class="modal__send btn__red">Отправить
                    </button>
                    <div class="modalbox__subtitle">
                        <input type="checkbox" name="modalbox__subtitle"
                               id="modalbox__subtitle" checked>
                        <p>Я даю согласие на обработку моих персональных
                            данных в соответствии с <a target="_blank"
                                                       href="Политика_Конфиденциальности.pdf">Политикой
                                конфиденциальности</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modalbox-contact__messenge">
    <div class="modalbox__contact" id="modalbox__contact">
        <div class="modal__content">
            <span class="close" onclick="close__modal_mes()">&times;</span>
            <h2>напишите в удобный <br> вам мессенджер</h2>
            <div class="navbar__social-icons">
                <a 
                onclick="ym(96823870, 'reachGoal', 'button_35'); return true;"
                href="https://telegram.org/"><img
                        src="./assets/img/ico/telegram.svg"
                        alt="telegram"></a>
                <a 
                onclick="ym(96823870, 'reachGoal', 'button_36'); return true;"
                href="https://web.whatsapp.com/"><img
                        src="./assets/img/ico/whatsapp.svg"
                        alt="whatsapp"></a>
            </div>
            <div class="modalbox__subtitle">
                <input type="checkbox" name="modalbox__subtitle"
                    id="modalbox__subtitle" checked>
                <p>Я даю согласие на обработку моих персональных
                    данных в соответствии с <a target="_blank"
                                            href="Политика_Конфиденциальности.pdf">Политикой
                        конфиденциальности</a></p>
            </div>
        </div>
    </div>
</div>

<div class="modalbox-contact__tel">
    <div class="modalbox__contact" id="modalbox__contact">
        <div class="modal__content">
            <span class="close" onclick="close__modal_tel()">&times;</span>
            <h2>ДЛЯ ЗВОНКА В КОЛЛЦЕНТР НАЖМИТЕ<br>КНОПКУ ПОКАЗАТЬ НОМЕР</h2>
            <a class="tell"
            onclick="ym(96823870, 'reachGoal', 'button_34'); return true;"
            href="tel:+79255553535">+7 925 555 35 35<span id="my-button">ПОКАЗАТЬ</span></a>
            <div class="modalbox__subtitle">
                <input type="checkbox" name="modalbox__subtitle"
                    id="modalbox__subtitle" checked>
                <p>Я даю согласие на обработку моих персональных
                    данных в соответствии с <a target="_blank"
                                            href="Политика_Конфиденциальности.pdf">Политикой
                        конфиденциальности</a></p>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="navbar">
        <div class="container">
            <div class="navbar__content">
                <div class="navbar__brand">
                    <div class="navbar__logo">
                        <a href="/"><img
                            src="./assets/img/Sistemnik.svg"
                            src="./assets/img/Sistemnik.png"
                            src="./assets/img/Sistemnik.jpg"
                            src="./assets/img/Sistemnik.webp"
                                alt="logo"></a>
                    </div>
                    <div class="navbar__slogan">
                        <p>Сервисный центр в <?php echo $PageUTMData["city"][1];?>!</p>
                    </div>
                </div>
                <div style="display: flex;align-items: center;">
                    <div class="navbar__social">
                        <div class="navbar__social-tel" >
                            <div class="navbar__social-tel-ico get__popup choise__link-get" onclick="ym(96823870, 'reachGoal', 'button_1'); return true;" style="cursor: pointer;"><img
                                    src="./assets/img/ico/tel_small.svg"
                                    alt="tel" 
                                    ></div>
                                    
                            <div style="display: flex;flex-direction: column;">
                                <a
                                onclick="bloc_open_tel();ym(96823870, 'reachGoal', 'button_2'); return true;">+7 925 555 35 35
                            <span>смотреть</span></a>
                                <a class="get__popup choise__link-get" style="margin-left: 35px;font-size: 16px;margin-top: 3px;"
                                        href="#"
                                        onclick="ym(96823870, 'reachGoal', 'button_3'); return true;"
                                >Заказать звонок</a>
                            </div>
                            
                            </div>
                                
                            
                            </div>
                        <div class="navbar__social-icons">
                            <a onclick="bloc_open_mes();ym(96823870, 'reachGoal', 'button_4'); return true;"><img
                                    src="./assets/img/ico/telegram.svg"
                                    alt="telegram"
                                    ></a>
                            <a onclick="bloc_open_mes();ym(96823870, 'reachGoal', 'button_5'); return true;"><img
                                    src="./assets/img/ico/whatsapp.svg"
                                    alt="whatsapp"
                                    ></a>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar__mob">
        <div class="container">
            <div class="navbar__content">
                <div class="navbar__brand">
                    <div class="navbar__logo">
                        <a href="/"><img
                                src="./assets/img/Sistemnik.svg"
                                src="./assets/img/Sistemnik.png"
                                src="./assets/img/Sistemnik.jpg"
                                src="./assets/img/Sistemnik.webp"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="navbar__social-tel" style="flex-direction: column;"><a
                    onclick="bloc_open_tel();ym(96823870, 'reachGoal', 'button_2'); return true;">+7 925 555 35 35
                    <span id="my-button-mob">смотреть</span></a>
                    <a class="get__popup choise__link-get" style="margin-left: 25px;    font-size: 13px;"
                                        href="#"
                                        onclick="ym(96823870, 'reachGoal', 'button_3'); return true;"
                                >Заказать звонок</a>
                </div>
                <div class="navbar__social-icons">
                    <a onclick="bloc_open_mes();ym(96823870, 'reachGoal', 'button_4'); return true;"><img src="./assets/img/ico/telegram.svg"
                                                     alt="telegram"></a>
                    <a onclick="bloc_open_mes();ym(96823870, 'reachGoal', 'button_5'); return true;"><img src="./assets/img/ico/whatsapp.svg"
                                                     alt="whatsapp"></a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="info">
        <div class="container">
            <div class="info__content">
                <div class="info__intro-wrapper">
                    <div class="info__flagship">
                        <div class="info__flagship-item">
                            <img src="./assets/img/ico/flag.svg"
                                 alt="flag_1">
                            <p>Исправим проблему или ремонт<br>
                                <span class="info__bold">за<br><span class="info__bold-1">наш</span><br>счет</span>
                            </p>
                        </div>
                        <div class="info__flagship-item">
                            <img src="./assets/img/ico/flag.svg"
                                 alt="flag_2">
                            <p>Оплата по договору с гарантией на<br><br>
                                <span class="info__bold"><span class="info__bold-1">365</span><br>дней</span>
                            </p>
                        </div>
                    </div>
                    <div class="info__intro">
                        <h2><?php echo $PageUTMData["Title"];?></h2>
                    </div>
                    <div class="info__img-mob">
                        <img src="./assets/img/nout.webp" alt="nout"
                             loading="lazy">
                        <div class="info__img-flagship">
                            <div class="info__flagship-item">
                                <img src="./assets/img/ico/flag.svg"
                                     alt="flag_1">
                                <p>Исправим проблему или ремонт<br>
                                    <span class="info__bold">за<br><span class="info__bold-1">наш</span><br>счет</span>
                                </p>
                            </div>
                            <div class="info__flagship-item">
                                <img src="./assets/img/ico/flag.svg"
                                     alt="flag_2">
                                <p>Оплата по договору с гарантией на<br><br>
                                    <span class="info__bold"><span class="info__bold-1">365</span><br>дней</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="info__cards">
                        <div class="info__card-wrapper">
                            <div class="info__card-item">
                                <div class="info__card-img"><img
                                        src="./assets/img/ico/diagnostics_red.svg"
                                        alt="Диагностика"
                                        loading="lazy"></div>
                                <div class="info__card-txt">
                                    <p>Выезд и диагностика бесплатно</p>
                                </div>
                            </div>
                            <div class="info__card-item">
                                <div class="info__card-img"><img
                                        src="./assets/img/ico/price_red.svg"
                                        alt="Диагностика"
                                        loading="lazy"></div>
                                <div class="info__card-txt">
                                    <p>Цены от 490 рублей</p>
                                </div>
                            </div>
                        </div>
                        <div class="info__card-wrapper">
                            <div class="info__card-item">
                                <div class="info__card-img"><img
                                        src="./assets/img/ico/discount_red.svg"
                                        alt="Диагностика"
                                        loading="lazy"></div>
                                <div class="info__card-txt">
                                    <p>Скидка 20% на первое
                                        обращение</p>
                                </div>
                            </div>
                            <div class="info__card-item">
                                <div class="info__card-img"><img
                                        src="./assets/img/ico/location_red.svg"
                                        alt="Диагностика"
                                        loading="lazy"></div>
                                <div class="info__card-txt">
                                    <p>Выезжаем по <?php echo $PageUTMData["city"][4];?> <br> и
                                        <?php echo $PageUTMData["city"][3];?>
                                        области</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info__link">
                        <button onclick="ym(96823870, 'reachGoal', 'button_6'); return true;" class="get__master btn__red">Вызвать
                            мастера
                        </button>
                    </div>
                </div>
                <div class="info__img">
                    <!-- <img src="./assets/img/nout.webp" alt="nout"
                         loading="lazy"> -->
					<img src="<?php echo $PageUTMData["image"];?>" alt="nout"
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <section class="choise">
        <div class="container">
            <div class="choise__content">
                <div class="choise__intro">
                    <h2 class="base__title">Почему Нас Выбирают По
                        <?php echo $PageUTMData["city"][4];?> и <?php echo $PageUTMData["city"][3];?> Области?<br><span>. .
                                    .</span></h2></div>
                <div class="choise__cards-wrapper">
                    <div class="choise__card-item">
                        <div class="choise__card-ico"><img
                                src="./assets/img/ico/time_black.svg"
                                alt="time"></div>
                        <div class="choise__card-txt">
                            <h2>Быстрый и надежный сервис:</h2>
                            <p>. . .
                                <br>Гарантируем прибытие мастера в
                                течение 2 часов после вашего вызова
                                в
                                рабочее время.</p>
                        </div>
                    </div>
                    <div class="choise__card-item">
                        <div class="choise__card-ico"><img
                                src="./assets/img/ico/price_black.svg"
                                alt="time"></div>
                        <div class="choise__card-txt">
                            <h2>Прозрачное ценообразование:</h2>
                            <p>. . .
                                <br>Цены от 490 рублей без скрытых
                                платежей. Вы знаете стоимость
                                ремонта
                                заранее. Кнопка <a
                                class="whatsapp__link"
                                onclick="bloc_open_mes()" style="display: unset;">whatsapp</a>
                                и
                                <a 
                                   class="telegram__link"
                                   onclick="bloc_open_mes()" style="display: unset;">telegram</a>
                                -
                                расскажите что у вас сломалось.</p>
                        </div>
                    </div>
                    <div class="choise__card-item">
                        <div class="choise__card-ico"><img
                                src="./assets/img/ico/delivery_black.svg"
                                alt="time"></div>
                        <div class="choise__card-txt">
                            <h2>Бесплатная диагностика и выезд:</h2>
                            <p>. . .
                                <br>Мы не берем плату за выезд и
                                диагностику — платите только за
                                ремонт.</p>
                        </div>
                    </div>
                    <div class="choise__card-item">
                        <div class="choise__card-ico"><img
                                src="./assets/img/ico/discount_black.svg"
                                alt="time"></div>
                        <div class="choise__card-txt">
                            <h2>Скидка на первое обращение:</h2>
                            <p>. . .
                                <br>Получите 20% скидку на ваш
                                первый
                                ремонт. Заботимся о наших новых
                                клиентах.</p>
                        </div>
                    </div>
                    <div class="choise__card-item">
                        <div class="choise__card-ico"><img
                                src="./assets/img/ico/master_black.svg"
                                alt="time"></div>
                        <div class="choise__card-txt">
                            <h2>Опытные и сертифицированные
                                мастера:</h2>
                            <p>. . .
                                <br>Наши мастера прошли сертификацию
                                и
                                регулярно повышают свою
                                квалификацию.</p>
                        </div>
                    </div>
                    <div class="choise__card-item">
                        <div class="choise__card-ico"><img
                                src="./assets/img/ico/avialability_black.svg"
                                alt="time"></div>
                        <div class="choise__card-txt">
                            <h2>Удобство и доступность:</h2>
                            <p>. . .
                                <br>Обслуживаем всю территорию
                                <?php echo $PageUTMData["city"][2];?> и
                                <?php echo $PageUTMData["city"][3];?> области, работаем
                                круглосуточно CTA: <a
                                        class="get__popup choise__link-get"
                                        onclick="ym(96823870, 'reachGoal', 'button_7'); return true;"
                                        href="#" style="color: red;">Заказать
                                    бесплатную
                                    диагностику</a></p>
                        </div>
                    </div>
                    <div class="choise__card-item">
                        <div class="choise__card-ico"><img
                                src="./assets/img/ico/time_black.svg"
                                alt="time"></div>
                        <div class="choise__card-txt">
                            <h2>Гарантия <br> на ремонт:</h2>
                            <p>. . .
                                <br>Мы предоставляем годовую
                                гарантию на
                                запчасти и все выполненные
                                работы</p>
                        </div>
                    </div>
                    <div
                            class="choise__card-black choise__card-item"><img
                            src="./assets/img/diagnostic.webp"
                            alt="diagnostic">
                        <button
                        onclick="ym(96823870, 'reachGoal', 'button_8'); return true;"
                                class="get__free-diagnostic btn__red">Заказать
                            бесплатную диагностику
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="save">
        <div class="container">
            <div class="save__content">
                <div class="save__intro">
                    <h2 class="base__title">Так Мы Спасаем Вашу
                        Технику
                        <span>. . .</span></h2></div>
                <div class="save__cards-wrapper">
                    <div class="save__card-item">
                        <div class="save__card-head">
                            <div class="save__card-next">
                                <p>Шаг</p><img
                                    src="./assets/img/ico/next.svg"
                                    alt="next"></div>
                            <div class="save__card-number">
                                <h3>01</h3>
                            </div>
                        </div>
                        <div class="save__card-body">
                            <h2>Заявка и Консультация:</h2>
                            <p>. . .
                                <br>Оставьте заявку на сайте или
                                позвоните по нашему бесплатному
                                номеру.
                                Наш консультант свяжется с вами в
                                течение 5 минут, чтобы уточнить
                                детали и
                                запланировать визит мастера. -
                            </p>
                        </div>
                    </div>
                    <div class="save__card-item">
                        <div class="save__card-head">
                            <div class="save__card-next">
                                <p>Шаг</p><img
                                    src="./assets/img/ico/next.svg"
                                    alt="next"></div>
                            <div class="save__card-number">
                                <h3>02</h3>
                            </div>
                        </div>
                        <div class="save__card-body">
                            <h2>Подготовка <br> к Визиту</h2>
                            <p>. . .
                                <br>Перед визитом мы отправим вам
                                SMS и
                                электронное письмо с информацией о
                                мастере, включая его имя, а также
                                предполагаемое время прибытия. -
                            </p>
                        </div>
                    </div>
                    <div class="save__card-item">
                        <div class="save__card-head">
                            <div class="save__card-next">
                                <p>Шаг</p><img
                                    src="./assets/img/ico/next.svg"
                                    alt="next"></div>
                            <div class="save__card-number">
                                <h3>03</h3>
                            </div>
                        </div>
                        <div class="save__card-body">
                            <h2>Бесплатная Диагностика на Месте</h2>
                            <p>. . .
                                <br>Мастер проведет полную
                                диагностику,
                                объяснит причину неисправности и
                                предложит оптимальные варианты
                                ремонта с
                                точной оценкой стоимости</p>
                        </div>
                    </div>
                    <div class="save__card-item">
                        <div class="save__card-head">
                            <div class="save__card-next">
                                <p>Шаг</p><img
                                    src="./assets/img/ico/next.svg"
                                    alt="next"></div>
                            <div class="save__card-number">
                                <h3>04</h3>
                            </div>
                        </div>
                        <div class="save__card-body">
                            <h2>Согласование Плана Ремонта</h2>
                            <p>. . .
                                <br>Вы решаете, какие работы будут
                                выполнены. Мы не начинаем ремонт без
                                вашего полного согласия на условия и
                                стоимость.</p>
                        </div>
                    </div>
                    <div class="save__card-item">
                        <div class="save__card-head">
                            <div class="save__card-next">
                                <p>Шаг</p><img
                                    src="./assets/img/ico/next.svg"
                                    alt="next"></div>
                            <div class="save__card-number">
                                <h3>05</h3>
                            </div>
                        </div>
                        <div class="save__card-body">
                            <h2>Выполнение <br> Ремонта</h2>
                            <p>. . .
                                <br>Мастер использует только
                                сертифицированные запчасти и
                                современные
                                инструменты для ремонта. Вся работа
                                занимает обычно не более нескольких
                                часов.</p>
                        </div>
                    </div>
                    <div class="save__card-item">
                        <div class="save__card-head">
                            <div class="save__card-next">
                                <p>Шаг</p><img
                                    src="./assets/img/ico/next.svg"
                                    alt="next"></div>
                            <div class="save__card-number">
                                <h3>06</h3>
                            </div>
                        </div>
                        <div class="save__card-body">
                            <h2>Проверка и Тестирование</h2>
                            <p>. . .
                                <br>После ремонта мастер проведет
                                полное
                                тестирование, чтобы убедиться, что
                                все
                                работает идеально.
                            </p>
                        </div>
                    </div>
                    <div class="save__card-item">
                        <div class="save__card-head">
                            <div class="save__card-next">
                                <p>Шаг</p><img
                                    src="./assets/img/ico/next.svg"
                                    alt="next"></div>
                            <div class="save__card-number">
                                <h3>07</h3>
                            </div>
                        </div>
                        <div class="save__card-body">
                            <h2>Гарантия и Поддержка</h2>
                            <p>. . .
                                <br>Вы получаете гарантийный талон
                                на
                                выполненные работы. Если у вас
                                возникнут
                                вопросы или дополнительные
                                потребности,
                                наша служба поддержки всегда к вашим
                                услугам.
                            </p>
                        </div>
                    </div>
                    <div
                            class="save__card-black save__card-item"><img
                            src="./assets/img/technique.webp"
                            alt="technique">
                        <button onclick="ym(96823870, 'reachGoal', 'button_9'); return true;"
                        class="get__master btn__red">Вызвать
                            мастера
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price">
        <div class="container">
            <div class="price__content">
                <div class="price__intro">
                    <h2 class="base__title">Понятные Цены на Ремонт
                        <span>. . .</span></h2>
                    <p class="base__subtitle">Найдите Решение Вашей
                        Проблемы. Мы стремимся к полной прозрачности
                        в
                        наших ценах. Ниже вы найдете детальный
                        список
                        проблем и соответствующих им цен на
                        услуги.</p>
                </div>
                <div class="price__table">
                    <div class="price__content">
                        <table>
                            <thead>
                            <tr>
                                <th
                                        class="table_top-left-td"></th>
                                <th>Проблема</th>
                                <th>Диагностические работы</th>
                                <th
                                        class="table_top-right-td">Цена
                                    от
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_10'); return true;">
                                <td><img
                                        src="./assets/img/ico/pricelist/power_1.svg"
                                        alt="Не включается"></td>
                                <td>Не включается</td>
                                <td>Проверка питания,
                                    материнской
                                    платы и т.д
                                </td>
                                <td>2000₽</td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_11'); return true;">
                                <td class="table__td"><img
                                        src="./assets/img/ico/pricelist/virus_2.svg"
                                        alt="Вирусы"></td>
                                <td>Вирусы</td>
                                <td>Сканирование, удаление
                                    вирусов и
                                    установка антивируса
                                </td>
                                <td
                                        class="table__right-td">1000₽
                                </td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_12'); return true;">
                                <td><img
                                        src="./assets/img/ico/pricelist/slowwork_3.svg"
                                        alt="Медленная работа"></td>
                                <td>Медленная работа</td>
                                <td>Оптимизация системы,
                                    увеличение
                                    памяти и т.д.
                                </td>
                                <td>1500₽</td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_13'); return true;">
                                <td class="table__td"><img
                                        src="./assets/img/ico/pricelist/display_4.svg"
                                        alt="Проблемы с дисплеем"></td>
                                <td>Проблемы с дисплеем</td>
                                <td>Замена экрана или ремонт
                                    подсветки
                                </td>
                                <td
                                        class="table__right-td">2500₽
                                </td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_14'); return true;">
                                <td><img
                                        src="./assets/img/ico/pricelist/memory_5.svg"
                                        alt="Повреждение данных"></td>
                                <td>Повреждение данных</td>
                                <td>Восстановление данных,
                                    ремонт
                                    жесткого диска
                                </td>
                                <td>3000₽</td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_15'); return true;">
                                <td class="table__td"><img
                                        src="./assets/img/ico/pricelist/keyboard_6.svg"
                                        alt="Не работает клавиатура"></td>
                                <td>Не работает клавиатура</td>
                                <td>Диагностика соединений,
                                    замена
                                    клавиатуры
                                </td>
                                <td
                                        class="table__right-td">1000₽
                                </td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_16'); return true;">
                                <td><img
                                        src="./assets/img/ico/pricelist/audio_7.svg"
                                        alt="Проблемы со звуком"></td>
                                <td>Проблемы со звуком</td>
                                <td>Проверка аудио-выходов,
                                    драйверов, ремонт звуковой
                                    карты
                                </td>
                                <td>2000₽</td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_17'); return true;">
                                <td class="table__td"><img
                                        src="./assets/img/ico/pricelist/wifi_8.svg"
                                        alt="Проблемы с Wi-Fi"></td>
                                <td>Проблемы с Wi-Fi</td>
                                <td>Диагностика сетевых
                                    настроек,
                                    ремонт Wi-Fi адаптера
                                </td>
                                <td
                                        class="table__right-td">2000₽
                                </td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_18'); return true;">
                                <td><img
                                        src="./assets/img/ico/pricelist/temp_9.svg"
                                        alt="Перегревается"></td>
                                <td>Перегревается</td>
                                <td>Чистка от пыли, замена
                                    термопасты, проверка системы
                                    охлаждения
                                </td>
                                <td>2000₽</td>
                            </tr>
                            <tr class="get__price-popup" onclick="ym(96823870, 'reachGoal', 'button_19'); return true;">
                                <td class="table_last-td"><img
                                        src="./assets/img/ico/pricelist/usb_10.svg"
                                        alt="Не читает USB-устройства"></td>
                                <td>Не читает
                                    USB-устройства
                                </td>
                                <td>Проверка USB-портов, ремонт
                                    контроллера USB
                                </td>
                                <td
                                        class="table_right-last-td">2000₽
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="price__exclam">
                    <div class="price__exclam-intro"><img
                            src="./assets/img/ico/exclam.svg"
                            alt="exclam">
                        <p>Цены указаны ориентировочно и могут
                            варьироваться в зависимости от
                            конкретной
                            модели и сложности работы. Окончательная
                            стоимость ремонта определяется после
                            бесплатной диагностики на месте. Мы
                            гарантируем отсутствие скрытых
                            платежей.</p>
                    </div>
                    <div class="price__exclam-btn">
                        <button class="get__master btn__red" onclick="ym(96823870, 'reachGoal', 'button_20'); return true;">Вызвать
                            мастера
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price__mob">
        <div class="container">
            <div class="price__mob-intro">
                <h2 class="base__title">Понятные Цены на Ремонт
                    <span>.
                                . .</span></h2>
                <p class="base__subtitle">Найдите Решение Вашей
                    Проблемы. Мы стремимся к полной прозрачности в
                    наших
                    ценах. Ниже вы найдете детальный список проблем
                    и
                    соответствующих им цен на услуги.</p>
            </div>
            <div class="price__mob-wrapper">
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_10'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/power_1.svg"
                            alt="Не включается"></div>
                    <div class="price__mob-item-txt">
                        <h2>Не включается</h2>
                        <p>Проверка питания, материнской платы и
                            т.д</p>
                        <h3>2000₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_11'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/virus_2.svg"
                            alt="Вирусы"></div>
                    <div class="price__mob-item-txt">
                        <h2>Вирусы</h2>
                        <p>Сканирование, удаление вирусов и
                            установка
                            антивируса</p>
                        <h3>1000₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_12'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/slowwork_3.svg"
                            alt="Медленная работа"></div>
                    <div class="price__mob-item-txt">
                        <h2>Медленная работа</h2>
                        <p>Оптимизация системы, увеличение памяти и
                            т.д.</p>
                        <h3>1500₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_13'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/display_4.svg"
                            alt="Проблемы с дисплеем"></div>
                    <div class="price__mob-item-txt">
                        <h2>Проблемы с дисплеем</h2>
                        <p>Замена экрана или ремонт подсветки</p>
                        <h3>2500₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_14'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/memory_5.svg"
                            alt="Повреждение данных"></div>
                    <div class="price__mob-item-txt">
                        <h2>Повреждение данных</h2>
                        <p>Восстановление данных, ремонт жесткого
                            диска</p>
                        <h3>3000₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_15'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/keyboard_6.svg"
                            alt="Не работает клавиатура"></div>
                    <div class="price__mob-item-txt">
                        <h2>Не работает клавиатура</h2>
                        <p>Диагностика соединений, замена
                            клавиатуры</p>
                        <h3>1000₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_16'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/audio_7.svg"
                            alt="Проблемы со звуком"></div>
                    <div class="price__mob-item-txt">
                        <h2>Проблемы со звуком</h2>
                        <p>Проверка аудио-выходов, драйверов, ремонт
                            звуковой карты</p>
                        <h3>2000₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_17'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/wifi_8.svg"
                            alt="Проблемы с Wi-Fi"></div>
                    <div class="price__mob-item-txt">
                        <h2>Проблемы с Wi-Fi</h2>
                        <p>Диагностика сетевых настроек, ремонт
                            Wi-Fi
                            адаптера</p>
                        <h3>2000₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_18'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/temp_9.svg"
                            alt="Перегревается"></div>
                    <div class="price__mob-item-txt">
                        <h2>Перегревается</h2>
                        <p>Чистка от пыли, замена термопасты,
                            проверка
                            системы охлаждения</p>
                        <h3>2000₽</h3></div>
                </div>
                <div class="price__mob-item get__popup" onclick="ym(96823870, 'reachGoal', 'button_19'); return true;">
                    <div class="price__mob-item-img"><img
                            src="./assets/img/ico/pricelist/usb_10.svg"
                            alt="Не читает USB-устройства"></div>
                    <div class="price__mob-item-txt">
                        <h2>Не читает USB-устройства</h2>
                        <p>Проверка USB-портов, ремонт контроллера
                            USB</p>
                        <h3>2000₽</h3></div>
                </div>
            </div>
            <div class="price__exclam">
                <div class="price__exclam-intro"><img
                        src="./assets/img/ico/exclam.svg"
                        alt="exclam">
                    <p>Цены указаны ориентировочно и могут
                        варьироваться
                        в зависимости от конкретной модели и
                        сложности
                        работы. Окончательная стоимость ремонта
                        определяется после бесплатной диагностики на
                        месте. Мы гарантируем отсутствие скрытых
                        платежей.</p>
                </div>
                <div class="price__exclam-btn">
                    <button 
                    onclick="ym(96823870, 'reachGoal', 'button_20'); return true;"
                    class="btn__red get__popup">Вызвать
                        мастера
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="zone" style="display: none;">
        <div class="container">
            <div class="zone__content">
                <div class="zone__intro">
                    <h2 class="base__title">Наши Зоны Обслуживания:
                        <span>. . .</span></h2>
                    <p class="base__subtitle">Наша команда готова
                        приехать к вам и предоставить
                        профессиональные
                        услуги по ремонту в любую точку <?php echo $PageUTMData["city"][2];?> и
                        <?php echo $PageUTMData["city"][3];?> области. Ниже вы найдете карту с
                        обозначенными зонами обслуживания.</p>
                </div>
                <div class="zone__maps">
                    <div class="zone__item">
                        <div class="map-container">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A03853d197f0e53af8aa7948e2770f432c8cfbe6564774b2ddda1e4252e0bc009&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                        </div>
                    </div>
                    <div class="zone__links">
                        <div class="zone__maps-intro">
                            <h2>Список городов</h2></div>
                        <div class="zone__nav">
                            <nav>
                                <ul class="zone__nav-links-random">
                                    <li><a
                                            href="#">Балашиха</a></li>
                                    <li><a
                                            href="#">Бронницы</a></li>
                                    <li><a href="#">Верея</a></li>
                                    <li><a href="#">Видное</a></li>
                                    <li><a
                                            href="#">Волоколамск</a></li>
                                    <li><a
                                            href="#">Воскресенск</a></li>
                                    <li><a
                                            href="#">Высоковск</a></li>
                                    <li><a
                                            href="#">Голицыно</a></li>
                                    <li><a
                                            href="#">Дзержинский</a></li>
                                    <li><a href="#">Дмитров</a></li>
                                    <li><a
                                            href="#">Долгопрудный</a></li>
                                    <li><a
                                            href="#">Домодедово</a></li>
                                    <li><a href="#">Дрезна</a></li>
                                    <li><a href="#">Дубна</a></li>
                                    <li><a
                                            href="#">Егорьевск</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="zone__form">
                            <div class="zone__form-intro">
                                <h2>Операторы готовы принять ваш
                                    заказ</h2>
                                <div class="zone__form-tel"><img
                                        src="./assets/img/ico/whatsapp-black.svg"
                                        alt="tel"> <a
                                        onclick="bloc_open_tel();ym(96823870, 'reachGoal', 'button_21'); return true;">+7
                                    925
                                    555 35 35 <span id="my-button-garanty" style="top: auto; padding: 1px 10px;margin-left: -87px;">смотреть</span></a></div>
                                <div class="zone__request">
                                    <form
                                            action="./assets/php/telegram.php"
                                            method="POST">
                                        <input type="tel"
                                               placeholder="Введите ваш номер"
                                               name="user__phone"
                                               class="telephone__id zone__request-input-item"
                                               id="telephone" required minlength="10">
                                        <input
                                                placeholder="Опишите вашу проблему"
                                                name="user__problem"
                                                class="zone__request-input-item">
                                                <div class="navbar__social-icons" style="justify-content: center; margin-left: auto;">
                                                    <a onclick="bloc_open_mes();ym(96823870, 'reachGoal', 'button_22'); return true;"><img
                                                            src="./assets/img/ico/telegram.svg"
                                                            alt="telegram"></a>
                                                    <a onclick="bloc_open_mes();ym(96823870, 'reachGoal', 'button_23'); return true;"><img
                                                            src="./assets/img/ico/whatsapp.svg"
                                                            alt="whatsapp"></a>
                                                </div>
                                        <button
                                        onclick="ym(96823870, 'reachGoal', 'button_24'); return true;"
                                                class="btn__red"
                                                type="submit">Вызвать
                                            мастера
                                        </button>
                                    </form>
                                    <form action="#" id="political">
                                        <input type="checkbox"
                                               name="political"
                                               id="politca" checked>
                                        <label for="politca">Я даю
                                            согласие на
                                            обработку моих персональных
                                            данных в
                                            соответствии с <a
                                                    target="_blank"
                                                    href="Политика_Конфиденциальности.pdf">Политикой
                                                конфиденциальности</a></label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="container container-mob">
            <div class="reviews__content">
                <div class="reviews__intro">
                    <h2 class="base__title">Отзывы Наших Клиентов в
                        WhatsApp <span>. . .</span></h2>
                    <p class="base__subtitle">Все отзывы являются
                        реальными и от клиентов, которые уже
                        воспользовались нашими услугами</p>
                </div>
                <div data-v-c046ed3e="" style="display: flex; justify-content: center;">
                    <img
                        data-v-c046ed3e=""
                        id="slider-button-left"
                        class="controls"
                        src="./assets/img/ico/slider-prev.svg"
                        alt="arrow-left"
                        width="44"
                        height="0"
                        style="height: auto"
                    />
                    <section
                        data-v-c046ed3e=""
                        class="carousel carousel-custom"
                        dir="ltr"
                        aria-label="Gallery"
                        tabindex="0"
                    >
                        <div
                            id="carousel-area"
                            class="carousel__viewport"
                        >
                            <ol
                                class="carousel__track"
                                id="nav-slider"
                                style="
                                    transform: translateX(-107.2px);
                                    transition: 0.5s all;
                                    margin: 0px 0px;
                                    width: 100%;
                                "
                            >
                                <li
                                    data-v-c046ed3e=""
                                    class="carousel__slide carousel__slide--clone"
                                    aria-hidden="true"
                                    style="width: 40%; transition: 0.5s"
                                >
                                    <div
                                        data-v-182029f8=""
                                        data-v-c046ed3e=""
                                        class="carousel-video small"
                                    >
                                        <div
                                            data-v-182029f8=""
                                            class="iphone"
                                        >
                                            <div
                                                data-v-182029f8=""
                                                class="screen"
                                            >
                                                <div
                                                    data-v-182029f8=""
                                                    class="notch"
                                                ></div>
                                                <iframe
                                                    data-v-182029f8=""
                                                    class="lazy"
                                                    src="./assets/img/review/1.webp"
                                                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a><img src=./assets/img/review/1.webp alt=''></a>"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    data-v-c046ed3e=""
                                    class="carousel__slide carousel__slide--clone"
                                    aria-hidden="true"
                                    style="width: 40%; transition: 0.5s"
                                >
                                    <div
                                        data-v-182029f8=""
                                        data-v-c046ed3e=""
                                        class="carousel-video small"
                                    >
                                        <div
                                            data-v-182029f8=""
                                            class="iphone"
                                        >
                                            <div
                                                data-v-182029f8=""
                                                class="screen"
                                            >
                                                <div
                                                    data-v-182029f8=""
                                                    class="notch"
                                                ></div>
                                                <iframe
                                                    data-v-182029f8=""
                                                    class="lazy"
                                                    src="./assets/img/review/2.webp"
                                                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a><img src=./assets/img/review/2.webp alt=''></a>"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    data-v-c046ed3e=""
                                    class="carousel__slide carousel__slide--clone"
                                    aria-hidden="true"
                                    style="width: 40%; transition: 0.5s"
                                >
                                    <div
                                        data-v-182029f8=""
                                        data-v-c046ed3e=""
                                        class="carousel-video small"
                                    >
                                        <div
                                            data-v-182029f8=""
                                            class="iphone"
                                        >
                                            <div
                                                data-v-182029f8=""
                                                class="screen"
                                            >
                                                <div
                                                    data-v-182029f8=""
                                                    class="notch"
                                                ></div>
                                                <iframe
                                                    data-v-182029f8=""
                                                    class="lazy"
                                                    src="./assets/img/review/3.webp"
                                                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a><img src=./assets/img/review/3.webp alt=''></a>"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    data-v-c046ed3e=""
                                    class="carousel__slide carousel__slide--clone"
                                    aria-hidden="true"
                                    style="width: 40%; transition: 0.5s"
                                >
                                    <div
                                        data-v-182029f8=""
                                        data-v-c046ed3e=""
                                        class="carousel-video small"
                                    >
                                        <div
                                            data-v-182029f8=""
                                            class="iphone"
                                        >
                                            <div
                                                data-v-182029f8=""
                                                class="screen"
                                            >
                                                <div
                                                    data-v-182029f8=""
                                                    class="notch"
                                                ></div>
                                                <iframe
                                                    data-v-182029f8=""
                                                    class="lazy"
                                                    src="./assets/img/review/4.webp"
                                                    srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a><img src=./assets/img/review/4.webp alt=''></a>"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen
                                                ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    data-v-c046ed3e=""
                                    class="carousel__slide carousel__slide--clone"
                                    aria-hidden="true"
                                    style="width: 40%; transition: 0.5s"
                                >
                                    <div
                                        data-v-182029f8=""
                                        data-v-c046ed3e=""
                                        class="carousel-video small"
                                    >
                                        <div
                                            data-v-182029f8=""
                                            class="iphone"
                                        >
                                            <div
                                                data-v-182029f8=""
                                                class="screen"
                                            >
                                                <div
                                                    data-v-182029f8=""
                                                    class="notch"
                                                ></div>
            
                                                <iframe
                                                data-v-182029f8=""
                                                class="lazy"
                                                src="./assets/img/review/5.webp"
                                                srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a><img src=./assets/img/review/5.webp alt=''></a>"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen
                                            ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                        <ol
                            data-v-c046ed4e=""
                            id="nav-slider-pagination"
                            class="carousel__pagination"
                        >
                            <li class="carousel__pagination-item">
                                <button
                                    type="button"
                                    class="carousel__pagination-button"
                                    aria-label="Navigate to slide 1"
                                ></button>
                            </li>
                            <li class="carousel__pagination-item">
                                <button
                                    type="button"
                                    class="carousel__pagination-button"
                                    aria-label="Navigate to slide 2"
                                ></button>
                            </li>
                            <li class="carousel__pagination-item">
                                <button
                                    type="button"
                                    class="carousel__pagination-button"
                                    aria-label="Navigate to slide 3"
                                ></button>
                            </li>
                            <li class="carousel__pagination-item">
                                <button
                                    type="button"
                                    class="carousel__pagination-button"
                                    aria-label="Navigate to slide 4"
                                ></button>
                            </li>
                            <li class="carousel__pagination-item">
                                <button
                                    type="button"
                                    class="carousel__pagination-button"
                                    aria-label="Navigate to slide 5"
                                ></button>
                            </li>
                        </ol>
                        <div
                            class="carousel__liveregion carousel__sr-only"
                            aria-live="polite"
                            aria-atomic="true"
                        >
                        </div>
                    </section>
                    <img
                        data-v-c046ed4e=""
                        id="slider-button-right"
                        class="controls"
                        src="./assets/img/ico/slider-next.svg"
                        width="44"
                        height="0"
                        alt="arrow-right"
                        style=" height: auto"
                    />
                </div>
                </div>
                <div class="reviews__links">
                    <div class="reviews__link-item">
                        <button 
                        onclick="ym(96823870, 'reachGoal', 'button_25'); return true;"
                        class="get__review btn__red">Оставьте
                            свой отзыв
                            <br>в WhatsApp
                        </button>
                    </div>
                    <div class="reviews__qr"><img
                            src="./assets/img/qr.webp"
                            alt="qr"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="video__reviews reviews">
        <class="container">
            <class="reviews__content reviews__content_botton">
                <div class="reviews__intro">
                    <h2 class="base__title">Видео Отзывы наших
                        довольных
                        клиентов <span>. . .</span></h2></div>
                        <div data-v-c046ed3e="" class="contact-wrapper">
                            <div data-v-c046ed3e="" class="history-wrapper"style="background-color: #f5f5f5;">
                                <main data-v-c046ed3e="">
                                    <h1 data-v-c046ed3e="" class="heading">
                                    </h1>
                                    <div data-v-c046ed3e="" style="display: flex">
                                        <img
                                            data-v-c046ed3e=""
                                            id="slider-button-left_2"
                                            class="controls_2"
                                            src="./assets/img/ico/slider-prev.svg"
                                            alt="arrow-left"
                                            width="44"
                                            height="0"
                                            style="height: auto"
                                        />
                                        <section
                                            data-v-c046ed3e=""
                                            class="carousel carousel-custom"
                                            dir="ltr"
                                            aria-label="Gallery"
                                            tabindex="0"
                                        >
                                            <div
                                                id="carousel-area"
                                                class="carousel__viewport"
                                            >
                                                <ol
                                                    class="carousel__track"
                                                    id="nav-slider_2"
                                                    style="
                                                        transform: translateX(-107.2px);
                                                        transition: 0.5s all;
                                                        margin: 0px 0px;
                                                        width: 100%;
                                                    "
                                                >
                                                    <li
                                                        data-v-c046ed3e=""
                                                        class="carousel__slide carousel__slide--clone"
                                                        aria-hidden="true"
                                                        style="width: 40%; transition: 0.5s"
                                                    >
                                                        <div
                                                            data-v-182029f8=""
                                                            data-v-c046ed3e=""
                                                            class="carousel-video small"
                                                        >
                                                            <div
                                                                data-v-182029f8=""
                                                                class="iphone"
                                                            >
                                                                <div
                                                                    data-v-182029f8=""
                                                                    class="screen"
                                                                >
                                                                    <div
                                                                        data-v-182029f8=""
                                                                        class="notch"
                                                                    ></div>
                                                                    <iframe 
                                                                        data-v-182029f8=""
                                                                        class="lazy"
                                                                        width="466" height="829" src="https://www.youtube.com/embed/KLpmYHVGFBo?si=3-wSXXiV8MGU7qkB" title="отзыв 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        data-v-c046ed3e=""
                                                        class="carousel__slide carousel__slide--clone"
                                                        aria-hidden="true"
                                                        style="width: 40%; transition: 0.5s"
                                                    >
                                                        <div
                                                            data-v-182029f8=""
                                                            data-v-c046ed3e=""
                                                            class="carousel-video small"
                                                        >
                                                            <div
                                                                data-v-182029f8=""
                                                                class="iphone"
                                                            >
                                                                <div
                                                                    data-v-182029f8=""
                                                                    class="screen"
                                                                >
                                                                    <div
                                                                        data-v-182029f8=""
                                                                        class="notch"
                                                                    ></div>
                                                                    <iframe 
                                                                    data-v-182029f9=""
                                                                    class="lazy"
                                                                    width="466" height="829" src="https://www.youtube.com/embed/IIX4drSWmE0?si=om-hXDRdq7vxnCjK" title="отзыв 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        data-v-c046ed3e=""
                                                        class="carousel__slide carousel__slide--clone"
                                                        aria-hidden="true"
                                                        style="width: 40%; transition: 0.5s"
                                                    >
                                                        <div
                                                            data-v-182029f8=""
                                                            data-v-c046ed3e=""
                                                            class="carousel-video small"
                                                        >
                                                            <div
                                                                data-v-182029f8=""
                                                                class="iphone"
                                                            >
                                                                <div
                                                                    data-v-182029f8=""
                                                                    class="screen"
                                                                >
                                                                    <div
                                                                        data-v-182029f8=""
                                                                        class="notch"
                                                                    ></div>
                                                                    <iframe 
                                                                    data-v-182029f9=""
                                                                    class="lazy"
                                                                    width="466" height="829" src="https://www.youtube.com/embed/GpQXAU0-vNk?si=cOfneQIkdNh2LK3U" title="отзыв 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        data-v-c046ed3e=""
                                                        class="carousel__slide carousel__slide--clone"
                                                        aria-hidden="true"
                                                        style="width: 40%; transition: 0.5s"
                                                    >
                                                        <div
                                                            data-v-182029f8=""
                                                            data-v-c046ed3e=""
                                                            class="carousel-video small"
                                                        >
                                                            <div
                                                                data-v-182029f8=""
                                                                class="iphone"
                                                            >
                                                                <div
                                                                    data-v-182029f8=""
                                                                    class="screen"
                                                                >
                                                                    <div
                                                                        data-v-182029f8=""
                                                                        class="notch"
                                                                    ></div>
                                                                    <iframe 
                                                                    data-v-182029f9=""
                                                                    class="lazy"
                                                                    width="466" height="829" src="https://www.youtube.com/embed/0Sd5Zfo3Lek" title="отзыв 4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li
                                                        data-v-c046ed3e=""
                                                        class="carousel__slide carousel__slide--clone"
                                                        aria-hidden="true"
                                                        style="width: 40%; transition: 0.5s"
                                                    >
                                                        <div
                                                            data-v-182029f8=""
                                                            data-v-c046ed3e=""
                                                            class="carousel-video small"
                                                        >
                                                            <div
                                                                data-v-182029f8=""
                                                                class="iphone"
                                                            >
                                                                <div
                                                                    data-v-182029f8=""
                                                                    class="screen"
                                                                >
                                                                    <div
                                                                        data-v-182029f8=""
                                                                        class="notch"
                                                                    ></div>
                                                                    <iframe 
                                                                    data-v-182029f9=""
                                                                    class="lazy"
                                                                    width="466" height="829" src="https://www.youtube.com/embed/9OCXIfgH56Y" title="отзыв 5" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <ol
                                                data-v-c046ed3e=""
                                                id="nav-slider-pagination2"
                                                class="carousel__pagination_2"
                                            >
                                                <li class="carousel__pagination-item_2">
                                                    <button
                                                        type="button"
                                                        class="carousel__pagination-button_2"
                                                        aria-label="Navigate to slide 1"
                                                    ></button>
                                                </li>
                                                <li class="carousel__pagination-item_2">
                                                    <button
                                                        type="button"
                                                        class="carousel__pagination-button_2"
                                                        aria-label="Navigate to slide 2"
                                                    ></button>
                                                </li>
                                                <li class="carousel__pagination-item_2">
                                                    <button
                                                        type="button"
                                                        class="carousel__pagination-button_2"
                                                        aria-label="Navigate to slide 3"
                                                    ></button>
                                                </li>
                                                <li class="carousel__pagination-item_2">
                                                    <button
                                                        type="button"
                                                        class="carousel__pagination-button_2"
                                                        aria-label="Navigate to slide 4"
                                                    ></button>
                                                </li>
                                                <li class="carousel__pagination-item_2">
                                                    <button
                                                        type="button"
                                                        class="carousel__pagination-button_2"
                                                        aria-label="Navigate to slide 5"
                                                    ></button>
                                                </li>
                                            </ol>
                                            <div
                                                class="carousel__liveregion carousel__sr-only"
                                                aria-live="polite"
                                                aria-atomic="true"
                                            >
                                            </div>
                                        </section>
                                        <img
                                            data-v-c046ed3e=""
                                            id="slider-button-right_2"
                                            class="controls_2"
                                            src="./assets/img/ico/slider-next.svg"
                                            width="44"
                                            height="0"
                                            alt="arrow-right"
                                            style=" height: auto"
                                        />
                                    </div>
                        
                        
                        
                    
                        <div class="reviews__links">
                    <div class="reviews__link-item">
                        <button 
                        onclick="ym(96823870, 'reachGoal', 'button_26'); return true;"
                        class="get__review btn__red">Оставьте
                            свой отзыв
                            <br>в WhatsApp
                        </button>
                    </div>
                    <div class="reviews__qr"><img
                            src="./assets/img/qr.webp"
                            alt="qr"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="question">
        <div class="container">
            <div class="question__content">
                <div class="question__intro">
                    <h2 class="base__title">Нашлись вопросы? <span>.
                                    .
                                    .</span></h2>
                    <p class="base__subtitle">Здесь вы можете найти
                        ответы на самые распространённые из них.
                        Если у
                        вас остались дополнительные вопросы, мы
                        всегда
                        готовы помочь — свяжитесь с нами!</p>
                </div>
                <div class="question__wrapper">
                    <div class="question__accordeon">
                        <div class="question__acc-head">
                            <h3>Как быстро вы можете приехать для
                                диагностики?</h3><img class="arrow"
                                                      src="./assets/img/ico/accordeon-ico.svg"
                                                      alt="ico"></div>
                        <div class="question__acc-body">
                            <p>Наш специалист может быть у вас дома
                                уже
                                в течение 2 часов после оформления
                                заявки.</p>
                        </div>
                    </div>
                    <div class="question__accordeon">
                        <div class="question__acc-head">
                            <h3>Что делать, если проблема повторится
                                после ремонта?</h3>
                            <img class="arrow"
                                 src="./assets/img/ico/accordeon-ico.svg"
                                 alt="ico"></div>
                        <div class="question__acc-body">
                            <p>Наш специалист может быть у вас дома
                                уже
                                в течение 2 часов после оформления
                                заявки.</p>
                        </div>
                    </div>
                    <div class="question__accordeon">
                        <div class="question__acc-head">
                            <h3>Что входит в бесплатную
                                диагностику?</h3>
                            <img class="arrow"
                                 src="./assets/img/ico/accordeon-ico.svg"
                                 alt="ico"></div>
                        <div class="question__acc-body">
                            <p>Наш специалист может быть у вас дома
                                уже
                                в течение 2 часов после оформления
                                заявки.</p>
                        </div>
                    </div>
                    <div class="question__accordeon">
                        <div class="question__acc-head">
                            <h3>Как долго длится ремонт?</h3>
                            <img class="arrow"
                                 src="./assets/img/ico/accordeon-ico.svg"
                                 alt="ico"></div>
                        <div class="question__acc-body">
                            <p>Наш специалист может быть у вас дома
                                уже
                                в течение 2 часов после оформления
                                заявки.</p>
                        </div>
                    </div>
                    <div class="question__accordeon">
                        <div class="question__acc-head">
                            <h3>Можете ли вы ремонтировать устройства на
                                дому или мне нужно её куда-то
                                отвозить?</h3><img class="arrow"
                                                   src="./assets/img/ico/accordeon-ico.svg"
                                                   alt="ico"></div>
                        <div class="question__acc-body">
                            <p>Наш специалист может быть у вас дома
                                уже
                                в течение 2 часов после оформления
                                заявки.</p>
                        </div>
                    </div>
                    <div class="question__accordeon">
                        <div class="question__acc-head">
                            <h3>Принимаете ли вы к оплате
                                карты?</h3><img class="arrow"
                                                src="./assets/img/ico/accordeon-ico.svg"
                                                alt="ico"></div>
                        <div class="question__acc-body">
                            <p>Наш специалист может быть у вас дома
                                уже
                                в течение 2 часов после оформления
                                заявки.</p>
                        </div>
                    </div>
                    <div class="question__accordeon">
                        <div class="question__acc-head">
                            <h3>Что делать, если я не дома во время
                                запланированного визита
                                мастера?</h3><img class="arrow"
                                                  src="./assets/img/ico/accordeon-ico.svg"
                                                  alt="ico"></div>
                        <div class="question__acc-body">
                            <p>Наш специалист может быть у вас дома
                                уже
                                в течение 2 часов после оформления
                                заявки.</p>
                        </div>
                    </div>
                </div>
                <div class="question__footer">
                    <div class="question__footer-item">
                        <p>Не нашли ответ на свой вопрос?</p>
                        <button
                        onclick="ym(96823870, 'reachGoal', 'button_27'); return true;"
                                class="btn__red get__popup">свяжитесь с
                            нами!
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="garanty">
        <div class="container">
            <div class="garanty__content">
                <div class="garanty__intro">
                    <h2 class="base__title">Гарантия на
                        непредвиденные
                        ситуации 365 дней <span>. . .</span></h2>
                    <p class="base__subtitle">Мы рядом, если ваше
                        устройство даст сбой или возникнут вопросы
                        по
                        установленным запчастям — всё это под нашей
                        защитой на протяжении года после ремонта.
                        Исключения минимальны, поддержка
                        максимальна</p>
                </div>
                <div class="garanty__card-first-floor">
                    <div class="garanty__card-item">
                        <div class="garanty__card-item-img"><img
                                src="./assets/img/ico/a_garanty/1_dedline.svg"
                                alt="Срок"></div>
                        <div class="garanty__card-item-intro">
                            <h3>Срок:</h3>
                            <p>. . .
                                <br>1 год с момента выполнения
                                ремонта.</p>
                        </div>
                    </div>
                    <div class="garanty__card-item">
                        <div class="garanty__card-item-img"><img
                                src="./assets/img/ico/a_garanty/2_safe.svg"
                                alt="Покрытие"></div>
                        <div class="garanty__card-item-intro">
                            <h3>Покрытие:</h3>
                            <p>. . .
                                <br>Все выполненные работы и
                                установленные запчасти.</p>
                        </div>
                    </div>
                    <div class="garanty__card-item">
                        <div class="garanty__card-item-img"><img
                                src="./assets/img/ico/a_garanty/3_exclam.svg"
                                alt></div>
                        <div class="garanty__card-item-intro">
                            <h3>Исключения:</h3>
                            <p>. . .
                                <br>Повреждения из-за неправильного
                                использования устройства, стихийные
                                бедствия и потребительские расходные
                                материалы (например, картриджи,
                                батареи).</p>
                        </div>
                    </div>
                </div>
                <div class="garanty__card-second-floor">
                    <h2>В случае гарантии:</h2>
                    <div class="garanty__card-first-floor">
                        <div class="garanty__card-item">
                            <div class="garanty__card-item-img"><img
                                    src="./assets/img/ico/a_garanty/4_tel.svg"
                                    alt="Связь"></div>
                            <div class="garanty__card-item-intro">
                                <h3>Связь:</h3>
                                <p>. . .
                                    <br>Звоните по бесплатному
                                    номеру
                                    для России <a
                                            href="tel:+7(800)555-55-55">+7(800)
                                        555-55-55<span id="my-button-garanty" style="top: auto;height: 25px;font-size: 15px; margin-top: -4px;margin-left: -65px;display: inline-flex;align-items: center;">смотреть</span></a>  или пишите на
                                    сайте</p>
                            </div>
                        </div>
                        <div class="garanty__card-item">
                            <div class="garanty__card-item-img"><img
                                    src="./assets/img/ico/a_garanty/5_list.svg"
                                    alt="Проверка"></div>
                            <div class="garanty__card-item-intro">
                                <h3>Проверка:</h3>
                                <p>. . .
                                    <br>Описываете проблему, мы
                                    подтверждаем гарантийный
                                    случай.</p>
                            </div>
                        </div>
                        <div class="garanty__card-item">
                            <div class="garanty__card-item-img"><img
                                    src="./assets/img/ico/a_garanty/6_remote.svg"
                                    alt="Решение"></div>
                            <div class="garanty__card-item-intro">
                                <h3>Решение:</h3>
                                <p>. . .
                                    <br>Организуем бесплатный ремонт
                                    или
                                    замену запчастей.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="master">
        <div class="container">
            <div class="master__content">
                <div class="master__intro">
                    <h2 class="base__title">Познакомьтесь с Нашими
                        Мастерами <span>. . .</span></h2>
                    <p class="base__subtitle">Встречайте наших
                        экспертов, благодаря которым ваша техника
                        работает как часы! Мы уверены в каждом из
                        них и
                        их уникальных навыках.</p>
                </div>
                <div class="master__cards">
                    <div class="master__card-item">
                        <div class="master__card-img"><img
                                src="./assets/img/master/1.PNG"
                                alt="1"></div>
                        <div class="master__card-txt">
                            <h2>Андрей Васильев<br>...</h2>
                            <p><span>Специализация: </span>Ремонт и
                                модернизация ПК и ноутбуков.</p>
                            <p><span>Опыт работы: </span>Более 12
                                лет.</p>
                            <p><span>О себе: </span>С детства
                                увлекаюсь
                                компьютерами. Люблю сложные задачи,
                                которые требуют нестандартного
                                подхода.
                                В свободное время изучаю новые
                                технологии и участвую в IT
                                конференциях.</p>
                        </div>
                    </div>
                    <div class="master__card-item">
                        <div class="master__card-img"><img
                                src="./assets/img/master/2.PNG"
                                alt="1"></div>
                        <div class="master__card-txt">
                            <h2>Андрей Васильев<br>...</h2>
                            <p><span>Специализация: </span>Ремонт и
                                модернизация ПК и ноутбуков.</p>
                            <p><span>Опыт работы: </span>Более 12
                                лет.</p>
                            <p><span>О себе: </span>С детства
                                увлекаюсь
                                компьютерами. Люблю сложные задачи,
                                которые требуют нестандартного
                                подхода.
                                В свободное время изучаю новые
                                технологии и участвую в IT
                                конференциях.</p>
                        </div>
                    </div>
                    <div class="master__card-item">
                        <div class="master__card-img"><img
                                src="./assets/img/master/3.PNG"
                                alt="1"></div>
                        <div class="master__card-txt">
                            <h2>Андрей Васильев<br>...</h2>
                            <p><span>Специализация: </span>Ремонт и
                                модернизация ПК и ноутбуков.</p>
                            <p><span>Опыт работы: </span>Более 12
                                лет.</p>
                            <p><span>О себе: </span>С детства
                                увлекаюсь
                                компьютерами. Люблю сложные задачи,
                                которые требуют нестандартного
                                подхода.
                                В свободное время изучаю новые
                                технологии и участвую в IT
                                конференциях.</p>
                        </div>
                    </div>
                    <div class="master__card-item">
                        <div class="master__card-img"><img
                                src="./assets/img/master/4.PNG"
                                alt="1"></div>
                        <div class="master__card-txt">
                            <h2>Андрей Васильев<br>...</h2>
                            <p><span>Специализация: </span>Ремонт и
                                модернизация ПК и ноутбуков.</p>
                            <p><span>Опыт работы: </span>Более 12
                                лет.</p>
                            <p><span>О себе: </span>С детства
                                увлекаюсь
                                компьютерами. Люблю сложные задачи,
                                которые требуют нестандартного
                                подхода.
                                В свободное время изучаю новые
                                технологии и участвую в IT
                                конференциях.</p>
                        </div>
                    </div>
                    <div class="master__card-item">
                        <div class="master__card-img"><img
                                src="./assets/img/master/5.PNG"
                                alt="1"></div>
                        <div class="master__card-txt">
                            <h2>Денис Королёв<br>...</h2>
                            <p><span>Специализация: </span>Ремонт и
                                настройка игровых консолей.</p>
                            <p><span>Опыт работы: </span>8 лет..</p>
                            <p><span>О себе: </span>Игры — это не
                                просто
                                хобби, это часть жизни многих. Моя
                                задача — помочь вашей консоли
                                работать
                                идеально.</p>
                        </div>
                    </div>
                </div>
                <div class="master__subtitle">
                    <p>Наши мастера постоянно обновляют свои знания
                        и
                        следят за последними трендами в мире
                        техники. Мы
                        гарантируем высокое качество и
                        профессионализм.</p>
                    <button 
                    onclick="ym(96823870, 'reachGoal', 'button_28'); return true;"
                    class="get__master btn__red">вызвать
                        мастера
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="find" style="display: none;">
        <div class="container">
            <div class="find__content">
                <div class="find__intro">
                    <h2 class="base__title">Найдите Ближайшего
                        Мастера
                        <span>. . .</span></h2>
                    <p class="base__subtitle">Мы развернули широкую
                        сеть
                        мастеров по <?php echo $PageUTMData["city"][4];?> и <?php echo $PageUTMData["city"][3];?> области,
                        чтобы гарантировать вам быстрый и
                        эффективный
                        сервис ремонта прямо у вас дома.</p>
                </div>
                <div class="find__map">
                    <div class="find__map-title">
                        <h3>Укажите свой адрес, и мы покажем, когда
                            и
                            как скоро к вам может прибыть ближайший
                            специалист.</h3></div>
                    <div class="find__map-wrapper">
                        <div class="find__map-head">
                            <form action="#">
                                <input
                                        placeholder="Укажите ваш адрес"
                                        required>
                                <input type="tel"
                                       class="find__map-tel-input telephone__id"
                                       placeholder="Введите ваш номер"
                                       required
                                       
                                       >
                                <button  onclick="ym(96823870, 'reachGoal', 'button_29'); return true;"
                                        class="btn__red find__map-tel-btn get__popup disabled"
                                        type="submit"
                                        >Найти
                                    мастера
                                </button>
                            </form>
                        </div>
                        <div class="find__map-body">
                            <div id="map-container">
                                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A03853d197f0e53af8aa7948e2770f432c8cfbe6564774b2ddda1e4252e0bc009&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__intro">
                    <h1 class="base__title">Мы Всегда Рядом! <span>.
                                    .
                                    .</span></h1>
                    <p class="base__subtitle">Наша команда готова
                        ответить на любые вопросы и помочь с
                        ремонтом
                        вашей компьютерной техники.
                        <br><span>Мы всегда здесь, чтобы облегчить
                                    вам
                                    жизнь!</span></p>
                </div>
                <div class="footer__wrapper">
                    <div class="footer__wrapper-tel">
                        <div class="footer__wrapper-tel-ico"><img
                                src="./assets/img/ico/tel-black-footer.svg"
                                alt="tel"></div>
                        <div class="footer__wrapper-title">
                            <h1>Телефон</h1></div>
                        <div class="footer__wrapper-link"><a
                                onclick="bloc_open_tel();ym(96823870, 'reachGoal', 'button_30'); return true;">+7 925 555 35 35<span id="my-button-garanty" style="top: auto;margin-left: -57px;padding: 1px 12px;">смотреть</span></a></div>
                        <div class="footer__wrapper-social">
                            <a
                               class="footer__whatsapp"
                               onclick="bloc_open_mes();ym(96823870, 'reachGoal', 'button_31'); return true;">WhatsApp</a>
                            <a onclick="bloc_open_mes();ym(96823870, 'reachGoal', 'button_32'); return true;"
                               class="footer__telegram">Telegram</a>
                            <p
                                    class="footer__wrapper-social-sub">Часы
                                Работы:
                                <span>Круглосуточно</span></p>
                        </div>
                    </div>
                    <div class="footer__form">
                        <div class="footer__form-title">
                            <h1>Форма Заказа:</h1></div>
                        <div class="footer__form-wrapper">
                            <form action="./assets/php/telegram.php"
                                  method="POST">
                                <div class="footer__form-top">
                                    <input name="user__phone" type="tel"
                                           placeholder="Введите ваш номер"
                                           class="telephone__id2" required>
                                    <input name="user__address" class="user__id"
                                           placeholder="Введите Ваш адрес">
                                </div>
                                <div class="footer__form-bottom">
                                    <textarea name="user__problem"
                                              placeholder="Опишите вашу проблему" class="footer__textarea"></textarea>
                                    <div class="footer__form-politic">
                                        <button 
                                        onclick="ym(96823870, 'reachGoal', 'button_33'); return true;"
                                        class="btn__red"
                                                type="submit">Вызвать
                                            мастера
                                        </button>
                                        <div class="footer__political">
                                            <form action="#" id="political">
                                                <input type="checkbox"
                                                       name="political"
                                                       id="politca" checked>
                                                <label for="politca">Я даю согласие на
                                                    обработку моих персональных данных в
                                                    соответствии с <a target="_blank"
                                                                      href="Политика_Конфиденциальности.pdf">Политикой
                                                        конфиденциальности</a></label>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer__yr-info">
            <div class="container">
                <p class="footer__p">ИП СМИРНОВ АНДРЕЙ ВЛАДИМИРОВИЧ, Юридический адрес: Москва, Планерная 18. Телефон: +79586754334; ОГРНИП: 321774600457473, ИНН: 772794769497.</p>
            </div>
        </div>
    </div>
</footer>
<script src="./assets/js/slider.js"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="./assets/js/script.js"></script>
<script>
    $(document).ready(function () {
        $(".telephone__id").mask("+9 (999) 999-99-99")
    });
</script>
<script>
    function loadYandexMapScript() {
        var script = document.createElement('script');
        script.src = 'https://api-maps.yandex.ru/2.1/?lang=ru_RU';
        script.async = true;
        script.onload = initializeYandexMap;
        document.body.appendChild(script);
    }

    function initializeYandexMap() {
        var map = new ymaps.Map('map-container', {
            center: [55.753215, 37.622504],
            zoom: 10
        });

    }

    function lazyLoadMap() {
        var mapContainer = document.getElementById('map-container');
        var mapContainerPosition = mapContainer.getBoundingClientRect().top;
        var windowHeight = window.innerHeight || document.documentElement.clientHeight;

        if (mapContainerPosition - windowHeight < 0) {
            loadYandexMapScript();
            window.removeEventListener('scroll', lazyLoadMap);
        }
    }

    window.addEventListener('scroll', lazyLoadMap);

    lazyLoadMap();
	
	

</script>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KJT7C8QC"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
</body>

</html>
