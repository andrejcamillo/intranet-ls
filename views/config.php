<html>
    <head>
        <title>Intranet LS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
       <div class='topo'>
            <div class="topo_int">
             <img src="../img/logo_ls_extendida_v2.jpg" width="1440" height="180">
            </div>
        </div>
        
        <div class='menu'>
            <div class='menu_int'>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item menu_pipe">
                          <a class="nav-link" href="../index.html">Home <span class="sr-only">(página atual)</span> <img src="..\img\house.png"></a>
                        </li>
                        <li class="nav-item menu_pipe active">
                          <a class="nav-link" href="config.php">LS_Config <img src="..\img\calendar.png"></a>
                        </li>
                        <li class="nav-item dropdown menu_pipe">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Procedimentos <img src="..\img\process.png">
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="instalacao.html">Instalação</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="dll.html">Registrar DLL's</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="instalacaoPaf.html">Instalação PAF</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="configTef.html">Dados para configuração de TEF</a>
                          </div>
                        </li>
                        <li class="nav-item menu_pipe">
                          <a class="nav-link" href="clientes.html">Cliente <img src="..\img\boy.png"></a>
                        </li>
                        <li class="nav-item menu_pipe">
                          <a class="nav-link" href="comandos.php">Comandos <img src="..\img\data.png"></a>
                        </li>
                        <li class="nav-item menu_pipe">
                          <a class="nav-link" href="links.html">Links Úteis <img src="..\img\link.png"></a>
                        </li>
                        <li class="nav-item opcao_menu menu_pipe">
                          <a class="nav-link" href="..\views\senhas.html">Senhas LS <img src="..\img\key.png"></a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        
                      </form>
                    </div>
                  </nav>
            </div>
        </div>
        
        <div class='conteudo'>
            <div class='conteudo_int'> <br><br>
                
                <h2>Configuração do LS_Config.ini</h2><br>
                <hr><br>

                <form action="" method="post"><br>
                         <h2>Pesquisar:<h2>

                         <div class="form-group">
                  <input type="text" class="form-control" id="" aria-describedby="" placeholder="" name="descricao">
              
                </form><br><br>


               <?php

              if(!@($conexao = pg_connect("host=10.0.0.201 dbname=intranet_ls port=5002 user=postgres password=L_s321123S_l")))
            {
               print "Não foi possível estabelecer uma conexão com o banco de dados.";
            }

            $query = "select * from ls_config";
            $resultado = pg_query($conexao,$query); // Executa a query $query na conexão $db

              ?>
          

              <table class="table table-dark">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Descrição</th>
                              <th scope="col">O que faz?</th>
                              </tr>
                          </thead>
                          <tbody>


                    <?php while($linha = pg_fetch_array($resultado)) {
                    echo '<tr>';
                    echo '<td>'.$linha['id'].'</td>';
                    echo '<td>'.$linha['descricao'].'</td>';
                    echo '<td>'.$linha['comando'].'</td>';
                    echo '<td><a href=""><img src="../img/edit.png"></a></td>';
                    echo '<td><a href=""><img src="../img/x-button.png"></a></td>';
                      echo '<tr>';
                       
                }
                ?>
                
            </div>
        </div>
        
        
    </body>
</html>
