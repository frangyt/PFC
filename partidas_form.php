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
<div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="index.php" >E-bet</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav navbar-left">
                <li ><a href="pagina admin.php">Admin</a></li>
                <li class="dropdown">
                    <a href="jogo.php" class="dropdown-toggle" data-toggle="dropdown">Campeonatos<b class="caret"></b></a>
                    <span class="dropdown-arrow"></span>
                    <ul class="dropdown-menu">
                        <li> <a href="campeonato_perfil.php?id=1">Counter Strike GO</a></li>
                        <li> <a href="campeonato_perfil.php?id=2">League of Legends</a></li>

                    </ul>
                </li>
                <li><a href="cadastro.php">Cadastrar</a></li>
                <li><a href="calendario.php">Calendário</a></li>
                <li><a href="informacao.php">Notícias</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="#" role="search">
                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" id="navbarInput-01" type="search" placeholder="Pesquise aqui!">
                        <span class="input-group-btn">
            <button type="submit" class="btn"><span class="fui-search"></span></button>
          </span>
                    </div>
                </div>
            </form>
        </div>

    </nav>
    <?php
    $idpartidas = $_GET["id"];
    $data = "";
    $idcampeonato = "";
    $idtimes = "";
    $ganhador = "";
    $hora = "";
    if ($_GET["id"] == NULL) {
        echo "<h4>Partidas : Inclusão</h4>";
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
                <label for="inputData">Data</label>
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
                <label for="inputHora">Hora</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="fui-calendar"></span></span>
                    <input type="time" class="form-control" id="inputHora" name="hora"  value="<?php echo $hora; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="inputSigla">Campeonato</label>
                <div class="input-group">
                    <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button"> <span class="caret"></span></button>
                    <select>
                    <ul role="menu" class="dropdown-menu">
                        <li <?php
                        require("conexao.php");
                        $sintaxesql = "select * from campeonatos order by nome_campeonato;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idcampeonatos'].">".$linha['sigla_campeonato']."</option>";
                        }
                        ?>
                        </li>
                        </ul>
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
