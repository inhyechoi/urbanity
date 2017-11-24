<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package urbanity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <section class="about-section theme-light">
                <div class="l-container">
                    <div class="about-text-section">
                        <img class="about-logo" src="<?php the_field('about_logo'); ?>" />
                        <h2><?php echo the_field('about_main_text'); ?></h2>
                        <p><?php echo the_field('about_sub_text'); ?></p>
                        <img class="appstore button" src="<?php the_field('appstore_button'); ?>" />
                        <img class="googleplay button" src="<?php the_field('googleplay_button'); ?>" />
                        <img class="app-image" src="<?php the_field('app_image'); ?>" />
                    </div>
                       
                </div>
             </section>

            <section class="service-section theme-dark">
                <div class="service-container">
                    <div class="l-container service">
                        <img class="icon-one" src="<?php the_field('icon_one'); ?>" />
                        <img class="icon-one-dark" src="<?php the_field('icon_one_dark'); ?>" />
                        <h2><?php echo the_field('icon_one_title'); ?></h2>
                        <p><?php echo the_field('icon_one_text'); ?></p>
                    </div>
                    <div class="l-container service">
                        <img class="icon-two" src="<?php the_field('icon_two'); ?>" />
                        <img class="icon-two-dark" src="<?php the_field('icon_two_dark'); ?>" />
                        <h2><?php echo the_field('icon_two_title'); ?></h2>
                        <p><?php echo the_field('icon_two_text'); ?></p>
                    </div>
                    <div class="l-container service">
                        <img class="icon-three" src="<?php the_field('icon_three'); ?>" />
                        <img class="icon-three-dark" src="<?php the_field('icon_three_dark'); ?>" />
                        <h2><?php echo the_field('icon_three_title'); ?></h2>
                        <p><?php echo the_field('icon_three_text'); ?></p>
                    </div>
                    <div class="l-container service">
                        <img class="icon-four" src="<?php the_field('icon_four'); ?>" />
                        <img class="icon-four-dark" src="<?php the_field('icon_four_dark'); ?>" />
                        <h2><?php echo the_field('icon_four_title'); ?></h2>
                        <p><?php echo the_field('icon_four_text'); ?></p>
                    </div>
                </div>
            </section>

            <section class="about2-section theme-light">
                <div class="l-container">
                    <img class="about2-image" src="<?php the_field('about2_img'); ?>" />
                </div>
             </section>

             <?php endwhile; ?>
 
            
        <?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); 
