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
<body>
<div class="container">








    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <a class="navbar-brand" href="index.php">E-bet</a>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="login.php">Login</a></li>
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
require_once("conexao.php");

$idcampeonatos = $_GET["id"];
$sql = "select idcampeonatos,  nome_campeonato, sigla_campeonato, regiao_descricao, jogo_descricao
                    from campeonatos, jogo, regiao where campeonatos_idjogo= idjogo and campeonatos_idregiao = idregiao and idcampeonatos = $idcampeonatos;
                    ";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);

echo '</br>';
echo "          
                <h4>Campeonato:<h6>" . $linha["nome_campeonato"] . "</h6></h4>
                <h4>Região:" . $linha["regiao_descricao"] . "</td>
                <h4 ><strong>Jogo:</strong>" . $linha["jogo_descricao"] . "</td>
              ";

$sql2 = "select nome_time from partidas, times, campeonatos, times_partida where idcampeonatos = partidas_idcampeonatos and idtimes = times_partidas_idtimes
and times_partidas_idpartidas = idpartidas and idcampeonatos = $idcampeonatos;";
$resultado2 = mysqli_query($conexao, $sql2);
$linha2 = mysqli_fetch_array($resultado2);
echo '</br>';
echo '</br>';

echo "<tr class='active'>
            
                <td class='active'> Nome do Time</td> 
                ";
echo '</br>';
while ($linha2 = mysqli_fetch_array($resultado2)) {
    echo "<tr class='active'>
                
                <td class='active'>" . $linha2["nome_time"] . "</td>
           </tr>
    </br>";
}

echo "<p><a class='btn btn-primary btn-large' href='partidas_form.php?id='>Adicionar Partidas<span class='glyphicon glyphicon-plus-sign'></span></a></p>"


?>
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
