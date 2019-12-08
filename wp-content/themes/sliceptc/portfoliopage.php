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
		while ( have_posts() ) : the_post();
			//get_template_part( 'template-parts/content', 'page' );
        ?>
            <!-- content -->
            <div class="content">
                <!-- top section -->
                <section class="inner-top">
                    <div class="wrapper">
                        <h1><?php the_field('page_title'); ?></h1>
                    </div>
                </section>
                <!-- end top section -->
                <section class="section-cols">
                    <div class="wrapper">
                        <div class="cols">
                            <?php
                            $posts = get_posts( array(
                                'numberposts' => 3,
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'portfolio',
                                'suppress_filters' => true,
                            ) );
                            ?>
                            <?php foreach ( $posts as $post ) : setup_postdata($post); ?>
                            <div class="col">
                                <h4><?php the_post_thumbnail(); the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <?php wp_reset_postdata(); endforeach; ?>
                        </div>
                    </div>
                </section>
                <section class="section-preview">
                    <div class="preview">
                        <div class="pols" data-masonry='{ "itemSelector": ".pol", "columnWidth": 20 }'>
                            <div class="pol pol1"><img src="<?php the_field('img1'); ?>" alt=""/></div>
                            <div class="pol pol5"><img src="<?php the_field('img2'); ?>" alt=""/></div>
                            <div class="pol pol4"><img src="<?php the_field('img3'); ?>" alt=""/></div>
                            <div class="pol pol3"><img src="<?php the_field('img4'); ?>" alt=""/></div>
                            <div class="pol pol2"><img src="<?php the_field('img5'); ?>" alt=""/></div>
                            <div class="pol pol8"><img src="<?php the_field('img6'); ?>" alt=""/></div>
                            <div class="pol pol6"><img src="<?php the_field('img7'); ?>" alt=""/></div>
                            <div class="pol pol7"><img src="<?php the_field('img8'); ?>" alt=""/></div>
                            <div class="pol pol9"><img src="<?php the_field('img9'); ?>" alt=""/></div>
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
                            <?php echo do_shortcode('[contact-form-7 id="179" title="Leave order"]') ?>
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
