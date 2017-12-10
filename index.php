<?php
/**
 * @package Autelis
 * @since Autelis 1.0
 * Template Name: Accueil
 */

get_header();
?>
<?php $prestaChoices = get_field('servicesChoice');
			if ($prestaChoices): ?>
	<div class="customPost">
		<div class="customPostImage container-fluid">
			<div class="row">
				<div class="container">
					<?php foreach ($prestaChoices as $post):
									setup_postdata($post);
									$prestationImage = get_field('prestationImage');
					?>
					<a href="/prestations">
						<div class="col-md-3 col-xs-12 col">
							<?php echo file_get_contents($prestationImage);?>
						</div>
					</a>
				<?php endforeach;?>
				</div>
			</div>
		</div>
		<div class="customPostText container-fluid">
			<div class="row">
				<div class="container">
					<?php foreach ($prestaChoices as $post):
									setup_postdata($post);
									$prestationImage = get_field('prestationImage');
									$prestationTexte = get_field('prestationTexte');
									$prestationTexte = strip_tags($prestationTexte);
									$prestationTexte = strlen($prestationTexte) > 130 ? substr($prestationTexte,0,130)."..." : $prestationTexte;
					?>
					<a href="/prestations">
						<div class="col-md-3 col-xs-12 col">
							<?php echo file_get_contents($prestationImage);?>
							<h4><?php echo the_title();?></h4>
							<p><?php echo $prestationTexte;?></p>
						</div>
					</a>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; wp_reset_postdata();?>
	<div class="contentPage container">
		<div class="row text-center textContact">
			<div class="col-md-8 col-md-offset-2">
				<?php while (have_posts()) {
						    the_post();
						    the_content();
						  };
						  wp_reset_query();
				?>
			</div>
		</div>
		<?php $occasionsChoices = get_field('occasionsChoice');
			if ($occasionsChoices): ?>
		<h2 class="text-center">Nos occasions à la une</h2>
		<div class="row">
			<?php foreach ($occasionsChoices as $post):
							setup_postdata($post);
							$occasionImage = get_field('occasionImage');
			?>
			<div class="col-md-4 col-xs-12 text-center contentCol">
				<a href="<?php echo the_permalink() ?>">
					<div style="background-image: url(<?php echo $occasionImage[0]['url'];?>);" class="occasionImage"></div>
					<p><?php echo the_title();?></p>
				</a>
			</div>
			<?php endforeach;?>
		</div>
	</div>
	<?php endif; wp_reset_postdata();?>
</div>
<?php get_footer();?>
