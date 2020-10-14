<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>National Today | Antonio Ricardo Contreras Ramos</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.slides.min.js"></script>
	<script type="text/javascript">
       
       $(function(){
      $(".slideshare").slidesjs({
        width: 940,
        height: 528
      });
    });
	</script>
</head>
<body>
<div class="wrap">
	<header>
		<div class="logo">
			<a href="#"><img src="img/logo.png" alt="National Today"></a>
		</div>
		<nav class="menu-desktop">
			
			<?php wp_nav_menu(
				array(
					'container'=>false,
					'items_wrap'=>'<ul>%3$s</ul>',
					'theme_location'=>'menu'
				)
			);
			?>
		</nav>
		<nav class="menu-mobile">
			
			<div class="menu_bar">
				<a href="#" class="btn-menu"><i class="fa fa-bars"></i></a>
			</div>
			<a href="#"><i class="fa fa-user"></i></a>
			<nav class="menu-desktop">
			
			<?php wp_nav_menu(
				array(
					'container'=>false,
					'items_wrap'=>'<ul>%3$s</ul>',
					'theme_location'=>'menu_mobile'
				)
			);
			?>
		</nav>
		</nav>
	</header>