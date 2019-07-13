<?php $portfolio = get_page_by_title('portfolio'); ?>

<ul class="portfolio_lista rslides_portfolio">

	<?php if(have_rows('imagens_do_slide', $portfolio)): while(have_rows('imagens_do_slide', $portfolio)) : the_row(); ?>

		<li>
			<div class="grid-8">
				<img src="<?php the_sub_field('portfolio_imagem_1'); ?>" alt="<?php the_sub_field('portfolio_descricao_da_imagem_1'); ?>">
			</div>
			<div class="grid-8">
				<img src="<?php the_sub_field('portfolio_imagem_2'); ?>" alt="<?php the_sub_field('portfolio_descricao_da_imagem_2'); ?>">
			</div>			
			<div class="grid-16">
				<img src="<?php the_sub_field('portfolio_imagem_3'); ?>" alt="<?php the_sub_field('portfolio_descricao_da_imagem_3'); ?>">
			</div>
		</li>

	<?php endwhile; else : endif; ?>
</ul>