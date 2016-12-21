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
    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>


    <style>
        body  {
            background-color: white;
        }
    </style>
</head>
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
<div class="container">
    <?php
    $idnoticia = $_GET["id"];
    $titulo = "";
    $data = "";
    $fonte = "";
    $corpo = "";

?>
    <form action="noticia_processa.php" method="post">
    <div class="row demo-row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="inputtitulo">Título</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-user"></span></span>
                    <input type="text" class="form-control" id="inputNome_jogador" name="titulo" placeholder="título" value="<?php echo $titulo; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="inputNick">Data</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-new"></span></span>
                    <input type="date" class="form-control" id="inputNick" name="data" placeholder="Nick" value="<?php echo $data; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="inputTimes">Fonte</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-new"></span></span>
                    <input type="text" class="form-control" id="inputNick" name="fonte" placeholder="fonte" value="<?php echo $fonte; ?>">

                </div>
            </div>
        </div>
    </div>
    <?php
    require_once("conexao.php");

    ?>
    <div class="row demo-row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="inputTimes">Corpo da noticia</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-new"></span></span>
                    <textarea name="corpo" rows="20" cols="100">Escreva o corpo da noticia</textarea>

                </div>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
    </form>

    <?php
    if ($_GET["id"] != NULL) {
        echo '<script type="text/javascript">
        document.getElementById("inputNome").readOnly = true;
    </script>';
    }
    ?>
</div>
</div>
<?php require ("footer.php");
?>



