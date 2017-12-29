<?php
/**
 * @package Jimmy Chagnaud
 * @since Jimmy Chagnaud 1.0
 * Template Name: Single-porfolios
 */
get_header();?>
<div class="container portfolioSingle">
	<div class="row">
		<?php while (have_posts()) {
					 	the_post();
						$portfolioImage = get_field('galerie_single_portfolio');
						$portfolioTexte = get_field('description_single_portfolio');
		?>
		<h1><?php echo the_title();?></h1>
		<div class="col-md-12 col-xs-12 colSingle">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php for ($i = 0; $i < sizeof($portfolioImage); $i++) : 
                  if ($i == 0):?>
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <?php else :?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>
          <?php endif; endfor; ?>
        </ol>
		  <div class="carousel-inner">
		  	<?php for ($i = 0; $i < sizeof($portfolioImage); $i++) : 
		  					if ($i == 0):?>
		    					<div class="item active">
							    	<div class="imageSingle" style="background-image: url(<?php echo ($portfolioImage[0]['url']); ?>)"></div>
							    </div>
		  					<?php else :?>
		    					<div class="item">
							    	<div class="imageSingle" style="background-image: url(<?php echo ($portfolioImage[$i]['url']); ?>)"></div>
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
    <div class="textPortfolio">
      <?php echo $portfolioTexte ?>
    </div>
  </div>
</div>
<?php };
wp_reset_query();
?>
<?php get_footer();?>