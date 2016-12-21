
<head xmlns="http://www.w3.org/1999/html">
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="informacao.css" rel="stylesheet">
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
<body>



<?php
session_start();
if (isset($_SESSION["idusuario"])) {
    if ($_SESSION["tipo_usuario"] == 2) {
        require("header_admin.php");
    } else {
        require("header.php");
    }
}
else{
    require("header.php");
}
?>


<?php
require_once("conexao.php");
$sql = "select * from noticias";
$resultado = mysqli_query($conexao,$sql);
$linha = mysqli_fetch_array($resultado);

?>
<div class="container">
    <p><a class="btn btn-primary btn-large" href="noticia_form.php?id=">Adicionar noticia <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <h1>Notícias</h1>
    <div class="row demo-row">

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>
                    <?php echo $linha["data"]; ?><p align="right">Fonte: <?php echo $linha["fonte"]; ?></p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/15350666-1395205707158644-365164269417647280-n_p4h4.jpg">
                <h3><?php echo $linha["titulo"]; ?></h3>
                <p align="justify"><?php $corpo = fopen($linha["corpo"] , "r");
                    while (!feof ($corpo)) {
                        $linha2 = fgets($corpo,
                            4096);
                        echo iconv("CP1252", "UTF-8", $linha2),"<br>";


                    }
                    fclose($corpo);

                    ?>
                </p>
            </div>
        </div>
