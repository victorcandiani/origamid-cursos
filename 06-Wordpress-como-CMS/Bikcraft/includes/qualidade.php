<?php $sobre = get_page_by_title('sobre'); ?>

<section class="qualidade container">
			<h2 class="subtitulo"><?php the_field('titulo_em_qualidade', $sobre); ?></h2>
			<img src="<?php echo get_template_directory_uri();?>/img/bikcraft-qualidade.png" alt="logo bikcraft">
			<ul class="qualidade_lista">

				<?php if(have_rows('item_em_qualidade', $sobre)): while(have_rows('item_em_qualidade', $sobre)) : the_row(); ?>

					<li class="grid-1-3">
						<h3><?php the_sub_field('titulo_do_item_em_qualidade'); ?></h3>
							<p><?php the_sub_field('descricao_do_item_em_qualidade'); ?></p>
					</li>

				<?php endwhile; else : endif; ?>
			</ul>
			
			<?php if (!is_page('sobre')) { ?>
			<div class="call">
				<p>Conheça mais a nossa história</p>
				<a href="/sobre" class="btn btn_fundo_branco">Sobre</a>
			</div>
		<?php } ?>

		</section>