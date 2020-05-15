<!DOCTYPE html>
<html>
<head>
	<title>Consulta </title>
</head>
<body>
<?php
if(!@($conexao = pg_connect("host=localhost dbname=intranet_ls port=5420 user=postgres password=L_s321123S_l")))
{
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
}
$query = "select * from comandos";
$resultado = pg_query($conexao,$query); // Executa a query $query na conexão $db

while($linha = pg_fetch_array($resultado)) { //aqui troquei para arrays, este loop declara a variavel $linha (ela representa o resultado da query), e o loop lê linha a linha do retorno
       // Escreve na página o retorno para cada registro trazido pela query
       echo "Comando: " .$linha['comando'] . " - ";
       echo "Descricao : ".$linha['descricao']."<br />";
       
}
?>
</body>
</html>