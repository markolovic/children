<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title> 
		<!-- CSS LINKS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
    <link media="screen and (min-width: 720px)" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/720_grid.css" rel="stylesheet"></link>
  <link media="screen and (min-width: 986px)" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/986_grid.css" rel="stylesheet"></link>
  <link media="screen and (min-width: 1236px)" href="<?php bloginfo('template_directory'); ?>/css/1236_grid.css" rel="stylesheet"></link>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
  <?php wp_head(); ?>
</head>
<body>

<div class="header">
	<div class="grid">
		<div class="slot-0-1">
			<img src="<?php bloginfo('template_directory'); ?>/rsc/logo2.png" alt="">
		</div>
		<div class="slot-2-3-4-5">
			<div class="row">
				<a href="https://twitter.com/childrensociety"><img class="sm" src="<?php bloginfo('template_directory'); ?>/rsc/twitter2.svg" alt=""></a>
				<a href="https://www.facebook.com/groups/379186128899130/?__mref=message_bubble"><img class="sm" src="<?php bloginfo('template_directory'); ?>/rsc/facebook2.svg" alt=""></a>
			</div>
			<h1>
				Challenge Leader Pack
			</h1>
		</div>
	</div>
</div>

<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
