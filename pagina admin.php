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
    <link href="index.css" rel="stylesheet">
    <link rel="icon" href="img/iconepagina.png">
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
    <form>

        <div class="row demo-row">

            <div class="col-xs-3">
                <a href="jogolista.php" class="btn btn-block btn-lg btn-primary">Jogos</button> </a>

            </div>
            <div class="col-xs-3">
                <a href="time_lista.php" class="btn btn-block btn-lg btn-primary">Times</button> </a>

            </div>
            <div class="col-xs-3">
                <a href="campeonato_lista.php" class="btn btn-block btn-lg btn-primary">Campeonatos</button> </a>

            </div>
            <div class="col-xs-3">
                <a href="partidas_lista.php" class="btn btn-block btn-lg btn-primary">Partidas</button> </a>

            </div>


</div>
        <div class="demo-row">
            <h2>Usuários Cadastrados</h2>
            <table class="flat-table flat-table-1">
                <thead>

                    <th class="success">Nome</th>
                    <th class="success">email</th>
                    <th class="success">dinheiros</th>
                </thead>
                <?php
                require("conexao.php");
                $sql = "select   nome, email, dinheiros
                    from usuario;
                    ";

                $resultado = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<tr>
                <td>".$linha["nome"]."</td>
                <td>".$linha["email"]."</td>
                <td><p>".$linha["dinheiros"]."</p></td>
              </tr>";
                }
                ?>
            </table>
        </div>

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

