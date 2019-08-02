<!DOCTYPE HTML>

<!-- AUTOR:	Vinícius Pereira Pinto -->

<html>

	<head>
		
		<title> CONTATO	</title>
		
		<meta charset="UTF-8">
		<meta name="copyright" content="Vinil" />
		
		<!-- PARA INSERIR OS CÓDIGOS CSS -->
		<link rel="stylesheet" type="text/css" href="../../css/estilo_autores.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/contato1.css"/>
		<link rel="stylesheet" type="text/css" href="../../css/contato.css"/>
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
				<h1> CONTATO </h1>
				<p>____________________________________________________________<p>
			</div>
			
		</header>
		
		<section id="corpo">
			<?php
				
				$nome = $senha = $email = $sexo = $dtNasc = $ender = $num = $estado = $cidade = $urgencia = $msg = $checkinho = $arquivo = "";
				
				//recebe cada campo do formulario e coloca em uma variavel
				$nome = $_POST["txtNome"];
				$senha = $_POST["txtSenha"];
				$email = $_POST["txtEmail"];
				$sexo = $_POST["txtSexo"];
				$dtNasc = $_POST["txtNasc"];
				$ender = $_POST["txtEnd"];
				$num = $_POST["txtNum"];
				$estado = $_POST["txtEst"];
				$cidade = $_POST["txtCid"];
				$urgencia = $_POST["txtUrg"];
				$msg = $_POST["txtMensagem"];
				$checkinho = isset($_POST["txtRecEmail"]);
				$arquivo = $_FILES["txtFoto"];

				if($checkinho==1){
					$checker = true;
				} else{
					$checker = false;
				}
				
				//verifica campos
				$camposOK = true; //determina se ocorreu erro
				if ($nome == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe o NOME. </p> ";
					$camposOK = false;
				}
				if ($senha == ""){
					echo "<p class='error'> <b>ERRO:</b>Informe a SENHA. </p> ";
					$camposOK = false;
				}
				if ($email == ""){
					echo "<p class='error'> <b>ERRO:</b>Informe o E-MAIL. </p> ";
					$camposOK = false;
				}
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					echo "<p class='error'> <b>ERRO:</b> E-MAIL INCORRETO </p> ";
					$camposOK = false;
				}
				if ($sexo == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe o SEXO. </p> ";
					$camposOK = false;
				}
				if ($dtNasc == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe a DATA DE NASCIMENTO. </p> ";
					$camposOK = false;
				}
				if ($ender == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe o ENDEREÇO. </p> ";
					$camposOK = false;
				}
				if ($num == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe o NÚMERO. </p> ";
					$camposOK = false;
				}
				if ($estado == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe o ESTADO. </p> ";
					$camposOK = false;
				}
				if ($cidade == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe a CIDADE. </p> ";
					$camposOK = false;
				}
				if ($urgencia == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe a URGÊNCIA. </p> ";
					$camposOK = false;
				}
				if ($msg == ""){
					echo "<p class='error'> <b>ERRO:</b> Informe a MENSAGEM. </p> ";
					$camposOK = false;
				}
				if ($checkinho == ""){
					$checker = false;
				}else{
					$checker = true;
				}
				
				
				//Verificando erro no upload
				if($arquivo['error'] != 0){
					echo "<p class='error'> <b>ERRO:</b> Erro no UPLOAD do arquivo. </p>";
					$camposOK = false;
				}
				
				//Verificando o tamanho
				if($arquivo['size'] == 0){
					echo "<p class='error'> <b>ERRO:</b> Erro no arquivo. Tamanho igual a 0 bytes. </p>";
					$camposOK = false;
				}
				if($arquivo['size'] > 3145728){
					echo "<p class='error'> <b>ERRO:</b> Erro no arquivo. Tamanho maior que o permitido (3MB). </p>";
					$camposOK = false;
				}
				
				//movendo o arquivo para algum diretorio valido dentro de www
				$destino = "C://wamp/www/vinicius/imagens/users/";
				$destino = $destino.$arquivo['name'];
				/* $res = move_uploaded_file($arquivo['tmp_name'], $destino);
				if($res==false){
					echo "Erro ao copiar o arquivo para o destino. </br>";
					$camposOK = false;
				}*/
				
				
				//Verificando o tipo do arquivo
				if(($arquivo['type'] != "image/gif") &&
				($arquivo['type'] != "image/jpeg") &&
				($arquivo['type'] != "image/jpg") &&
				($arquivo['type'] != "image/pjpeg") &&
				($arquivo['type'] != "image/x-png") &&
				($arquivo['type'] != "image/png") &&
				($arquivo['type'] != "image/bmp") ){
					echo "<p class='error'> <b>ERRO:</b> Erro no arquivo. Tipo nao permitido. </p>";
					$camposOK = false;
				}
				
				
				//***acrescentar as validacoes de CPF e Data

				//mostrando os valores em forma de tabela
				//cada campo eh uma linha <TR> da tabela
				if ($camposOK==true){
					
					echo "<p class='result'> DADOS ENVIADOS COM SUCESSO! </p>";
					
					//abre a conexao com o banco de dados
					include_once("conexaobd.php");
					
					$arquivo1 = $_FILES["txtFoto"]["name"];
					$ext = explode(".", $arquivo1);
					$extensao = $ext[1];
					
					//comando sql que ira inserir os dados no banco
					$sql = "INSERT INTO Contato (nome, senha, email,
					sexo, dtNasc, endereco, numero, estado,
					cidade, urgencia, mensagem, checkbox, arquivo_extensao) VALUES
					('$nome', '$senha', '$email', '$sexo',
					'$dtNasc', '$ender', '$num', '$estado',
					'$cidade', '$urgencia', '$msg', '$checker', '$extensao')";
					
					//executa o comando sql no banco
					mysqli_query($con, $sql) or die("<p class='error'> <b>ERRO:</b> Erro ao inserir
					os dados do usuário. $sql </p>");
					
					$nome_arq = "C://wamp/www/vinicius/imagens/users/";
					$cod = mysqli_insert_id($con);
					$destino = $nome_arq.$cod.".".$extensao;
					
					$res = move_uploaded_file($arquivo['tmp_name'], $destino);
					if($res==false){
						echo "<p class='error'> <b>ERRO:</b> Erro ao copiar o arquivo para o destino. </p>";
						
						/*
								CARTINHA PARA A BRUNA
								
								BRUNA, SE VOCÊ ESTÁ LENDO ISSO, SAIBA
								QUE É 0H30 DO DIA 23/06/2018 E EU ESTOU
								MUITO FELIZ PORQUE DEPOIS DE ALGUMAS HORAS
								TENTANDO, CONSEGUI COLOCAR O ARQUIVO NA PASTA
								BONITINHO COM O NOME DE ACORDO COM O ID DO USUÁRIO.
								ACHO QUE MINHA NOTA TEM QUE ME DEIXAR MAIS FELIZ 
								DO QUE ESTOU AGORA, NÃO É?!
								
								ABRAÇOS,
								VINÍCIUS PEREIRA PINTO.
						*/
					}
					
					// rename($destino, $nome_arq);
					
				} //fim do IF camposOK
				
			?>
			
			
			<a href="http://localhost/vinicius/paginas/php/mensagens.php">
				<button> <i class="material-icons">clear_all</i></br> VER TODAS AS MENSAGENS </button></a>
			<a href="../contato.html">
				<button> <i class="material-icons">rate_review</i></br> ENVIAR NOVA MENSAGEM </button></a>
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