<?php
// Template Name: Contato
get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/includes/intro.php");?>

		<section class="contato container animar-interno">

				<form action="enviar.php" method="post" name="form" class="formphp contato_form grid-8">

					<label for="nome">Nome</label>
					<input id="nome" name="nome" type="text" placeholder="Digite seu nome">

					<label for="email">E-mail</label>
					<input id="email" name="email" type="email" placeholder="Digite seu melhor email">

					<label for="telefone">Telefone</label>
					<input id="telefone" name="telefone" type="text" placeholder="Digite seu telefone">

					<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
					<input type="text" class="nao-aparece" name="leaveblank">
					<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
					<input type="text" class="nao-aparece" name="dontchange" value="http://" >

					<label for="mensagem">Mensagem</label>
					<textarea name="mensagem" id="mensagem" placeholder="Digite sua mensagem"></textarea>

					<button id="enviar" name="enviar" type="submit" class="	btn btn_fundo_branco">Enviar</button>
				</form>

				<div class="contato_dados grid-8">
					<h3>Dados</h3>
					<span>+55 (21) 93223 3232</span>
					<span>orcamento@bikcraft.com</span>
					<span>Rua Ali Perto - Botafogo</span>
					<span>Rio de Janeiro - RJ - Brasil</span>
					<h3>Redes Sociais</h3>
					<ul>
						<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/redes-sociais/facebook.png" alt="icone facebook"></a></li>
						<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/redes-sociais/instagram.png" alt="icone instagram"></a></li>
						<li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/redes-sociais/twitter.png" alt="icone twitter"></a></li>
					</ul>
			</div>
		</section>

		<section class="container contato_mapa">
			<a class="grid-16" href="#" target="_blank"><img src="<?php echo get_template_directory_uri();?>/img/endereco-bikcraft.jpg" alt="mapa endereço bikcraft"></a>
		</section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>