<?php
/**
 * @package Autelis
 * @since Autelis 1.0
 * Template Name: Prestations
 */
get_header();?>
<div class="container-fluid prestationArchive">
	<div class="row">
		<h1>Toutes nos prestations</h1>
		<?php $i = 0; $j = 0; $g = 0; $idCol = 0;
		while (have_posts()) :
		 	the_post();
			$prestationImage = get_field('prestationImage');
			$prestationTexte = get_field('prestationTexte');
			$colBgImage = get_field('bgImagePresta');
			$i ++;
			$idCol ++;?>
		<div class="lineContentLg">
			<div class="<?php if($i%3 == 0 || $j == 1) : $j ++; echo 'left'; else: echo 'right'; endif; ?>">
				<div id="image<?php echo $idCol ?>" class="colArchivePresta colImage" style="background-image: url(<?php echo $colBgImage?>)"></div>
				<div id="col<?php echo $idCol ?>" class="colArchivePresta">
					<?php echo file_get_contents($prestationImage);?>
					<div class="contentArchivePresta">
						<h3><?php echo the_title();?></h3>
						<p><?php echo $prestationTexte ?></p>
					</div>
					<div id="viewMoreButton<?php echo $idCol ?>" onclick="viewMore(<?php echo $idCol ?>)" class="viewMoreButton btn">Voir plus</div>
				</div>
			</div>	
		</div>
		<?php
		if ($j == 1) :
			$i = 2;
		endif; 
		$g++; ?>
		<div class="lineContentXs">
			<div class="<?php if($g%2 == 0) : echo 'left'; else: echo 'right'; endif; ?>">
				<div id="imageXs<?php echo $idCol ?>" class="colArchivePresta colImage" style="background-image: url(<?php echo $colBgImage?>)"></div>
				<div id="colXs<?php echo $idCol ?>" class="colArchivePresta">
					<?php echo file_get_contents($prestationImage);?>
					<div class="contentArchivePresta">
						<h3><?php echo the_title();?></h3>
						<p><?php echo $prestationTexte ?></p>
					</div>
					<div id="viewMoreButtonXs<?php echo $idCol ?>" onclick="viewMoreXs(<?php echo $idCol ?>)" class="viewMoreButton btn">Voir plus</div>
				</div>
			</div>	
		</div>
		<?php endwhile; wp_reset_query();?>
	</div>
	<?php $query = new WP_query(array('post_type' => 'marques', 'posts_per_page' => -1));
	if ($query->have_posts()): ?>
	<div class="row nosMarques">
		<h2 class="text-center">Nos marques</h2>
		<div class="references">
      <div class="left-arrow"><span class="glyphicon glyphicon-menu-left"></span></div>
      <div class="right-arrow"><span class="glyphicon glyphicon-menu-right"></span></div>
      <div class="content-references">
        <ul>
					<?php while ($query->have_posts()) : $query->the_post();
					$imageUrl = get_field('marqueImg'); ?>
          <li style="background-image: url(<?php echo $imageUrl ?>)"></li>
					<?php endwhile;?>
				</ul>            
      </div>
		</div>
	</div>
	<?php endif; wp_reset_postdata();?>
</div>
<script>var _references = document.querySelector('.references');

if (_references) {
  var _list = _references.querySelector('ul'),
    _left_btn = _references.querySelector('.left-arrow'),
    _right_btn = _references.querySelector('.right-arrow'),
    _container_width = null,
    _list_width = _list.offsetWidth,
    _ratio = null,
    _current = 0;

  var _calcul_ratio = function(e) {
    _container_width = _references.querySelector('.content-references').offsetWidth;
    _ratio = _list_width / _container_width;
    _max_decal = _container_width - _list_width;
  };

  window.addEventListener('resize', _calcul_ratio);

  var _move = function(d) {

    if (d > 0) {
      d = 0;
    } else if (d < _max_decal) {
      d = _max_decal;
    }
    _current = d;
    _list.style.left = d + 'px';

  };

  _left_btn.addEventListener('click', function(e) {
    var _decal = _current + _container_width;
    _move(_decal);
  });

  _right_btn.addEventListener('click', function(e) {
    var _decal = _current - _container_width;
    _move(_decal);
  });

  _calcul_ratio();
}

var viewMore = function(id) {
  if ($('#col' + id).hasClass("viewMore")) {
    $('.colArchivePresta').removeClass('viewMore');
    $('.colImage').removeClass('viewMore');
    $('#viewMoreButton' + id).text('Voir plus');
  } else {
    $('.colArchivePresta').removeClass('viewMore');
    $('.colImage').removeClass('viewMore');
    $('#viewMoreButton' + id).text('Voir moins');
    $('#col' + id).addClass('viewMore');
    $('#image' + id).addClass('viewMore');
  }
}

var viewMoreXs = function(id) {
  if ($('#colXs' + id).hasClass("viewMore")) {
    $('.colArchivePresta').removeClass('viewMore');
    $('.colImage').removeClass('viewMore');
    $('#viewMoreButtonXs' + id).text('Voir plus');
  } else {
    $('.colArchivePresta').removeClass('viewMore');
    $('.colImage').removeClass('viewMore');
    $('#viewMoreButtonXs' + id).text('Voir moins');
    $('#colXs' + id).addClass('viewMore');
    $('#imageXs' + id).addClass('viewMore');
  }
}</script>
<?php get_footer();?>