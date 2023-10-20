<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poolsar</title>

    <?php wp_head (); ?>
</head>
<body>
    
    <header class="header">
        <div class="container">
            <div class="header-wrapper__mobile">
                <div class="logo-header logo-header__mobile">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-header.jpg" alt="poolsar"></a>
                </div>
                <input type="checkbox" id="burger">
                <label class="menu__btn" for="burger"><span></span></label>
                <!-- <ul class="nav__link-mobil">
                    <li><a class="menu__item" href="catalog.html">Выбрать изделия</a></li>
                    <li><a class="menu__item" href="about-poolsar.html">О пульсаре</a></li>
                    <li><a class="menu__item" href="activet.html">Активация</a></li>
                    <li><a class="menu__item" href="about-poolsar.html#about-modifications">Сферы</a></li>
                    <li><a class="menu__item" href="training">Тренинг</a></li>
                    <li><a class="menu__item" href="basket.html">В корзину</a></li>
                </ul> -->
                <?php
                    // Подключение меню в шапке мобильное
                        wp_nav_menu( [
                        'theme_location'  => 'menu_main_header',
                        'container'       => null, 
                        'menu_class'      => 'nav__link-mobil', 
                        ] );
                ?>
                
            </div>




            <div class="header-wrapper">
                <div class="logo-header">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo-header.jpg" alt="poolsar"></a>
                </div>

                <div class="nav-header">
                    <!-- <ul class="header-page__ul">
                        <li><a href="catalog.html">Выбрать изделия</a></li>
                        <li><a href="about-poolsar.html">О пульсаре</a></li>
                        <li><a href="activet.html">Активация</a></li>
                        <li><a href="about-poolsar.html#about-modifications">Сферы</a></li>
                        <li><a href="training">Тренинг</a></li>
                    </ul> -->
                    <?php
                    // Подключение меню в шапке
                        wp_nav_menu( [
                        'theme_location'  => 'menu_main_header',
                        'container'       => null, 
                        'menu_class'      => 'header-page__ul', 
                        ] );
                    ?>
                </div>
                <div class="menu-header">
                    <ul>
                        <li><a class="menu-header-link" href="/korzina/">Корзина</a></li>
                        <li><a href="/korzina/"><img src="<?php bloginfo('template_url'); ?>/assets/img/icon/basket.svg" alt="basket"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </header>