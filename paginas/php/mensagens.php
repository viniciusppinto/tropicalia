<!DOCTYPE HTML>

<!-- AUTOR:	Vinícius Pereira Pinto -->

<html>

	<head>
		
		<title> MENSAGENS	</title>
		
		<meta charset="UTF-8">
		<meta name="copyright" content="Vinil" />
		
		<!-- PARA INSERIR OS CÓDIGOS CSS -->
		<link rel="stylesheet" type="text/css" href="../../css/estilo_autores.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/contato.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/contato1.css"/>
		<!-- PARA INSERIR O FAVICON -->
		<link rel="shortcut icon" href="../../imagens/favicon.ico" />
		<!-- PARA INSERIR ICONES -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
	</head>
	
	<body>
		
		<header id="cabecalho">
			
			<div id="logo">
				&nbsp;&nbsp;T R O P I </br>
				&nbsp;&nbsp;C Á L I A 
			</div>
			
			<nav id="menu">
				<h1> Menu Principal </h1>
				<ol>
					<a href="../../index.html"> <li id="home"> <i class="material-icons">home</i> </li></a>
					<div class="mensagem">
						<li id="mensagem1"> <i class="material-icons">forum</i> </li>
						<div class="mensagem-content">
							<a href="../contato.html"><i class="material-icons">rate_review</i></a>
							<a href="http://localhost/vinicius/paginas/php/mensagens.php"><i class="material-icons">clear_all</i></a>
						</div>
					</div>
					
					<div class="dropdown">
						<li id="queque"> <i class="material-icons">queue_music</i> </li>
						<div class="dropdown-content">
							<a href="../tropicalia.html">Tropicália</a>
							<a href="../construcao.html">Construção</a>
							<a href="../alegria_alegria.html">Alegria, Alegria</a>
							<a href="../panis_et_circenses.html">Panis et Circenses</a>
							<a href="../sangue_latino.html">Sangue Latino</a>
							<a href="../aguas_de_marco.html">Águas de Março</a>
							<a href="../caminhando_e_cantando.html">Caminhando e Cantando</a>
							<a href="../mas_que_nada.html">Mas, que nada!</a>
							<a href="../chega_de_saudade.html">Chega de Saudade</a>
							<a href="../rosa_de_hiroshima.html">Rosa de Hiroshima</a>
							<a href="../metamorfose_ambulante.html">Metamorfose Ambulante</a>
							<a href="../pais_tropical.html">País Tropical</a>
							<a href="../as_rosas_nao_falam.html">As Rosas Não Falam</a>
							<a href="../roda_viva.html">Roda-Viva</a>
							<a href="../domingo_no_parque.html">Domingo no Parque</a>
							<a href="../aquele_abraco.html">Aquele Abraço</a>
							<a href="../carta_ao_tom_74.html">Carta ao Tom 74</a>
							<a href="../garota_de_ipanema.html">Garota de Ipanema</a>
						</div>
					</div>
					
					<div class="autores">
						<li id="listAutores"> <i class="material-icons">recent_actors</i> </li>
						<div class="autores-content">
							<a href="../autores/caetano.html">Caetano Veloso</a>
							<a href="../autores/cartola.html">Cartola</a>
							<a href="../autores/chico.html">Chico Buarque</a>
							<a href="../autores/elis.html">Elis Regina</a>
							<a href="../autores/geraldo.html">Geraldo Vandré</a>
							<a href="../autores/gilberto.html">Gilberto Gil</a>
							<a href="../autores/joao.html">João Gilberto</a>
							<a href="../autores/jorge.html">Jorge Ben Jor</a>
							<a href="../autores/mutantes.html">Os Mutantes</a>
							<a href="../autores/raul.html">Raul Seixas</a>
							<a href="../autores/secosemolhados.html">Secos & Molhados</a>
							<a href="../autores/tom.html">Tom Jobim</a>
							<a href="../autores/vinicius.html">Vinícius de Morais</a>
						</div>
					</div>
					
				</ol>
				
			</nav>
		
			<br/><br/><br/><br/><br/><br/>
			<div id="titulo">
				<h1> MENSAGENS </h1>
				<p>____________________________________________________________<p>
			</div>
			
		</header>
		
		<section id="corpo">
			<?php
				
				//abre a conexao com o banco de dados
				include_once("conexaobd.php");
				
				//comando sql que ira consultar os dados no banco
				$sql = "SELECT idContato, nome, email, estado,
					cidade, urgencia, mensagem, arquivo_extensao FROM Contato ORDER BY urgencia DESC";

				//executa o comando sql no banco
				$res = mysqli_query($con, $sql) or die
				("Erro ao pesquisar os dados do cliente. $sql");
				
				//Inicializa a tabela
				echo"<table id='user' border='1px' border-color='#226644'>";
				
				//comando de repetiçao que percorrera todos
				//os registros consultados
				while($registro = mysqli_fetch_assoc($res)){
					
					$id = $registro["idContato"];
					$nome = $registro["nome"];
					$email = $registro["email"];
					$estado = $registro["estado"];
					$cidade = $registro["cidade"];
					$urgencia = $registro["urgencia"];
					$msg = $registro["mensagem"];
					$arq = $registro["arquivo_extensao"];

					//exibe os dados do cliente na tabela
					/*echo"<TR><TD>$id</TD><TD>$nome</TD><TD>$cpf</TD>
						 <TD>$ender</TD><TD>$estado</TD><TD>$dtNasc</TD>
						 <TD>$sexo</TD><TD>$login</TD><TD>$cinema</TD>
						 <TD>$musica</TD><TD>$info</TD></TR>";*/
					echo"	 
					<tr>
						<td class='user_data'>
							<img src='../../imagens/users/$id.$arq'/>
							<p>
								<b>NOME:</b> $nome<br/>
								<b>E-MAIL:</b> $email</br>
								<b>CIDADE:</b> $cidade/$estado<br/>
								<b>GRAU DE URGENCIA:</b> $urgencia
							</p>
						</td>
						<td class='user_msg'>
							<p>
								<b>MENSAGEM:</b><br/>
								$msg
							</p>
						</td>
					</tr>";
				}
				
				echo "</table>";
			?>
			
			<a href="../contato.html">
				<button style="width: 50%; margin: 30px 25%;"> <i class="material-icons">rate_review</i></br> ENVIAR NOVA MENSAGEM </button></a>
			</br></br></br>
			
		</section>
		
		<footer id="rodape">
			
			<p id="frase">
				"Palavras pequenas, palavras apenas, palaaaaavras!"
			</p>
			<p id="copyright">
				&copy; Todos os Direitos Reservados - Vinícius Pereira Pinto - 2018
			</p>
			
		</footer>
		
	</body>
	
</html>