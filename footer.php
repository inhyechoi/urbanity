<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package urbanity
 */

?>

	</div><!-- #content -->
	<section class="quote-section theme-dark">
		<p><?php echo the_field('quote'); ?></p>
	</section>
	<footer id="colophon" class="site-footer theme-light">
		<div class="site-info">
                <div class="footer-container l-container">
					<img class="appstore button flat" src="<?php the_field('appstore_button_flat'); ?>" />
					<img class="googleplay button flat" src="<?php the_field('googleplay_button_flat'); ?>" />
					<div class="footer-text">
						<p><?php echo the_field('address'); ?></p>
						<p><?php echo the_field('email'); ?></p>
					</div>
				</div>
				<div class="copyright l-container">
					<p>© 2017 - URBANITY - All Rights Reserved</p>
				</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
