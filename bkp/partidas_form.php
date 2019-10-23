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
    $idpartidas = $_GET["id"];
    $data = "";
    $idcampeonato = "";
    $idtimes = "";
    $ganhador = "";
    $hora = "";
    if ($_GET["id"] == NULL) {

        echo "<form action='partidas_processa.php?cmd=ins' method='post'>";
    }
    else {
        echo "<h4>Times : Alteração</h4>";
        echo "<form action='partidas_processa.php?cmd=upd' method='post'>";
        require("conexao.php");
        $sql = "select   data, idcampeonatos, idtimes, ganhador
                    from partidas, times_partidas, campeonato  where idpartidas = times_partidas_idpartidas
                    and partidas_idcampeonatos = idcampeonatos;" ;
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultado)) {
            $data = $linha["data"];
            $idcampeonatos = $linha["tipojogo_descricao"];

        }
    }
    ?>

    <div class="row demo-row">
        <div class="col-xs-3">
            <div class="form-groupData">
                <label for="inputData"><h4>Data</h4></label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-calendar-solid"></span></span>
                    <input type="date" class="form-control" id="inputData" name="data"  value="<?php echo $data; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-3">
            <div class="form-groupData">
                <label for="inputHora"><h4>Hora</h4></label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-calendar"></span></span>
                    <input type="time" class="form-control" id="inputHora" name="hora"  value="<?php echo $hora; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">

        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputJogo"><h4>Campeonato</h4></label>
                <div class="input-group">

                    <select  id="inputtimes_idjogo" name="partidas_idcampeonatos" class="form-control select select-primary" data-toggle="select">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from campeonatos order by nome_campeonato;";
                        $resultado2 = mysqli_query($conexao, $sintaxesql);
                        while ($linha2 = mysqli_fetch_array($resultado2)) {
                            echo "<option value=".$linha2['idcampeonatos'].">".$linha2['sigla_campeonato']."</option>";
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
<?php
if ($_GET["id"] != NULL) {
    echo '<script type="text/javascript">
        document.getElementById("inputNome").readOnly = true;
    </script>';
}
?>
<?php require ("footer.php");
?>
