<?php
// Template Name: Home
get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php

	$imagem_id = get_field('background_home');
	$backgroundLarge = wp_get_attachment_image_src( $imagem_id, 'large');
	$backgroundMedium = wp_get_attachment_image_src( $imagem_id, 'medium');

	?>

	<style type="text/css">
		.introducao {
			background: url("<?php echo $backgroundLarge[0] ?>") no-repeat center;
		}
		@media only screen and (max-width: 767px){
			.introducao {
				background: url("<?php echo $backgroundMedium[0] ?> ") no-repeat center;
			}
		}
	</style>
		<section class="introducao">
			<div class="container">
				<h1><?php the_field('titulo_da_intro'); ?></h1>
				<blockquote>
					<p><?php the_field('quote_da_intro'); ?></p>
					<cite><?php the_field('autor_do_quote'); ?></cite>
				</blockquote>
				<a href="/produtos" class="btn">PRODUTOS</a>
			</div>
		</section>


		<section class="produtos container animar">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">
				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri();?>/img/produtos/passeio.png" alt="bicicleta passeio">
					</div>
					<h3>Passeio</h3>
					<p>Muito melhor do que passear pela orla a vidros fechados.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri();?>/img/produtos/esporte.png" alt="bicicleta passeio">
					</div>
					<h3>Esporte</h3>
					<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri();?>/img/produtos/retro.png" alt="bicicleta passeio">
					</div>
					<h3>Retro</h3>
					<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
				</li>
			</ul>

			<div class="call">
				<p>Clique aqui e veja os detalhes dos produtos</p>
				<a href="/produtos" class="btn btn_fundo_branco">Produtos</a>
			</div>
		</section>

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>

					<?php include(TEMPLATEPATH . "/includes/portifolio-clientes.php");?>

				<div class="call">
				<p>Conheça mais o nosso portfólio</p>
				<a href="/portifolio" class="btn">Portifólio</a>
				</div>
			</div>
		</section>

		<?php include(TEMPLATEPATH . "/includes/qualidade.php");?>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>
