<?php
get_header();

?>
		

		<div class ="menu">
			<nav>
				<a href="#">Home</a>
				<a href="#">Sobre</a>
				<a href="#">Blog</a>
				<a href="#">Portifólio</a>
				<a href="#">Contato</a>
				<div class="animation start-home"></div>
			</nav>
		</div>

		</div>
		<div class="geral">
			<div class="topo">
				Buscar </br>
					<input class = "buscar" type="text" id="txtBusca" placeholder="Buscar..."/>
				
			</div>

			<div class="esquerda">
				<h4>Sobre</h4>
				Site desenvolvido para a disciplina de DACS

			</div>
			<div class="esquerda">
				<h4>Post Recentes</h4>
			</div>
			<div class="esquerda">
				<h4>Tags</h4>
				<a href=" "><input type="submit" value="Suculentas" class="tags"/></a>
				<a href=" "><input type="submit" value="Suculentas" class="tags"/></a>
			</div>
			<div class="direita">
				
				<?php
			   if(have_posts()){
			       while (have_posts()){
			       	   the_post();
			       	   the_title();
			       	   the_content();
			       	   
			    	   $comments = get_comments(array(
			            'post_id' => $postid,
			            'status' => 'approve' //Change this to the type of comments to be displayed
			           ));
			           wp_list_comments(array(
				            'per_page' => 10, //Allow comment pagination
				            'reverse_top_level' => false //Show the latest comments at the top of the list
				       ), $comments);
			       }
			   }
			?>


		</div>	
		</div>

		<div class="info">

		<div class="form">
			<form action = "processaCadastro.php" method = "post">
				<input type="text" class="nome" name="nome" placeholder=" Nome" <br/>
				<input type="text" class="email" name="email" placeholder=" E-mail"/><br/>  
				<input type = "text" class="assunto" name="assunto" placeholder=" Assunto"/><br/>
				<input type = "text" class="mensagem" name="mensagem" placeholder=" Mensagem"/><br/>
				<input type="submit" value="Enviar" class="botao"/>
			</form>
		</div>
			<img src="http://172.18.1.143:8070/wp-content/themes/thafila/cactohug.png" class="cactoform" /> 

		</div>

		<div class="rodape">
			
		</div>
