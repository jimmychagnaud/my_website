<?php
/**
 * @package Autelis
 * @since Autelis 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?> style="margin-top: 0 !important;">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width">
  <link rel="manifest" href="manifest.json">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="application-name" content="Autelis">
	<meta name="apple-mobile-web-app-title" content="Autelis">
	<meta name="theme-color" content="#89b700">
	<meta name="msapplication-navbutton-color" content="#89b700">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="msapplication-starturl" content="/">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
  <div class="container" id="headerPage">
    <header>
			<nav class="navbar navbar-default">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top" aria-expanded="false">
		        <span class="sr-only">Afficher le menu</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">
		        <img alt="Brand" src="<?php echo get_template_directory_uri() ?>/img/logo.png">
		      </a>
		      <ul class="headerInfosContact">
						<li><span class="glyphicon glyphicon-map-marker"></span><a href="/contact"> Accés</a></li>
						<li><span class="glyphicon glyphicon-earphone"></span><a href="/contact"> 05 59 04 09 40</a></li>
					</ul>
		    </div>
		    <div class="collapse navbar-collapse" id="navbar-collapse-top">
	       	<?php wp_nav_menu([
								  'theme_location' => 'Top',
								  'menu_id'        => 'top-menu',
								  'menu_class'     => 'nav navbar-nav navbar-right',
								]);?>
		    </div>
			</nav>
		</header>
	</div>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php if (is_front_page() || is_home()) : ?>
			<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bgTop4.png');">
				<div class="contentHeader">
					<div class="title">
						<?php echo get_field('titreAccueil'); ?>
					</div>
					<p>Aperçu rapide de nos services</p>
					<img class="animated bounce" src="<?php echo get_template_directory_uri() ?>/img/down-arrow.svg" alt="">
				</div>
			</div>
			<?php else: ?>
			<div class="header" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bgTop1.png');"></div>
			<?php endif; ?>