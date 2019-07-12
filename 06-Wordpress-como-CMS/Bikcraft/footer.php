		<div class="quebra">
			<div class="container">
					<blockquote>
					<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana".</p>
					<cite>WILLIAM MORRIS</cite>
				</blockquote>
			</div>
		</div>

		<footer>
			<div class="footer">
			<div class="container">
				<div class="grid-8 footer_historia">
					<h3>Nossa história</h3>
					<p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem da nossa casa.</p>
				</div>

				<div class="grid-4 footer_contato">
					<h3>Contato</h3>
					<ul>
						<li>+55 (21) 99999-9999</li>
						<li>contato@bikcraft.com</li>
						<li>Rua Ali Perto - Botafogo</li>
					</ul>
				</div>

				<div class="grid-4 footer_redes">
					<h3>Redes Sociais</h3>
					<ul>
						<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/redes-sociais/facebook.png" alt="icone facebook"></a></li>
						<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/redes-sociais/instagram.png" alt="icone instagram"></a></li>
						<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/redes-sociais/twitter.png" alt="icone twitter"></a></li>
					</ul>
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