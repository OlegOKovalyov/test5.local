<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sliceptc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('inner'); ?>>
<div id="page" class="site">
    <div class="main-wrapper">
        <div class="container">
            <!-- header -->
            <header id="header">
                <div class="wrapper">
                    <?php  the_custom_logo(); ?>
                    <a class="mobile-button" href="#"><span></span></a>
                    <nav class="nav">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'nav',
                            'menu_class'     => '',
                            'container'      => '',
                        ) );
                        ?>
                        <div class="soc">
                            <a href="#"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc1.png?ver1.0" alt=""/></a>
                            <a href="#"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc2.png?ver1.0" alt=""/></a>
                        </div>
                    </nav>
                    <div class="head-phone">
                        <a href="tel:89167868105" class="phone-link">8-916-786-81-05</a><br/>
                        <a href="#pop-up1" class="call-ord fancy"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/ico1.png?ver1.0" alt=""/></i><span>ЗАКАЗАТЬ ЗВОНОК</span></a>
                    </div>
                </div>
            </header>
            <!-- end header -->

            <div id="content" class="site-content">
                <!-- content -->
                <main class="content">
                    <!-- top section -->
                    <section class="inner-top">
                        <div class="wrapper">
                            <h1>Разработка сайта для компании «Consulting group»</h1>
                        </div>
                    </section>
                    <!-- end top section -->
                    <section class="section-cols">
                        <div class="wrapper">
                            <div class="cols">
                                <div class="col">
                                    <h4><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/ico6.png?ver1.0" alt=""/>Клиент</h4>
                                    <p>Это совокупность графических элементов, шрифтов и цветов, реализованных на сайте. Основная задача дизайна сайта - объединение всех информационных блоков и формирование </p>
                                </div>
                                <div class="col">
                                    <h4><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/ico7.png?ver1.0" alt=""/>Задача</h4>
                                    <p>Разработать сайт-визитку для транспортной компании SфauExpress. Дизайн сайта
                                        отражает строгий стиль компании, а красные элементы подчёркивают динамику и
                                        акцентируют внимание на важной информации.</p>
                                </div>
                                <div class="col">
                                    <h4><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/ico8.png?ver1.0" alt=""/>Решение</h4>
                                    <p>Это совокупность графических элементов, шрифтов и цветов, реализованных на сайте. Основная задача дизайна сайта - объединение всех информационных блоков и формирование </p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-preview">
                        <div class="preview">
                            <div class="pols">
                                <div class="pol pol1"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m4.png?ver1.0" alt=""/></div>
                                <div class="pol pol5"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m9.png?ver1.0" alt=""/></div>
                                <div class="pol pol4"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m8.png?ver1.0" alt=""/></div>
                                <div class="pol pol3"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m7.png?ver1.0" alt=""/></div>
                                <div class="pol pol2"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m6.png?ver1.0" alt=""/></div>
                                <div class="pol pol8"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m12.png?ver1.0" alt=""/></div>
                                <div class="pol pol6"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m10.png?ver1.0" alt=""/></div>
                                <div class="pol pol7"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m11.png?ver1.0" alt=""/></div>
                                <div class="pol pol9"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m13.png?ver1.0" alt=""/></div>
                                <div class="pol pol10"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/m14.png?ver1.0" alt=""/></div>
                            </div>
                        </div>
                    </section>
                    <section class="section-apply">
                        <div class="apply">
                            <h2>ОСТАВИТЬ ЗАЯВКУ</h2>
                            <div class="form-block">
                                <div class="form-row"><input type="text" class="t-inp name-inp" placeholder="Введите Ваше имя"/></div>
                                <div class="form-row"><input type="text" class="t-inp mail-inp" placeholder="Введите Ваш e-mail"/></div>
                                <div class="form-row"><input type="text" class="t-inp tel-inp" placeholder="Введите Ваш номер телефона"/></div>
                                <div class="form-row"><textarea placeholder="Введите Ваше сообщение"></textarea></div>
                                <div class="form-row"><button class="btn btn-bord">ОТПРАВИТЬ</button></div>
                            </div>
                        </div>
                    </section>

                </main>
                <!-- end content -->
