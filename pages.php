<?php
/**
 * @package Chagnaud Jimmy
 * @since Chagnaud Jimmy 1.0
 * Template Name: Contact
 */

get_header();?>
<div class="container contentPage">
	<?php if (is_page('contact')) {  ?>
	<div class="row text-center textContact">
		<div class="col-md-8 col-md-offset-2">
			<?php while (have_posts()) {
				    the_post();
				    the_content();};
				  wp_reset_query();
				  ?>
		</div>
	</div>
	<?php }; ?>
	<div class="container contactForm">
		<div class="row">
			<?php if (is_page('contact')) {?>
				<div class="col-md-6">
					<div class="row text-center">
						<div class="col-md-12">
							<h2>Contactez nous !</h2>
							<div class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
								<?php echo do_shortcode(get_field('shortcodeDeContact')); ?>
							</div>
						</div>
					</div>
				</div>
			<?php };?>
		</div>
	</div>
</div>
<?php get_footer();?>
