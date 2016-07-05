<?php require("header.php") ?>

<div class="jumbotron">
    <?php
    $idcampeonatos = $_GET["id"];
    $nome = "";
    $sigla= "";
    $campeonatos_idjogo= "";
    $campeonatos_idregiao= "";
    if ($_GET["id"] == NULL) {
        echo "<h2>Campeonato : Inclusão</h2>";
        echo "<form action='produto_processa.php?cmd=ins' method='post'>";
    }
    ?>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputNome">Nome</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                </div>
            </div>
        </div>
        </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputSigla">Sigla</label>
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
                <label for="inputCampeonatos_idjogo">Jogo</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <select name=campeonatos_idjogo id="inputCampeonatos_idjogo">
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
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputCampeonatos_idregiao">Regiao</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <select name=campeonatos_idregiao id="inputCampeonatos_idregiao">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from regiao order by regiao_descricao;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idregiao'].">".$linha['regiao_descricao']."</option>";
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
