<!DOCTYPE html>
<html>
<?php
require_once("conexao.php");
?>
    <head>
        <meta charset=utf-8>
        <title>Header</title>
        <meta name="viewport" content="width=device-width">

        <link href="css/bootstrap.min.css"  rel="stylesheet">
        <link href="css/style.css"  rel="stylesheet">
        <link href="header.css"  rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>

    </head>
    <body>
    <div class="container-fluid">
        <div class="row" id="cabecalho">
           
            
                    <div class ="row" class="tables-responsive">
                    <div class="row" class="table table-condesed">
                        <div class="col-md-4" id="imagemindex">
                            <img src="imagens/frente.jpg" class="img-responsive img-rounded" >
                        </div>
                        <div class="col-md-3" id="titulo1">
                            <h1 id="titulo">E-BET</h1>
                        </div>
                        <div class="col-md-2" id="login">
                            <input type="login" class="form-control"  placeholder="login">
                        </div>
                        <div class="col-md-2" id="senha">
                            <input type="password" class="form-control"  placeholder="senha">
                        </div>
                        <div class="col-md-1" id="dbutao">
                                    <button type="button"
                                    class="btn btn-primary" id="botaoP">
                                    OK
                            </button>
                        </div>              
                </div>
            </div>
        </div>

       
        


             

                <div class="menu">
                    <a role="button" id="botaop2" class="btn btn-default navbar-btn" href="index.php">Página Inicial</a>
                    <a role="button" id="botaop1" class="btn btn-default navbar-btn" href="jogo.php">Campeonatos</a>
                    <a role="button" id="botaop1" class="btn btn-default navbar-btn" href="cadastro.php">Cadastrar</a>
                    <a role="button" id="botaop1" class="btn btn-default navbar-btn" href="calendario.php">Calendário</a>
                    <a role="button" id="botaop1" class="btn btn-default navbar-btn" href="informacao.php">Sobre Nós</a>
                    
                </div>




           

    </body>
</html>
