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
            <footer id="footer">
                <section class="sec-cont">
                    <div class="contacts">
                        <h2>контакты</h2>
                        <div class="contact-item contact-phone">
                            <a href="tel:89167868105"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/ico2.png?ver1.0" alt=""/></i><span>8-916-786-81-05</span></a>
                        </div>
                        <div class="contact-item contact-links">
                            <div class="contact-link"><a href="mailto:info@web-impression.ru"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc3.png?ver1.0" alt=""/></i><span>info@web-impression.ru</span></a></div>
                            <div class="contact-link"><a href="#"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc4.png?ver1.0" alt=""/></i><span>web-impression</span></a></div>
                            <div class="contact-link"><a href="#"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc5.png?ver1.0" alt=""/></i><span>vk.com/web__impression</span></a></div>
                            <div class="contact-link"><a href="#"><i><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/soc6.png?ver1.0" alt=""/></i><span>web__impression</span></a></div>
                        </div>
                        <a href="#pop-up2" class="btn btn-green fancy">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</a>
                    </div>
                </section>
                <div class="foot-bot">
                    <div class="foot-logo"><a href="#"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/logo.png?ver1.0" alt=""/></a></div>
                    <div class="foot-nav">
                        <ul>
                            <li><a href="#">о компании</a></li>
                            <li><a href="#">УСЛУГИ</a></li>
                            <li><a href="#">ПРОЦЕСС РАБОТЫ</a></li>
                            <li><a href="#">Портфолио</a></li>
                            <li><a href="#">КОНТАКТЫ</a></li>

                        </ul>
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
                        <div class="form-row"><input type="text" class="t-inp name-inp" placeholder="Введите Ваше имя*"/></div>
                        <div class="form-row"><input type="text" class="t-inp mail-inp" placeholder="Введите Ваш e-mail*"/></div>
                        <div class="form-row"><input type="text" class="t-inp tel-inp" placeholder="Введите Ваш номер телефона*"/></div>
                        <input type="submit" class="btn" value="ОТПРАВИТЬ"/>
                    </div>
                </div>
                <div class="pop-up" id="pop-up2">
                    <h2>ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</h2>
                    <p>Для отправки заявки на консультацию <br/>заполните форму ниже</p>
                    <div class="p-form">
                        <div class="form-row"><input type="text" class="t-inp name-inp" placeholder="Введите Ваше имя*"/></div>
                        <div class="form-row"><input type="text" class="t-inp mail-inp" placeholder="Введите Ваш e-mail*"/></div>
                        <div class="form-row"><input type="text" class="t-inp tel-inp" placeholder="Введите Ваш номер телефона*"/></div>
                        <input type="submit" class="btn" value="ОТПРАВИТЬ"/>
                    </div>
                </div>
            </div>

        </div><!-- .container -->
    </div><!-- .main-wrapper -->
</div><!-- #page -->

<!-- scripts -->
<script type="text/javascript">
    // enquire.register("screen and (min-width: 1000px)", {
    //     match : function() {
    //         loadJS('assets/js/desktop.js?ver1.0');
    //     }
    // });
</script>

<?php wp_footer(); ?>

</body>
</html>
