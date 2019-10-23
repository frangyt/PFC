<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="perfil_usuario.css" rel="stylesheet">
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
<body>

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


<h2>Perfil de Usuário</h2>



</br>
    </br>

    <div class="row demo-row">
    <div class="col-xs-3">

        <div class="demo-headline" <img class="img-responsive" id="foto_perfil"></div>
    </div>
        <div class="col-xs-9">
        </div>
    </div>

    <div class="row demo-row">
        <div class="col-xs-4"></div>
        <?php
        echo "
         <h6>E-mail:</h6> <h6>". $_SESSION["email"]. "</h6>
         </br>
        <div class='col-xs-4'></div>
        <h6>Nome:</h6> <h6>" . $_SESSION["nome"]. "</h6>
        </br>
        <div class='col-xs-4'></div>
        <h6>Dinheiros:</h6> <h6>" . $_SESSION["dinheiros"]. "</h6> "
            ?>
        </br>




    </div>


    </div>

<?php require ("footer.php");
?>
</body>