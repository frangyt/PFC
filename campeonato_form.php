<head xmlns="http://www.w3.org/1999/html">
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
<div class="container">

<?php require ("header.php");
?>



    <?php
    $idcampeonatos = $_GET["id"];
    $nome = "";
    $sigla= "";
    $campeonatos_idjogo= "";
    $campeonatos_idregiao= "";
    if ($_GET["id"] == NULL) {
        echo "<h2>Campeonato : Inclusão</h2>";
        echo "<form action='campeonato_processa.php?cmd=ins' method='post'>";
    }
    ?>
    <div class="row demo-row">
        <div class="col-xs-2">

        </div>
        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputNome"><h4>Nome do Campeonato</h4></label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-user"></span></span>
                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-2">

        </div>
        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputSigla"><h4>Sigla</h4></label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-new"></span></span>
                    <input type="text" class="form-control" id="inputSigla" name="sigla" placeholder="Sigla" value="<?php echo $sigla; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-2">

        </div>

        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputCampeonatos_idjogo"><h4>Jogo</h4></label>
                <div class="input-group">
                    <select  id="inputCampeonatos_idjogo" name="campeonatos_idjogo" class="form-control select select-primary" data-toggle="select">
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
    <div class="row demo-row">
        <div class="col-xs-2">

        </div>
        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputCampeonatos_idregiao"><h4>Regiao</h4></label>
                <div class="input-group">

                    <select name=campeonatos_idregiao id="inputCampeonatos_idregiao" class="form-control select select-primary" data-toggle="select">
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
    <div class="row demo-row">
    <div class="col-xs-2"></div>
    <div class="col-xs-8">
    <input type="submit" class="btn btn-block btn-lg btn-success" value="Salvar"/>
    </div>
    <div class="col-xs-2"></div>
    </div>
        </form>
</div>
</br>
<?php require ("footer.php");
?>