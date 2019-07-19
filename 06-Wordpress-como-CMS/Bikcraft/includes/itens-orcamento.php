<?php $contato = get_page_by_title('contato'); ?>

		<section class="orcamento">
			<div class="container">
				<h2 class="subtitulo">Orçamento</h2>

				<form action="<?php echo get_template_directory_uri();?>/enviar.php" method="post" name="form" class="formphp orcamento_form grid-8">

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
						<span><?php the_field('telefone', $contato); ?></span>
						<span><?php the_field('email', $contato); ?></span>
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