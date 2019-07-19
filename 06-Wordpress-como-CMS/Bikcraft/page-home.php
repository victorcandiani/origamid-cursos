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

				<?php
					$args = array (
						'post_type' => 'produtos'
					);
					$the_query = new WP_Query ( $args );
				?>

				<?php if ( $the_query -> have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
					<a href="<?php the_permalink(); ?> ">
						<li class="grid-1-3">
							<div class="produtos_icone">
								<img src="<?php the_field('icone_produto') ?>" alt="bicicleta <?php the_title(); ?>">
							</div>
							<h3><?php the_title(); ?></h3>
							<p><?php the_field('resumo_produto') ?></p>
						</li>
					</a>

				<?php endwhile; else: endif; ?>
				<?php wp_reset_query(); wp_reset_postdata(); ?>

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
