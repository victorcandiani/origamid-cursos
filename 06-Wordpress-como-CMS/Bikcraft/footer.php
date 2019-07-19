<?php $contato = get_page_by_title('contato'); ?>	

		<div class="quebra">
			<div class="container">
					<blockquote>
					<p><?php the_field('citacao_rodape', $contato); ?></p>
					<cite><?php the_field('autor_citacao_rodape', $contato); ?></cite>
				</blockquote>
			</div>
		</div>

		<footer>
			<div class="footer">
			<div class="container">
				<div class="grid-8 footer_historia">
					<h3>Nossa história</h3>
					<p><?php the_field('resumo_historia', $contato); ?></p>
				</div>

				<div class="grid-4 footer_contato">
					<h3>Contato</h3>
					<ul>
						<li><?php the_field('telefone', $contato); ?></li>
						<li><?php the_field('email', $contato); ?></li>
						<li><?php the_field('endereco1', $contato); ?></li>
					</ul>
				</div>

				<div class="grid-4 footer_redes">
					<h3>Redes Sociais</h3>

					<?php include(TEMPLATEPATH . "/includes/redes-sociais.php");?>

				</div>
			</div>
			</div>


		</footer>

			<div class="copy">
				<div class="container">
					<p class="grid-16"><?php echo bloginfo( 'name' )."© ".date("Y");?> - Alguns direitos reservados.</p>
				</div>
			</div>

			<!-- Começo JavaScript -->
			<script src="<?php echo get_template_directory_uri();?>/js/libs/jquery-1.11.2.min.js"></script>
			<script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
			<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
			<script>
				$(function() {
					$(".rslides").responsiveSlides();
				 });
			</script>	
			<!-- Fim JavaScript -->
			
			<?php wp_footer(); ?>
	</body>
</html>