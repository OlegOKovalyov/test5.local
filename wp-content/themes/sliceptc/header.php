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
                            <a id="soc-vk" href="<?php echo get_theme_mod( 'VKontakte', 'https://vk.com/' ); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc1.png?ver1.0" alt=""/></a>
                            <a id="soc-inst" href="<?php echo 'https://www.instagram.com/' . get_theme_mod( 'Instagram', 'web__impression' ); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc2.png?ver1.0" alt=""/></a>
                        </div>
                    </nav>
                    <div id="head-phone" class="head-phone">
                        <a href="tel:<?php echo sliceptc_clear_phone_number(); ?>" class="phone-link"><?php echo get_theme_mod( 'Phone Number', '8-916-786-81-05' ); ?></a><br/>
                        <a href="#pop-up1" class="call-ord fancy"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/ico1.png?ver1.0" alt=""/></i><span>ЗАКАЗАТЬ ЗВОНОК</span></a>
                    </div>
                </div>
            </header>
            <!-- end header -->

            <div id="content" class="site-content">
                <!-- content -->