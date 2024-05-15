<?php
/**
 * Template Name: Homepage
 */
get_header();

?>
	<?php get_template_part("templates-page/banner"); ?>

	<main class="site-main">
		<?php get_template_part("templates-page/product-category"); ?>
		<?php get_template_part("templates-page/products"); ?>
		<?php get_template_part("templates-page/promo"); ?>
		<?php get_template_part("templates-page/popular-product"); ?>
		<?php get_template_part("templates-page/offer"); ?>
		<?php get_template_part("templates-page/flickr"); ?>
		
	</main>

<?php get_footer(); ?>