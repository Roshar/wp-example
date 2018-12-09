<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<title><?php echo wp_get_document_title();?></title>	
	<?php wp_head();?>
</head>
<body>
	<div class="container">
		<div class="header">
			<header class="wrap header__wrap">
				<div class="header__top">
					<div class="header__logo">
						<a href="<?php home_url();?>"><?php bloginfo('name');?></a>
					</div>
					<div class="header__menu">
						<?php wp_nav_menu([
							'theme_location' => 'top',
							'container' => null
						])?>
					</div>
					<div class="button header__button">
						<a href="#"> Contact us</a>
					</div>
				</div> 
				
				<h1>Тут будет долгожданная реклама </h1>
			</header>
		</div>
		