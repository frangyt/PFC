<?php require("header.php") ?>

<div class="jumbotron">
    <?php
    $idpartidas = $_GET["id"];
    $data = "";
    $idcampeonato = "";
    $idtimes = "";
    $ganhador = "";
    $hora = "";
    if ($_GET["id"] == NULL) {
        echo "<h2>Partidas : Inclusão</h2>";
        echo "<form action='partidas_times_processa.php?cmd=ins' method='post'>";
    }
    else {
        echo "<h2>Times : Alteração</h2>";
        echo "<form action='partidas_times_processa.php?cmd=upd' method='post'>";
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


    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputTimes1">Times</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <select name=idtimes1 id="inputTime">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from times order by nome;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idtimes'].">".$linha['nome']."</option>";
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
                        $sintaxesql = "select * from times order by nome;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idtimes'].">".$linha['nome']."</option>";
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
<?php
if ($_GET["id"] != NULL) {
    echo '<script type="text/javascript">
        document.getElementById("inputNome").readOnly = true;
    </script>';
}
?>


<?php include("footer.php")?>
