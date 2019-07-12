<?php
// Template Name: Produtos
get_header(); 
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
<?php include(TEMPLATEPATH . "/includes/intro.php");?>
		
		<section class="container produtos_item animar-interno">
			<div class="grid-11">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
				<h2>Passeio</h2>
			</div>
			<div class="grid-5 produto_icone">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/passeio.png" alt="icone Passeio">
			</div>
			<div class="grid-8">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio">
			</div>
			<div class="grid-8 produto_info">
				<p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
			</section>

				<section class="container produtos_item">
			<div class="grid-11">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft esporte">
				<h2>Esporte</h2>
			</div>
			<div class="grid-5 produto_icone">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/esporte.png" alt="icone esporte">
			</div>
			<div class="grid-8">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft esporte">
			</div>
			<div class="grid-8 produto_info">
				<p>Mais rápida do que Forrest Gump, ninguém vai pegar você. A Bikcraft Esporte é uma bicicleta desenhada para a máxima performance. O seu desempenho supera qualquer uma da categoria.</p>
				<ul>
					<li>Precisão</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
			</section>

				<section class="container produtos_item">
			<div class="grid-11">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft retro">
				<h2>Retro</h2>
			</div>
			<div class="grid-5 produto_icone">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/retro.png" alt="icone retro">
			</div>
			<div class="grid-8">
				<img src="<?php echo get_template_directory_uri();?>/img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft retro">
			</div>
			<div class="grid-8 produto_info">
				<p>O passado volta para lembrarmos o que devemos fazer no futuro. A Bikcraft Retrô é uma bicicleta estiloza, feita para você que gosta do clássico, mas que não abre mão do conforto.</p>
				<ul>
					<li>Conforto</li>
					<li>Velocidade</li>
					<li>Design</li>
					<li>Versatilidade</li>
				</ul>
			</div>
		</section>

		<section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>

				<form action="enviar.php" method="post" name="form" class="formphp orcamento_form grid-8">

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

					<button id="enviar" name="enviar" type="submit" class="	btn">Enviar</button>
				</form>

				<div class="orcamento_dados grid-8">
					<h3>Dados</h3>
					<span>+55 (21) 93223 3232</span>
					<span>orcamento@bikcraft.com</span>
					<h3>Monte a sua Bikcraft</h3>
					<p>Escolha as especificações:</p>
					<ul>
						<li>Cores</li>
    				<li>Estilo</li>
    				<li>Medidas</li>
   					<li>Acessórios</li>
    				<li>E Outros</li>
					</ul>
				</div>


			</div>
			
		</section>

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>