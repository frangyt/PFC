<!DOCTYPE html>
<html>
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



    <nav class="navbar navbar-inverse" role="navigation" id="navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <a class="navbar-brand" href="index.php">E-bet</a>
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
            <ul class="nav navbar-nav navbar-right">
                <?php
                session_start();
                if (isset($_SESSION["idusuario"])) {
                    echo   "<td ><a class='btn btn-info' href='perfil_usuario.php?id=".$_SESSION["idusuario"]."'>" .$_SESSION["nome"]. "</a>              </td>";
                    echo "<a href='logout.php'>Sair</a>";
                }
                else {

                    echo "<form class='navbar-form navbar-right' role='search' action='processalogin.php' method='POST'>
                                            <div class='form-group'>
                                                <label class='sr-only' for='email'>Email address</label>
                                                <input type='email' name ='email' class='form-control' id='email' placeholder='E-mail'>
                                                <label class='sr-only' for='senha'>Password</label>
                                                <input type='password'  name='senha' class='form-control' id='senha' placeholder='Senha'>
                                                <button type='submit' class='btn btn-default'>Entrar</button>
                                            </div>
                                     </form>";
                }
                ?>
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
    <form>

        <div class="row demo-row">

            <div class="col-xs-3">
                <a href="jogolista.php" class="btn btn-block btn-lg btn-primary">Jogos</button> </a>

            </div>
            <div class="col-xs-3">
                <a href="time_lista.php" class="btn btn-block btn-lg btn-primary">Times</button> </a>

            </div>
            <div class="col-xs-3">
                <a href="campeonato_lista.php" class="btn btn-block btn-lg btn-primary">Campeonatos</button> </a>

            </div>
            <div class="col-xs-3">
                <a href="partidas_lista.php" class="btn btn-block btn-lg btn-primary">Partidas</button> </a>

            </div>


</div>
        <div class="demo-row">
            <h2>Usuários Cadastrados</h2>
            <table class="flat-table flat-table-1">
                <thead>

                    <th class="success">Nome</th>
                    <th class="success">email</th>
                    <th class="success">senha</th>
                </thead>
                <?php
                require("conexao.php");
                $sql = "select   nome, email, senha
                    from usuario;
                    ";

                $resultado = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<tr>
                <td>".$linha["nome"]."</td>
                <td>".$linha["email"]."</td>
                <td><p>".$linha["senha"]."</p></td>
              </tr>";
                }
                ?>
            </table>
        </div>

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

</body>
</html>

