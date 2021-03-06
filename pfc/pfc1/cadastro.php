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

        <?php

        $email = "";
        $senha = "";
        $nome = "";


?>
        <div class="container">



          <?php
          session_start();
          if (isset($_SESSION["idusuario"])) {
              if ($_SESSION["tipo_usuario"] == 2) {
                  require("header_admin.php");
              }
              else {
                  require("header.php");
              }
          }
          else{
              require("header.php");
          }
          ?>
            <form action='usuario_processa.php?cmd=ins' method='post'>
                <div class="row demo-row">
                    <div class="col-xs-2">
                    </div>
                    <div class="col-xs-8">
                        <div class="form-group">
                            <label for="inputnome"><h4>Nome Completo</h4></label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" id="inputnome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-2">
                    </div>
                </div>
                <div class="row demo-row">
                <div class="col-xs-2">
                    </div>
                <div class="col-xs-8">
                    <div class="form-group">
                        <label for="inputemail"><h4>E-mail</h4></label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" id="inputemail" name="email" placeholder="email" value="<?php echo $email; ?>">
                        </div>
                    </div>
                </div>
                    <div class="col-xs-2">
                        </div>
                </div>
                <div class="row demo-row">
                <div class="col-xs-2">
                    </div>
                    <div class="col-xs-8">
                    <div class="form-group">
                        <label for="inputsenha"><h4>Senha</h4></label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="password" class="form-control" id="inputsenha" name="senha" placeholder="Senha" value="<?php echo $senha; ?>">
                        </div>
                    </div>
                </div>
                    <div class="col-xs-2">
                        </div>
                </div>
                <div class="row demo-row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                        Ao clicar em Salvar você concorda com os <a href="termos-politica.php" >Termos de uso</a> e a <a href="termos-politica.php">Política de Privacidade</a>


                    </div>
                    <div class="col-xs-2"></div>

                </div>
                <div class="row demo-row">
                    <div class="col-xs-2">
                    </div>
                    <div class="col-xs-8">
                <a type="submit" class="btn btn-block btn-lg btn-success" value="Salvar"/>Salvar</a>
                </div>
                    <div class="col-xs-2">
                    </div>
                </div>
            </div>


        </form>

    </div>
    <?php require ("footer.php");
    ?>
        <script src="dist/js/vendor/jquery.min.js"></script>
        <script src="dist/js/flat-ui.min.js"></script>
        <script src="docs/assets/js/application.js"></script>

        <script>
            videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
        </script>
    </body>
</html>
