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
                        <div class="col-md-3" id="imagemindex">
                            <img src="imagens/frente.jpg" class="img-responsive img-rounded" >
                            <h1 id="titulo">E-BET</h1>
                        </div>




        <div class="col-md-1" id="botoesheader">
            <a href="index.php"> <button type="button" id="estilobotoes" class="btn btn-primary navbar-btn"> Página Inicial</button> </a>
            </div>
            <div class="col-md-1" id="botoesheader">
                <a href="jogo.php"> <button type="button" id="estilobotoes" class="btn btn-primary navbar-btn">  Campeonatos </button> </a>
                </div>
                <div class="col-md-1" id="botoesheader">
                    <a href="cadastro.php">  <button type="button" id="estilobotoes" class="btn btn-primary navbar-btn"> Cadastrar </button> </a>
                    </div>
                    <div class="col-md-1" id="botoesheader">
                        <a href="calendario.php"> <button type="button" id="estilobotoes" class="btn btn-primary navbar-btn"> Calendário </button> </a>
                        </div>
                        <div class="col-md-1" id="botoesheader">
                            <a href="informacao.php"> <button type="button" id="estilobotoes" class="btn btn-primary navbar-btn"> Sobre Nós</button> </a>
        </div>
            <div class="col-md-1" id="login">
                <input type="login" class="form-control"  placeholder="login">
                </div>
                <div class="col-md-1" id="login">
                <input type="password" class="form-control"  placeholder="senha">
                </div>
            <div class="col-md-2" id="dbutao">
                <button type="button" class="btn btn-primary" id="estilobotoes">
                    OK
                </button>
            </div>
         </div>
        </div>
        </div>
        </div>




           

    </body>
</html>
