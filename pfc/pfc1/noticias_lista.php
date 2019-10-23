
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
while ($linha = mysqli_fetch_array($resultado)){
    $corpo = $linha["corpo"];
    $barra ="\\";
    $caminho = "noticias".$barra."noticia".$corpo.".txt";
    echo "<div class='container'>";

    echo "    <h1>Notícias</h1>";
    echo "    <div class='row demo-row'>";

    echo "        <div class='col-xs-12'>";
    echo "            <div class='jumbotron' id='noticia'>";
    echo " <blockquote>";
    echo " ".$linha["data"]." <p align='right'>Fonte: ".$linha["fonte"]."</p>";
    echo "               </blockquote>";

    echo "                <h3> ".$linha["titulo"]."</h3>";
    echo "                <p align='justify'> ";
    $corpo = fopen($caminho , "r");
    while (!feof ($corpo)) {
        $linha2 = fgets($corpo,
            4096);
        echo $linha2."<br>";


    }
    fclose($corpo);


    echo "                </p>
            </div>
        </div>
        </br>";
}
?>
