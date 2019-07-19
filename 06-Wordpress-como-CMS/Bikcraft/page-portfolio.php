<?php
// Template Name: Portfolio
get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
<?php include(TEMPLATEPATH . "/includes/intro.php");?>

		<section class="container animar-interno">
			<ul class="rslides">
				<?php if(have_rows('depoimentos')): while(have_rows('depoimentos')) : the_row(); ?>

					<li>
						<blockquote class="quote_clientes">
							<p><?php the_sub_field('depoimento_do_cliente'); ?></p>
								<cite><?php the_sub_field('nome_do_cliente'); ?></cite>
						</blockquote>
					</li>

				<?php endwhile; else : endif; ?>
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">

				<?php include(TEMPLATEPATH . "/includes/portifolio-clientes.php");?>
			
			</div>
		</section>

<?php endwhile; else: endif; ?>		
<?php get_footer(); ?>