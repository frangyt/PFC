<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
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
session_start();
if ($_SESSION["tipo_usuario"] = 2){
    require ("header_admin.php");
}
else {
    require("header.php");
}
?>
    <div class="container">


    <form>

        <div class="row demo-row">

            <div class="col-xs-8" id="cad">
                <div class="form-group">
                    <label for="inputnome"><h4>Nome Completo</h4></label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputemail"><h4>E-mail</h4></label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputemail"><h4>Data de Nascimento</h4></label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                        <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="datanasc" value="<?php echo $datanasc; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputsenha"><h4>Senha</h4></label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="password" class="form-control" id="inputsenha" name="senha" placeholder="Senha" value="<?php echo $senha; ?>">
                    </div>
                </div>
            </div>

            <div class="row demo-row">
                <div class="col-xs-2">
                </div>
                <div class="col-xs-8">
                    <div style="overflow:scroll; width:600px; height:200px;">

                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        000000000000000000000vaisefude000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000
                        00000000000000000000000000000000000000000000000000000000

                    </div>
                <h13>
                    <input class="check"  type="checkbox"> aceito</input>
                </h13>
                </div>
                <div class="col-xs-2">
                </div>

            </div>

        <a type="submit" class="btn btn-block btn-lg btn-success" class="aceito" value="Cadastrar">Cadastrar</a>








</div>

</div>
<?php require ("footer.php");
?>

<script>
    videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
</script>

</body>
</html>
