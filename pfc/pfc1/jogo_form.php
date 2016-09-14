<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/íconee-bet.ico">
    <link href="index.css" rel="stylesheet">

    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>
    <style>
        body  {
            background-color: white;
        }
    </style>
</head>



    <?php
    $idjogo = $_GET["id"];
    $nome = "";
    $tipojogo_descricao = "";
    if ($_GET["id"] == NULL) {
        echo "<h2 >Jogo : Inclusão</h2>";
        echo "<form action='jogo_processa.php?cmd=ins' method='post'>";
    }
    else {
        echo "<h2>Estados : Alteração</h2>";
        echo "<form action='jogo_processa.php?cmd=upd' method='post'>";
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

    <div class="row" id="texto">
        <div class="col-md-3">
            <div class="form-group">
                <label  for="inputNome" >Nome</label>
                <div class="input-group">

                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label  for="inputTipojogo_descricao">Tipo do jogo</label>
                <div class="input-group">

                    <select name=jogo_idtipo_jogo id="inputJogo_idtipo_jogo">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from tipo_jogo order by tipojogo_descricao;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idtipo_jogo'].">".$linha['tipojogo_descricao']."</option>";
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


<?php include("footer.php")?>
