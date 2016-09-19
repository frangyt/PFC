

<?php
$idjogador = $_GET["id"];
$nome_jogador = "";
$nick = "";
$jogador_idtimes = "";
if ($_GET["id"] == NULL) {
    echo "<h2>Jogador : Inclusão</h2>";
    echo "<form action='jogador_processa.php?cmd=ins' method='post'>";
}
else {
    echo "<h2>jogador: Alteração</h2>";
    echo "<form action='jogador_processa.php?cmd=upd' method='post'>";
    require("conexao.php");
    $sql = "select idjogador, nome_jogador, nick, idtimes from jogador, times
                          where jogador_idtimes = idtimes ;" ;
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
            <label for="inputNome_jogador">Nome do Jogador</label>
            <div class="input-group">

                <input type="text" class="form-control" id="inputNome_jogador" name="nome_jogador" placeholder="Nome" value="<?php echo $nome_jogador; ?>">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="inputNick">Nick do jogador</label>
            <div class="input-group">

                <input type="text" class="form-control" id="inputNick" name="nick" placeholder="Nick" value="<?php echo $nick; ?>">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="inputTimes">Time</label>
            <div class="input-group">

                <select name=jogador_idtimes id="inputjogador_idtimes">
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
<input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
</form>

<?php
if ($_GET["id"] != NULL) {
    echo '<script type="text/javascript">
        document.getElementById("inputNome").readOnly = true;
    </script>';
}
?>



