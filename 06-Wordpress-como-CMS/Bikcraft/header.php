<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="Compre a sua biclicleta personalizada na Bikcraft. Possuímos modelos de Passeio, Retrô e Esporte.">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:description" content="Compre a sua biclicleta personalizada na Bikcraft. Possuímos modelos de Passeio, Retrô e Esporte."/>
		<meta property="og:url" content="https://bikcraft.com"/>
		<meta property="og:image" content="https://bikcraft.com/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
		<script src="<?php echo get_template_directory_uri();?>/js/libs/modernizr.custom.45655.js"></script>

		<?php wp_head(); ?>
	</head>
	<body>


		<header>
			<div class="container">
				<a href="/" class="grid-4">
					<img src="<?php echo get_template_directory_uri();?>/img/bikcraft.png" alt="bikcraft logo">
				</a>
				<nav class="header_menu grid-12">
					<ul>
						<li><a href="/sobre">Sobre</a></li>
						<li><a href="/produtos">Produtos</a></li>
						<li><a href="/portifolio">Portfólio</a></li>
						<li><a href="/contato">Contato</a></li>
					</ul>
				</nav>
			</div>
		</header>