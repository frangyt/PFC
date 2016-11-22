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