<?php
/**
 * @package Autelis
 * @since Autelis 1.0
 * Template Name: Single Occasions
 */
get_header();?>
<div class="container occasionSingle">
	<div class="row">
		<?php while (have_posts()) {
					 	the_post();
						$occasionImage = get_field('occasionImage');
						$occasionTexte = get_field('occasionTexte');
						$caracteristiques = get_field('repeaterOccasion');
						$prix = get_field('prix');
						$annee = get_field('annee');
						$carburant = get_field('carburant');
						$marque = get_field('marque');
						$modele = get_field('modele');
						$pfiscal = get_field('pfiscal');
						$boiteVitesse = get_field('boiteVitesse');
		?>
		<h1><?php echo the_title();?></h1>
		<div class="col-md-6 col-xs-12 colSingle">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		  	<?php for ($i = 0; $i < sizeof($occasionImage); $i++) : 
		  					if ($i == 0):?>
		    					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  					<?php else :?>
		    					<li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>
		  	<?php endif; endfor; ?>
			</ol>
		  <div class="carousel-inner">
		  	<?php for ($i = 0; $i < sizeof($occasionImage); $i++) : 
		  					if ($i == 0):?>
		    					<div class="item active">
							    	<div class="imageSingle" style="background-image: url(<?php echo ($occasionImage[0]['url']); ?>)"></div>
							    </div>
		  					<?php else :?>
		    					<div class="item">
							    	<div class="imageSingle" style="background-image: url(<?php echo ($occasionImage[$i]['url']); ?>)"></div>
							    </div>
		  	<?php endif; endfor; ?>
		  </div>
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Precedent</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Suivant</span>
		  </a>
		</div>
		</div>
		<div class="col-md-6 col-xs-12 colSingle textOccasion">
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<p>Marque: <?php echo $marque ;?></p>
					<p>Modèle: <?php echo $modele ;?></p>
					<p>Année: <?php echo $annee ;?></p>
					<p>Energie: <?php echo $carburant ;?></p>
					<p>Boite de vitesse: <?php echo $boiteVitesse ;?></p>
					<p>Chevaux fiscaux: <?php echo $pfiscal ;?> cv</p>
				</div>
				<div class="col-md-6 col-xs-6 divPrice">
					<p class="price" ><?php echo $prix ;?><span> €</span></p>
					<a href="/contact" class="btn btn-primary">Nous contacter</a><br>
					<a href="/contact" class="phoneNumber"><span class="glyphicon glyphicon-earphone"></span> 05 59 04 09 40 </a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="margin-top: 25px;">
					<p><?php echo $occasionTexte ;?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 caracteristiquesComp">
			<h3>Caractéristiques complémentaires</h3>
			<p class="caracteristiques"><?php foreach ($caracteristiques as $caracteristique): ?>
				<?php echo $caracteristique['caracteristique'].': '.$caracteristique['caracteristiqueValue']; ?><br>
				<?php endforeach; ?></p>
		</div>
	</div>
		<?php };
		wp_reset_query();
		?>
</div>
<?php get_footer();?>