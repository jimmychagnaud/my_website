<?php
/**
 * @package Autelis
 * @since Autelis 1.0
 */
  $args = ['post_type' => 'block'];
  $loop = new WP_Query($args);

  if ($loop->have_posts()) {
      while($loop->have_posts()) : $loop->the_post();
      $footerHoraires = get_field('footerHoraires');
      $footerPaiement = get_field('footerPaiement');
      endwhile;
  }
?>		
	</main>
		<div class="bottom centreVerticalement">
			<div class="row container">
				<div class="col-md-4">
					<div class="imageBottom">
						<?php echo file_get_contents(get_template_directory_uri()."/img/clock.svg"); ?>
					</div>
					<div class="textBottom">
						<h2>Horaires</h2>
						<p><?php echo $footerHoraires ?></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="imageBottom">
						<?php echo file_get_contents(get_template_directory_uri()."/img/credit-card.svg"); ?>
					</div>
					<div class="textBottom">
						<h2>Modes de paiement</h2>
						<p><?php echo $footerPaiement ?></p>
					</div>
				</div>
				<div class="col-md-4">
					<h2 style="color: #FFF;">Suivez nous</h2>
					<a href="https://www.facebook.com/autelisfrance/">
						<img class="bottomIcon" src="<?php echo get_template_directory_uri() ?>/img/facebook.svg" alt="facebook autelis">
					</a>
				</div>
			</div>
		</div>
	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="container text-center">
				<p>© Garage Autelis Services -Tous droits réservés -<a href="/mentions-legales"> Mentions légales</a></p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
</body>
</html>
