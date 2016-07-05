<?php require("header.php") ?>

<div class="jumbotron">
    <?php
    $idtimes = $_GET["id"];
    $nome = "";
    $sigla = "";
    $times_idjogo = "";
    if ($_GET["id"] == NULL) {
        echo "<h2>Times : Inclusão</h2>";
        echo "<form action='time_processa.php?cmd=ins' method='post'>";
    }
    else {
        echo "<h2>Times : Alteração</h2>";
        echo "<form action='times_processa.php?cmd=upd' method='post'>";
        require("conexao.php");
        $sql = "select idjogo, nome, jogo_idtipo_jogo, tipojogo_descricao from jogo, tipo_jogo
                          where idjogo = '".$COD."' and jogo_idtipo_jogo = idtipo_jogo;" ;
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultado)) {
            $nome = $linha["nome"];
            $tipojogo_descricao = $linha["tipojogo_descricao"];
        }
    }
    ?>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputNome">Nome</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputSigla">Sigla do time</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <input type="text" class="form-control" id="inputSigla" name="sigla" placeholder="Sigla" value="<?php echo $sigla; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputJogo">Jogo</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <select name=times_idjogo id="inputtimes_idjogo">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from jogo order by jogo_descricao;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idjogo'].">".$linha['jogo_descricao']."</option>";
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
