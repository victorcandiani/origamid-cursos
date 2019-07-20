<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>
			<?php bloginfo('name') . wp_title(' | ')?><?php echo " - " ?><?php  the_field('titulo_seo'); ?>	
		</title>
		<meta name="description" content="Compre a sua biclicleta personalizada na Bikcraft. Possuímos modelos de Passeio, Retrô e Esporte.">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name') . wp_title(' | ')?><?php echo " - " ?><?php  the_field('titulo_seo'); ?>"/>
		<meta property="og:description" content="Compre a sua biclicleta personalizada na Bikcraft. Possuímos modelos de Passeio, Retrô e Esporte."/>
		<meta property="og:url" content="<?php bloginfo('url')?>"/>
		<meta property="og:image" content="<?php echo get_template_directory_uri();?>/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

		<?php wp_head(); ?>
	</head>
	<body>


		<header>
			<div class="container">
				<a href="/" class="grid-4">
					<img src="<?php echo get_template_directory_uri();?>/img/bikcraft.png" alt="bikcraft logo">
				</a>
				<nav class="header_menu grid-12">
					<?php
						$args = array(
							'menu' => 'principal',
							'theme_location' => 'menu-principal',
							'container' => false
						);
						wp_nav_menu( $args );
					?>
				</nav>
			</div>
		</header>