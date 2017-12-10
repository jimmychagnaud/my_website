<?php
/**
 * @package Autelis
 * @since Autelis 1.0
 * Template Name: Pages
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
	<?php } else { ?>
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
								<?php echo do_shortcode(get_field('shortcodeContact')); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row text-center">
						<div class="col-md-12">
							<h2>Ou nous trouver ?</h2>
							<p>Garage Autelis - 15 Avenue des Frères Montgolfier, 64140 Lons</p>
							<p>
								<span class="glyphicon glyphicon-phone"></span> 05 59 04 09 40
								<span class="glyphicon glyphicon-envelope"></span> service@autelis.fr
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.366476420109!2d-0.4232987842471401!3d43.30658718279207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd564fa31f53409d%3A0x36a49e0209309ec3!2sGarage+Autelis+Service!5e0!3m2!1sfr!2sfr!4v1506602126769" height="450" style="width: 100%;border:0; padding: 10px;" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			<?php };?>
		</div>
	</div>
</div>
<?php get_footer();?>
