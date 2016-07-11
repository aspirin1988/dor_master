<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slideshow.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/public/css/styles.css">
</head>
<body>
<!--НАЧАЛО main section-->
<header id="home">
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-1-2">
				<a class="logo">
					<span class="text-yellow"><?=get_field('logo-1',4)?></span> <br>
					<span class="company-name"><?=get_field('logo-2',4)?></span> <br>
					<span class="text-yellow"><?=get_field('logo-3',4)?></span>
				</a>
			</div>
			<div class="uk-width-medium-1-2 phone-numbers">
				<p>
					<?=get_field('phone-text',4)?> <br>
					<a class="text-yellow" href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a>
				</p>
			</div>
		</div>
	</div>
</header>
<!--КОНЕЦ main section-->

<nav class="uk-navbar" data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top'}">
	<div class="uk-container uk-container-center">
		<ul class="uk-navbar-nav uk-hidden-small uk-navbar-attached" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
			<?php $menu=wp_get_nav_menu_items('main');
			foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent):?>
				<li><a href="<?=$val->url?>" <?php if ($val->object!='page'): ?> data-uk-smooth-scroll="<?php if ($key!=0||$key!==count($menu)-1) echo "{offset: 70}"?>" <?php endif; ?>"><?=$val->title?></a></li>
			<?php endif; } ?>
		</ul>
		<a href="#sidebar-menu" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas="{target:'#sidebar-menu'}"></a>
	</div>
</nav>
<div id="sidebar-menu" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}" data-uk-nav>
			<?php $menu=wp_get_nav_menu_items('main');
			foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent):?>
				<li><a href="<?=$val->url?>" <?php if ($val->object!='page'): ?> data-uk-smooth-scroll="<?php if ($key!=0||$key!==count($menu)-1) echo "{offset: 70}"?>" <?php endif; ?>"><?=$val->title?></a></li>
			<?php endif; } ?>
		</ul>
	</div>
</div>
