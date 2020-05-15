<?php

$descricao=$_POST['descricao'];
$codigo=$_POST['comando'];

    if(!@($conexao = pg_connect("host=10.0.0.201 dbname=intranet_ls port=5002 user=postgres password=L_s321123S_l")))
		{
		 print "Não foi possível estabelecer uma conexão com o banco de dados.";
		}
		$query = "insert into comandos (descricao,comando) values ('$descricao', '$codigo')";
	    $resultado = pg_query($conexao,$query);

header("Location: comandos.php");


?>
