<section class="qualidade container">
			<h2 class="subtitulo">Qualidade</h2>
			<img src="<?php echo get_template_directory_uri();?>/img/bikcraft-qualidade.png" alt="logo bikcraft">
			<ul class="qualidade_lista">
				<li class="grid-1-3">
					<h3>Durabilidade</h3>
					<p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
				</li>
				<li class="grid-1-3">
					<h3>Design</h3>
					<p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
				</li>
				<li class="grid-1-3">
					<h3>Sustentabilidade</h3>
					<p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
				</li>
			</ul>
			
			<?php if (!is_page( 'sobre')) { ?>
			<div class="call">
				<p>Conheça mais a nossa história</p>
				<a href="portfolio.html" class="btn btn_fundo_branco">Sobre</a>
			</div>
		<?php } ?>

		</section>