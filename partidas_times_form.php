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

<form action="partidas_times_processa.php?cmd=ins" method="post">
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputTimes1">Times</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <select name=idtimes1 id="inputTime">
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
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputTimes2">Times</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <select name=idtimes2 id="inputTime">
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
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputTimes2">Times</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <select name=idpartidas id="inputTime">
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
    <input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
    </form>
</div>


<?php include("footer.php")?>
