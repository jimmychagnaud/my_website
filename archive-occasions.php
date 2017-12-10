<?php
/**
 * @package Autelis
 * @since Autelis 1.0
 * Template Name: Occasions
 */
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$occasions= new WP_Query(array(
    'post_type'=>'occasions',
    'posts_per_page' => 12,
    'paged' => $paged,
));
?>
<div class="container occasionArchive">
	<div class="row">
		<h1>Tous nos véhicules d'occasion</h1>
		<?php while ($occasions->have_posts()) {
					 	$occasions->the_post();
						$occasionImage = get_field('occasionImage');
						$occasionTexte = get_field('occasionTexte');
						$occasionTexte = strlen($occasionTexte) > 300 ? substr($occasionTexte,0,300)."..." : $occasionTexte;
						$prix = get_field('prix');
						$annee = get_field('annee');
						$carburant = get_field('carburant');
						$marque = get_field('marque');
						$modele = get_field('modèle');
		?>
		<div class="col-md-3 col-xs-12 colArchiveOccasion">
			<a href="<?php the_permalink() ?>">
				<div class="imageOccasion" style="background-image: url(<?php echo ($occasionImage[0]['url']); ?>)">
					<div class="hover">
						<p><?php echo $marque.' '.$modele;?></p>
						<p><?php echo $occasionTexte;?></p>
					</div>
				</div>
				<div class="textOccasion">
					<div class="col-md-6 occasionInfos">
						<h3><?php echo the_title();?></h3>
						<p><?php echo $annee;?></p>
						<p><?php echo $carburant;?></p>
					</div>
					<div class="col-md-6 occasionPrix">
						<p><?php echo $prix;?><span style="font-size: .6em;"> €</span></p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<?php };
	$total_pages = $occasions->max_num_pages;
  if ($total_pages > 1):
    $current_page = max(1, get_query_var('paged')); ?>
	<div class="pagination">
		<?php	echo paginate_links(array(
      'base' => get_pagenum_link(1) . '%_%',
      'format' => 'page/%#%',
      'current' => $current_page,
      'total' => $total_pages,
      'prev_text'    => __('precedent'),
      'next_text'    => __('suivant'),
    ));
		echo '</div>';
	endif;
	wp_reset_query();?>
	</div>
</div>
<?php get_footer();?>