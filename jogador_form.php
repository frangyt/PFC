<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">

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
<?php require ("header.php");
?>
<div class="container">
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

<div class="row demo-row">
    <div class="col-xs-3">
        <div class="form-group">
            <label for="inputNome_jogador">Nome do Jogador</label>
            <div class="input-group">

                <input type="text" class="form-control" id="inputNome_jogador" name="nome_jogador" placeholder="Nome" value="<?php echo $nome_jogador; ?>">
            </div>
        </div>
    </div>
</div>
<div class="row demo-row">
    <div class="col-xs-6">
        <div class="form-group">
            <label for="inputNick">Nick do jogador</label>
            <div class="input-group">

                <input type="text" class="form-control" id="inputNick" name="nick" placeholder="Nick" value="<?php echo $nick; ?>">
            </div>
        </div>
    </div>
</div>
<div class="row demo-row">
    <div class="col-xs-3">
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
</div>
</div>
<footer>
    <div class="container">
        <div class="row demo-row">
            <div class="col-xs-5">
                <h6>Nossos Contatos</h6>
                <a href="https://www.facebook.com/vinycius13" class="fui-facebook"> Vinycius Silveira</a></br>
                <a href="https://plus.google.com/116622724535038811811" class="fui-google-plus"> viny13.99</a></br>
                <a href="https://www.facebook.com/leandro.andrei.cunha?ref=ts&fref=ts" class="fui-facebook"> Leandro Cunha</a></br>
                <a href="https://plus.google.com/100994567177990828022" class="fui-google-plus"> Leandro</a></br>
            </div>
            <div class="col-xs-2"></div>
            <div class="col-xs-5">
                <h6>Contatos do IFC-Araquari</h6>
                <a href="http://araquari.ifc.edu.br/" class="fui-window"> Site do Instituto</a></br>
                <a href="https://www.facebook.com/ifc.oficial" class="fui-facebook"> Facebook do Instituto</a></br>
                <span class="fui-home"> <b>(47) 3803-7200</b></span>

            </div>


        </div>
        <div class="row demo-row">
            <div class="col-xs-4">
            </div>
            <div class="col-xs-4">
                © Todos os Direitos reservados à sua mãe
            </div>
            <div class="col-xs-4">
            </div>
        </div>
    </div>
</footer>



