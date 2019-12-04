<?php
/**
 * Template Name: Portfolio page template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sliceptc
 */

get_header();
?>

	<div id="primary" class="content-area">
		<div id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			//get_template_part( 'template-parts/content', 'page' );
        ?>
            <!-- content -->
            <div class="content">
                <!-- top section -->
                <section class="inner-top">
                    <div class="wrapper">
<!--                        <h1>Разработка сайта для компании «Consulting group»</h1>-->
                        <h1><?php the_field('page_title'); ?></h1>
                    </div>
                </section>
                <!-- end top section -->
                <section class="section-cols">
                    <div class="wrapper">
                        <div class="cols">
                            <div class="col">
<!--                                <h4><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/ico6.png?ver1.0" alt=""/>Клиент</h4>-->
                                <h4><img src="<?php the_field('icon1'); ?>" alt=""/><?php the_field('title1'); ?></h4>
<!--                                <p>Это совокупность графических элементов, шрифтов и цветов, реализованных на сайте. Основная задача дизайна сайта - объединение всех информационных блоков и формирование </p>-->
                                <p><?php the_field('text1'); ?></p>
                            </div>
                            <div class="col">
<!--                                <h4><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/ico7.png?ver1.0" alt=""/>Задача</h4>-->
                                <h4><img src="<?php the_field('icon2'); ?>" alt=""/><?php the_field('title2'); ?></h4>
                                <!--<p>Разработать сайт-визитку для транспортной компании SфauExpress. Дизайн сайта
                                    отражает строгий стиль компании, а красные элементы подчёркивают динамику и
                                    акцентируют внимание на важной информации.</p>-->
                                <p><?php the_field('text2'); ?></p>
                            </div>
                            <div class="col">
<!--                                <h4><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/ico8.png?ver1.0" alt=""/>Решение</h4>-->
                                <h4><img src="<?php the_field('icon3'); ?>" alt=""/><?php the_field('title3'); ?></h4>
<!--                                <p>Это совокупность графических элементов, шрифтов и цветов, реализованных на сайте. Основная задача дизайна сайта - объединение всех информационных блоков и формирование </p>-->
                                <p><?php the_field('text3'); ?></p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section-preview">
                    <div class="preview">
                        <div class="pols">
<!--                            <div class="pol pol1"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m4.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol1"><img src="<?php the_field('img1'); ?>" alt=""/></div>
<!--                            <div class="pol pol5"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m9.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol5"><img src="<?php the_field('img2'); ?>" alt=""/></div>
<!--                            <div class="pol pol4"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m8.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol4"><img src="<?php the_field('img3'); ?>" alt=""/></div>
<!--                            <div class="pol pol3"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m7.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol3"><img src="<?php the_field('img4'); ?>" alt=""/></div>
<!--                            <div class="pol pol2"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m6.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol2"><img src="<?php the_field('img5'); ?>" alt=""/></div>
<!--                            <div class="pol pol8"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m12.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol8"><img src="<?php the_field('img6'); ?>" alt=""/></div>
<!--                            <div class="pol pol6"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m10.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol6"><img src="<?php the_field('img7'); ?>" alt=""/></div>
<!--                            <div class="pol pol7"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m11.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol7"><img src="<?php the_field('img8'); ?>" alt=""/></div>
<!--                            <div class="pol pol9"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m13.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol9"><img src="<?php the_field('img9'); ?>" alt=""/></div>
<!--                            <div class="pol pol10"><img src="--><?php //echo get_bloginfo('template_url'); ?><!--/assets/img/m14.png?ver1.0" alt=""/></div>-->
                            <div class="pol pol10"><img src="<?php the_field('img10'); ?>" alt=""/></div>
                        </div>
                    </div>
                </section>
                <?php
                $bg_section_apply = get_field('background_section_apply');
                if( !empty($bg_section_apply) ): ?>
                <section class="section-apply" style="background-image: url(<?php echo $bg_section_apply; ?>);">
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
                <?php endif; ?>

            </div>
            <!-- end content -->


            <?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
