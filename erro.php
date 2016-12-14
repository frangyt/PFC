<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link rel="icon" href="img/iconepagina.png">
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
<?php require("header.php") ?>

<div class="container">
    <div class="row demo-row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
    <h2>ATENÇÃO!</h2>
    <?php
    $erro = $_GET["erro"];
    if ($erro == "usuexi") {
        echo "<h3>CPF Já Cadastrado!</h3>";
    }
    else {
        echo $erro;
    }
    ?>
        </div>
    </div>
    </div>

<?php include("footer.php")?>
