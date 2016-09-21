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
                        <li><a href="jogolista.php">Lista de Jogos</a></li>

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

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "campeonato_processa.php?cmd=del&id="+id;
    }
</script>


<h2>Campeonatos</h2>
<p><a class="btn btn-primary btn-large" href="campeonato_form.php?id=">Adicionar Campeonato <span class="glyphicon glyphicon-plus-sign"></span></a></p>
<table class="table table-condensed">
    <tr class="success">
        <td></td>
        <td class="success">Nome</td>
        <td class="success">Sigla</td>
        <td class="success">Região</td>
        <td class="success">Jogo</td>
    </tr>
    <?php
    require("conexao.php");
    $idjogo = $_GET["id"];
    $sql = "select idcampeonatos, nome_campeonato, sigla_campeonato, regiao_descricao, jogo_descricao from campeonatos, jogo, regiao
                where campeonatos_idregiao = idregiao and campeonatos_idjogo = idjogo and idjogo=$idjogo;";
    $resultado = mysqli_query($conexao, $sql);
 $linha = mysqli_fetch_array($resultado);
        echo "<tr class='active'>
          
                <td class='active'><a class='btn btn-info' href='campeonato_perfil.php?id=".$linha["idcampeonatos"]."'>" .$linha["idcampeonatos"]. "</a>              </td>
                <td class='active'>" . $linha["nome_campeonato"] . "</td>
                <td class='active'>" . $linha["sigla_campeonato"] . "</td>
                <td class='active'>" . $linha["regiao_descricao"] . "</td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
              </tr>";

    ?>
</table>
    </div>
    <footer>
        <div class="container">
            <div class="row demo-row">
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                    © Todos os Direitos reservados á sua mãe
                </div>
                <div class="col-xs-4">
                </div>
            </div>
        </div>
    </footer>
    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script>
        videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
    </script>


