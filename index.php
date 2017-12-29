<?php
/**
 * @package Jimmy Chagnaud
 * @since Jimmy Chagnaud 1.0
 * Template Name: Accueil
 */

get_header();
?>
<div class="slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		  <div class="carousel-inner">
		  	<div class="contentHeader">
		  		<h1>Développeur web</h1>
					<a href="/contact" class="btn btn-primary">Contactez moi</a>
		  	</div>
		    <div class="item active">
		    	<div class="dev"></div>
		    </div>
		    <div class="item">
		      <div class="dev bg2"></div>
		    </div>
		    <div class="item">
		      <div class="dev bg3"></div>
		    </div>
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
  <main id="main" class="site-main container">
    <h1>Developpeur Web freelance à Pau !</h1>
		<?php while (have_posts()) {
			the_post();
			the_content();};
			wp_reset_query();
		?>
<?php get_footer();?>