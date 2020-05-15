  <?php
						if(!@($conexao = pg_connect("host=localhost dbname=intranet_ls port=5420 user=postgres password=L_s321123S_l")))
						{
						   print "Não foi possível estabelecer uma conexão com o banco de dados.";
						}
?>