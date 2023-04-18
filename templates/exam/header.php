<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

//подключаем все добавленные стили и скрипты
$APPLICATION->ShowHead();
//стили, подключаемые из папки assets
//use Bitrix\Main\Page\Asset;
//$asset = Asset::getInstance();
//$asset->addCss(SITE_TEMPLATE_PATH . "/assets/css/styles.css");

?>
<!doctype html>
<html>
<head>
    <meta name="cmsmagazine" content="ce3dd2eb434b96b3a51364fea7d4b7de" />
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>
<body>

<!--выводим админ-панель-->
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>

<!-- HEADER -->
<header>
    <div class="header">
        <div class="header_images">
            <div class="logo_top">
                <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo.png" alt="Company logo"></a>
            </div>

            <div class="header_image">
                <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/background_img.png"
                                 alt="Header background image"></a>
            </div>
            <span class="title">Нанотехнологии здоровья</span>
            <span class="email"><a href="mailto:info@company.ru">info@company.ru</a></span>
            <span class="phone">+7 (383) 349-18-49</span>
        </div>

        <div class="head_form">
            <div class="form">
                <form action="URL">
                    <label>
                        Логин: <input type="text" name="username" id="login_input">
                    </label>
                    <label>
                        Пароль: <input type="password" name="password" id="pass_input">
                    </label>
                    <input type="submit" value="Войти">
                </form>
                <a href="#">Регистрация</a>
            </div>

            <div class="head_cart">
                <span class="head_cart_text"> В <a href="#">корзине</a> товаров - 12</span>
            </div>
        </div>
    </div>
</header>

<nav class="top_menu">
    <ul class="menu">
        <li><a href="#home">Главная</a></li>
        <li><a href="#catalog">Каталог</a></li>
        <li><a href="#about">О компании</a></li>
        <li><a href="#news">Новости</a></li>
        <li><a href="#delivery">Доставка и оплата</a></li>
        <li><a href="#contact">Контакты</a></li>
    </ul>
</nav>

<noindex>
    <div id="top_menu_mobile">
        <div class="in_menu_mobile">
            <div class="menu_button">
                <span class="menu_button_line"></span>
                <span class="menu_button_line"></span>
                <span class="menu_button_line"></span>
            </div>
            <a href="#" id="top_menu_id">Меню</a>
            <ul id="menu_mobile">
                <li><a href="#home">Главная</a></li>
                <li><a href="#about">О компании</a></li>
                <li><a class="active" href="#catalog" id="catalog_menu_id">Каталог</a>
                    <ul class="menu_mobile_catalog">
                        <li><a href="#">Электронные сигареты</a></li>
                        <li><a href="#">Трубки</a></li>
                        <li><a href="#">Картриджи</a></li>
                        <li><a href="#">Аккумуляторы и атомайзеры</a></li>
                        <li><a href="#">Аксессуары</a></li>
                        <li><a href="#">Зарядные устройства</a></li>
                        <li><a href="#">Жидкости для заправки</a></li>
                        <li><a href="#">Подарочные наборы</a></li>
                    </ul>
                </li>
                <li><a href="#delivery">Доставка и оплата</a></li>
                <li><a href="#news">Новости</a></li>
                <li><a href="#contact">Контакты</a></li>
            </ul>
        </div>
    </div>
</noindex>

<!-- MAIN BLOCK -->
<div id="wrapper">
    <!-- CONTENT -->
    <div class="content">
