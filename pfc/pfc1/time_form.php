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

    <style>
        body  {
            background-color: white;
        }
    </style>
</head>
<body>
<div class="container">
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

    <div class="row demo-row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="inputNome">Nome</label>
                <div class="input-group">

                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="inputSigla">Sigla do time</label>
                <div class="input-group">

                    <input type="text" class="form-control" id="inputSigla" name="sigla" placeholder="Sigla" value="<?php echo $sigla; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-3">
            <div class="form-group">
                <label for="inputJogo">Jogo</label>
                <div class="input-group">

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

<?php
if ($_GET["id"] != NULL) {
    echo '<script type="text/javascript">
        document.getElementById("inputNome").readOnly = true;
    </script>';
}
?>
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
