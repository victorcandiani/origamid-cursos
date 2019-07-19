<?php
// Template Name: Contato
get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/includes/intro.php");?>

		<section class="contato container animar-interno">

				<form action="<?php echo get_template_directory_uri();?>/enviar.php" method="post" name="form" class="formphp contato_form grid-8">

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
						<span><?php the_field('telefone'); ?></span>
						<span><?php the_field('email'); ?></span>
						<span><?php the_field('endereco1'); ?></span>
						<span><?php the_field('endereco2'); ?></span>
					<h3>Redes Sociais</h3>

					<?php include(TEMPLATEPATH . "/includes/redes-sociais.php");?>

			</div>
		</section>

		<section class="container contato_mapa">
			<a class="grid-16" href="<?php the_field('link_do_endereco_no_google'); ?>" target="_blank"><img src="<?php the_field('imagem_do_mapa'); ?>" alt="mapa endereço bikcraft"></a>
		</section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>