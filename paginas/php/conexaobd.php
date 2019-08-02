<?php
     //PASSO 1 - CONECTAR AO SERVIDOR DE BANCO DE DADOS
     $con = mysqli_connect("localhost", "root", "")
     or die ("<p class='error'>  <b>ERRO:</b> Não foi possível conectar ao
     banco de dados!  </p>" . mysql_error() );

     //PASSO 2 - SELECIONAR O BANCO DE DADOS
     mysqli_select_db($con, "trabalho") or die ("<p class='error'> <b>ERRO:</b> Não
     foi possível encontrar o banco!  </p>"
     . mysql_error() );
?>

