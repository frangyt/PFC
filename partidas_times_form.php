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
<body>
<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "partidas_processa.php?cmd=del&id="+id;
    }
</script>
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


    <?php

    $data = "";
    $idcampeonato = "";
    $idtimes = "";
    $ganhador = "";
    $hora = "";




    ?>
<div class="container">
    </br>
<form action="partidas_times_processa.php?cmd=ins" method="post">
    <div class="row demo-row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputTimes1"><h4>Time 1</h4></label>
                <div class="input-group">

                    <select name=idtimes1 id="inputTime" class="form-control select select-primary" data-toggle="select">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from times order by nome_time;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha["idtimes"].">".$linha["nome_time"]."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </br>
    <div class="row demo-row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputTimes2"><h4>Time 2</h4></label>
                <div class="input-group">

                    <select name=idtimes2 id="inputTime" class="form-control select select-primary" data-toggle="select">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from times order by nome_time;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idtimes'].">".$linha['nome_time']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </br>
    <div class="row demo-row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputTimes2"><h4>Data da Partida</h4></label>
                <div class="input-group">

                    <select name=idpartidas id="inputTime" class="form-control select select-primary" data-toggle="select">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from partidas order by idpartidas;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idpartidas'].">".$linha['data']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    </br>
    <div class="row demo-row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
        <input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
    </div>
        </div>
    </br>
    </form>
</div>


<?php include("footer.php")?>
</body>