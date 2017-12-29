<?php
/**
 * @package Jimmy Chagnaud
 * @since Jimmy Chagnaud 1.0
 * Template Name: Portfolios
 */
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$portfolios= new WP_Query(array(
    'post_type'=>'portfolios',
    'posts_per_page' => 6,
    'paged' => $paged,
));
?>
<div class="container portfoliosArchive">
	<div class="row">
		<h1>Voici quelques-uns des sites que j'ai crée ou où j'ai participé à leurs élaborations.</h1>
		<?php while ($portfolios->have_posts()) {
			$portfolios->the_post();
			$portfoliosImage = get_field('image_archive_portfolio');
			$portfoliosTexte = get_field('description_single_portfolio');
			$portfoliosTexte = strlen($portfoliosTexte) > 300 ? substr($portfoliosTexte,0,750)."..." : $portfoliosTexte;
			$prix = get_field('prix');
			$annee = get_field('annee');
		?>
		<div class="col-md-6 col-xs-12 colArchiveportfolios">
			<a href="<?php the_permalink() ?>">
				<div class="imageportfolios" style="background-image: url(<?php echo ($portfoliosImage); ?>)">
					<div class="hover">
						<p><?php echo $marque.' '.$modele;?></p>
						<p><?php echo $portfoliosTexte;?></p>
					</div>
				</div>
				<div class="textportfolios">
					<div class="col-md-6 portfoliosInfos">
						<h3><?php echo the_title();?></h3>
						<p><?php echo $annee;?></p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<?php };
	$total_pages = $portfolioss->max_num_pages;
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