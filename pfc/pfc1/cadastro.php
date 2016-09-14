<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/íconee-bet.ico">
    <link href="index.css" rel="stylesheet">

    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>
    <style>
        body  {
            background-color: white;
        }
    </style>
</head>
    <body>
    <div class="container-fluid">
        <?php

        $email = "";
        $senha = "";
        $nome = "";


?>
        <div class="container">



                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                            <span class="sr-only">Toggle navigation</span>
                        </button>
                        <a class="navbar-brand" href="#">E-bet</a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse-01">
                        <ul class="nav navbar-nav">
                            <li ><a href="pagina admin.php">Admin</a></li>
                            <li><a href="jogo.php">Campeonatos</a></li>
                            <li><a href="cadastro.php">Cadastrar</a></li>
                            <li><a href="calendario.php">Calendário</a></li>
                            <li><a href="informacao.php">Notícias</a></li>
                        </ul>
                        <form class="navbar-form navbar-right" action="#" role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input class="form-control" id="navbarInput-01" type="search" placeholder="Pesquise aqui!">
                                    <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
                                </div>
                            </div>
                        </form>
                    </div>

                </nav>
            <form action='usuario_processa.php?cmd=ins' method='post'>
            <div class="row demo-row">
                <div class="col-xs-3">
                    <div class="form-group">
                        <label for="inputemail">email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" id="inputemail" name="email" placeholder="email" value="<?php echo $email; ?>">
                        </div>
                    </div>
                </div>
                </div>
                <div class="row demo-row">
                <div class="col-xs-2">
                    </div>
                    <div class="col-xs-8">
                    <div class="form-group">
                        <label for="inputsenha">Senha</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="password" class="form-control" id="inputsenha" name="senha" placeholder="Senha" value="<?php echo $senha; ?>">
                        </div>
                    </div>
                </div>
                    </div>
                    <div class="col-xs-2">
                        </div>
                <div class="row demo-row">
                <div class="col-xs-2">
                    </div>
                    <div class="col-xs-8">
                    <div class="form-group">
                        <label for="inputnome">Nome Completo</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" id="inputnome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                        </div>
                    </div>
                </div>
                  </div>
                <div class="col-xs-2">

                </div>
            </div>

            <input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
        </form>
                 

                   
            
       
       
             
        </div>
    </div>



    </body>
</html>
