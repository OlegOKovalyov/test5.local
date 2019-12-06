<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sliceptc
 */

?>

	        </div><!-- #content -->

            <!-- footer -->
            <?php
            $bg_footer = get_field('background_footer');
             ?>
            <?php $bg_footer_css =  ( !empty($bg_footer) ) ? ' style="background-image: url(' . $bg_footer . ');"' : '' ?>
            <footer id="footer"<?php echo $bg_footer_css; ?>>
                <section class="sec-cont">
                    <div class="contacts">
                        <h2>контакты</h2>
                        <div id="foot-phone" class="contact-item contact-phone">
                            <a href="tel:<?php echo sliceptc_clear_phone_number(); ?>"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/ico2.png?ver1.0" alt=""/></i><span><?php echo get_theme_mod( 'Phone Number', '8-916-786-81-05' ); ?></span></a>
                        </div>
                        <div class="contact-item contact-links">
                            <div id="foot-email" class="contact-link"><a href="mailto:<?php echo get_theme_mod( 'Email', 'info@web-impression.ru' ); ?>"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc3.png?ver1.0" alt=""/></i><span><?php echo get_theme_mod( 'Email', 'info@web-impression.ru' ); ?></span></a></div>
                            <div id="foot-skype" class="contact-link"><a href="<?php echo 'https://www.skype.com/ru/' . get_theme_mod( 'Skype', 'web-impression' ); ?>"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc4.png?ver1.0" alt=""/></i><span><?php echo get_theme_mod( 'Skype', 'web-impression' ); ?></span></a></div>
                            <div id="foot-vk" class="contact-link"><a href="<?php echo get_theme_mod( 'VKontakte', 'https://vk.com/web__impression' ); ?>"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc5.png?ver1.0" alt=""/></i><span><?php echo 'vk.com' . parse_url(get_theme_mod( 'VKontakte', 'https://vk.com/web__impression' ), PHP_URL_PATH); ?></span></a></div>
                            <div id="foot-inst" class="contact-link"><a href="<?php echo 'https://www.instagram.com/' . get_theme_mod( 'Instagram', 'web__impression' ); ?>"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc6.png?ver1.0" alt=""/></i><span><?php echo get_theme_mod( 'Instagram', 'web__impression' ); ?></span></a></div>
                        </div>
                        <a href="#pop-up2" class="btn btn-green fancy">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</a>
                    </div>
                </section>
                <div class="foot-bot">
                    <div class="foot-logo"><?php  the_custom_logo(); ?></div>
                    <div class="foot-nav">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-footer',
                            'menu_id'        => '',
                            'menu_class'     => '',
                            'container'      => '',
                        ) );
                        ?>
                    </div>
                </div>
            </footer>
            <!-- end footer -->

            <div class="box box0" data-scroll-speed="2"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/b12.png?ver1.0" alt=""/></div>
            <div class="box box9" data-scroll-speed="6"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/b9.png?ver1.0" alt=""/></div>
            <div class="box box10" data-scroll-speed="5"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/b10.png?ver1.0" alt=""/></div>
            <div class="box box11" data-scroll-speed="2"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/b11.png?ver1.0" alt=""/></div>
            <div class="box box12" data-scroll-speed="3"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/b2.png?ver1.0" alt="" width="75"/></div>
            <div class="box box13" data-scroll-speed="3"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/b2.png?ver1.0" alt="" width="66"/></div>
            <div class="box box14" data-scroll-speed="3"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/b2.png?ver1.0" alt=""/></div>
            </div>
            </div>

            <div style="display:none;">
                <div class="pop-up" id="pop-up1">
                    <h2>ЗАКАЗАТЬ ЗВОНОК</h2>
                    <p>Заполните форму ниже, и мы свяжемся с Вами в&nbsp;ближайшее время</p>
                    <div class="p-form">
                        <?php echo do_shortcode('[contact-form-7 id="174" title="Request Callback"]'); ?>
                    </div>
                </div>
                <div class="pop-up" id="pop-up2">
                    <h2>ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</h2>
                    <p>Для отправки заявки на консультацию <br/>заполните форму ниже</p>
                    <div class="p-form">
                        <?php echo do_shortcode('[contact-form-7 id="174" title="Request Callback"]'); ?>
                    </div>
                </div>
            </div>

        </div><!-- .container -->
    </div><!-- .main-wrapper -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- scripts -->
<script type="text/javascript">
    enquire.register("screen and (min-width: 1000px)", {
        match : function() {
            loadJS('/wp-content/themes/sliceptc/assets/js/desktop.js');
        }
    });
</script>

</body>
</html>
