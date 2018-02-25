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
							<h2>Contactez moi !</h2>
							<div class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
								<?php echo do_shortcode(get_field('shortcodeDeContact')); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46442.11194396397!2d-0.37867644955202384!3d43.32196255177703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd564885b45c7ae9%3A0x4066517481394b0!2s64000+Pau!5e0!3m2!1sfr!2sfr!4v1519565913539" height="450" style="width:100%;border:0" allowfullscreen></iframe>
				</div>
			<?php };?>
		</div>
	</div>
</div>
<?php get_footer();?>