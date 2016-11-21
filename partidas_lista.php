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
<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "partidas_processa.php?cmd=del&id="+id;
    }
</script>


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
<div class="container">


    <h4>Partidas</h4>
    <p><a class="btn btn-primary btn-large" href="partidas_form.php?id=">Adicionar partida <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="flat-table flat-table-1">
        <tr>
            <td>     </td>
            <td >Data</td>
            <td >Campeonato</td>
            <td >Time</td>
            <td > </td>
            <td > Time</td>

        </tr>
        <?php
        require("conexao.php");
        $sql1 = "select max(idpartidas) from partidas;";
        $resultado1 = mysqli_query($conexao, $sql1);
        $linha1 = mysqli_fetch_array($resultado1);
        $idmax = $linha1["max(idpartidas)"];

        $id = 1;
        while ($id <= $idmax) {
            $sql = "select   idpartidas, max(idtimes) as idtime1, min(idtimes) as idtime2,  idcampeonatos, data, sigla_campeonato
                     from partidas, times_partida, campeonatos, times  where idpartidas = times_partidas_idpartidas
                       and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes and idpartidas=$id;
                     ";
            $resultado = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($resultado)) {
                $idtime1 = $linha["idtime1"];
                $idtime2 = $linha["idtime2"];
                echo "<tr class='active'>
                  <td class = 'active'><a class='btn btn-info' href='partidas_perfil.php?id=".$linha["idpartidas"]."'>" .$linha["idpartidas"]. "</a>              </td>
                 <td class='active'>" . $linha["data"] . "</td>
             <td class='active'><a class='btn btn-info' href='campeonato_perfil.php?id=" . $linha["idcampeonatos"] . "'>" . $linha["sigla_campeonato"] . "</a>              </td>";

             $sql2 = "select sigla_times from times where idtimes = $idtime1";
             $resultado2 = mysqli_query($conexao, $sql2);
             $linha2 = mysqli_fetch_array($resultado2);
            echo "<td class='active'><a class='btn btn-info' href='times_perfil.php?id=" . $linha["idtime1"] . "'>" . $linha2["sigla_times"] . "</a>              </td>
            <td class='active'><a href='partidas_perfil.php?id=".$id."'> <span class='fui-cross'></a></span></td>";
                $sql3 = "select sigla_times from times where idtimes = $idtime2";
                $resultado3 = mysqli_query($conexao, $sql3);
                $linha3 = mysqli_fetch_array($resultado3);
            echo "<td class='active'><a class='btn btn-info' href='times_perfil.php?id=" . $linha["idtime2"] . "'>" . $linha3["sigla_times"] . "</a>              </td>

            </tr>";
            }
            $id = $id+1;
            echo "</br>";
        }

        ?>
    </table>


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