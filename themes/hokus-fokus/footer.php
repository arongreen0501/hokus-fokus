<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hokus_Fokus
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="container">
			<div>LOGO</div>
			<div class="footer-info">
				<div>
					<?php the_field('contact_address', 'option'); ?> - <?php the_field('contact_location', 'option'); ?>
				</div>
				<div>
					<?php the_field('contact_email', 'option'); ?> - <?php the_field('contact_phone', 'option'); ?>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
