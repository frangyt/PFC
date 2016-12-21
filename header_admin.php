<nav class="navbar navbar-inverse" role="navigation" id="navbar">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
            <span class="sr-only">Toggle navigation</span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-01">
        <a class="navbar-brand" href="index.php">E-bet</a>
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
                <a href="jogo.php" class="dropdown-toggle" data-toggle="dropdown">Campeonatos<b class="caret"></b></a>
                <span class="dropdown-arrow"></span>
                <ul class="dropdown-menu">
                    <li> <a href="campeonato_lista.php?id=1">Counter Strike GO</a></li>
                    <li> <a href="campeonato_lista.php?id=2">League of Legends</a></li>

                </ul>
            </li>
            <li><a href="pagina%20admin.php">Usuários</a></li>
            <li><a href="jogolista.php">Jogo</a></li>
            <li><a href="time_lista.php">Time</a></li>
            <li><a href="partidas_lista.php">Partidas</a></li>
            <li><a href="noticias_lista.php">Noticias</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php


            if (isset($_SESSION["idusuario"])) {
                echo   "<td><a class='btn btn-primary btn-lg btn-inverse' href='perfil_usuario.php?id=".$_SESSION["idusuario"]."'>" .$_SESSION["nome"]. "</a><a class='btn btn-primary btn-lg btn-inverse' href='logout.php'>Sair</a></td>";
            }

            ?>
        </ul>

    </div>

</nav>