
<head xmlns="http://www.w3.org/1999/html">
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="informacao.css" rel="stylesheet">
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
    <h1>Notícias</h1>
    <div class="row demo-row">

    <div class="col-xs-12">
        <div class="jumbotron" id="noticia">
            <blockquote>
                22 de Setembro de 2016
            </blockquote>
            <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://im.ziffdavisinternational.com/ign_br/screenshot/default/fb-image-sd_kqmf.jpg">
        <h3>TwitchCon 2016 terá arena de e-sports, Steve Aoki e outras atrações</h3>
        <p align="justify">A TwitchCon 2016, evento que ocorre entre 30 de setembro e 2 de outubro em San Diego, nos Estados Unidos, terá diversas atrações com streamers da plataforma de transmissões. Além da arena de eSports, os DJs Steve Aoki, Darude e o rapper T-Pain também vão marcar presença na feira.
            Uma das grandes atrações do evento será a TwitchCon: The Party, uma festa ao som de músicos streamers que possuem canais na Twitch. A feira conta também com a Arena TwitchCon, que terá transmissão ao vivo e a seguinte agenda:</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>30 de setembro</b> - 19h no horário de Brasília: partidas de Counter-Strike: Global Offensive com imCoty, OMGItsFirefoxx, Summit1g, 2mgovercsquared, missharvey, timthetatman e outros streamers;</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>1 de outubro</b> - 16h no horário de Brasília: final de RuneScape: Battle Mode Tournament de 2016, com dois mil jogadores disputando US$ 10 mil;</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>1 de outubro</b> - 19h15 no horário de Brasília: partidas de Overwatch com Lirik, Ellohime, MissesMae, Fairlight_Excalibur e Haylinic, entre outros streamers;</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>2 de outubro</b> - 15h30 no horário de Brasília: campeonato H1Z1 Invitational, com premiação atual de US$ 191 mil;</p>
        <p align="justify"><span class="fui-radio-unchecked"></span> <b>2 de outubro</b> - 18h15 no horário de Brasília: partidas de Rocket League com Goldglove, lolrenaynay, Gassymexican, FemSteph e FuturemanGaming, entre outros.</p>
        <p align="justify">Além disso, há áreas como a Inclusivity City, que contará com organizações que auxiliam a Twitch a se tornar um espaço virtual acolhedor para todos. No local, será realizado um torneio de Super Smash Bros. entre times compostos por mulheres.
        Os participantes com o aplicativo da TwitchCon poderão participar da TwitchQuest, uma experiência interativa que inclui visitar estandes, falar com funcionários e solucionar enigmas para ganhar prêmios e a possibilidade de receber uma viagem para a TwitchCon 2017.
        O evento ainda vai contar com áreas de transmissões, sessão de pintura com Bob Ross, unboxing da Amazon Game Studios, afterparty e mais. Para mais informações, visite o site oficial da <a href="http://www.twitchcon.com/">TwitchCon 2016</a>.
        </p>
    </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
            <blockquote>21 de Setembro de 2016</blockquote>
                <h3>League of Legends: Riot Games homenageia jogador brasileiro em documentário</h3>
            <p align="justify">
                Para aumentar o hype para o campeonato mundial de League of Legends, além dos papéis de parede de cada time participante, a Riot Games também disponibilizou os episódios do documentário Legends Rising, que retrata seis grandes jogadores do MOBA.
                O protagonista do 5º episódio da 2ª temporada é Gabriel “Revolta” Henud, jungler da equipe brasileira INTZ, que venceu a 2ª etapa do CBLoL 2016 e também conquistou a vaga do International Wildcard Qualifier (IWCQ).
            </p>

            <iframe width="980" height="550" src="https://www.youtube.com/embed/UaJJp3mVUpQ" frameborder="0" allowfullscreen></iframe>
        </div>
            </div>
            <div class="col-xs-12">
                <div class="jumbotron" id="noticia">
                    <blockquote>13 de Outubro de 2016</blockquote>
                    <img  id="imagem_noticia" class="img-rounded img-responsive" src="https://static.omelete.uol.com.br/media/uploads/conteudo/fotos/eBrasileirao.jpg">
                    <h3>PES 2017 | CBF vai organizar um Brasileirão virtual no jogo</h3>
                    <p align="justify">
                        A Confederação Brasileira de Futebol (CBF) vai organizar uma versão virtual do Brasileirão em Pro Evolution Soccer 2017.
                        Apropriadamente chamado de e-Brasileirão, o torneio vai ter classificatórias online e competições presenciais.
                        A primeira etapa é online, e rola no PlayStation 4 entre os dias 29 e 30 de setembro.
                        A CBF vai organizar 20 torneios no formato mata-mata. Cada chave representa uma equipe do Campeonato Brasilerio, e os melhores das mesmas passam a ser o representante daquele clube no e-Brasileirão.
                        Chapecoense, Coritiba, Cruzeiro, Figueirense, Flamengo, Internacional, São Paulo, Santa Cruz, Sport e Vitória têm seus representantes definidos no dia 29.
                        Já no dia 30, competem as pessoas que querem jogar com o Atlético Mineiro, Atlético Paranaense, América Mineiro, Botafogo, Corinthians, Fluminense, Grêmio, Palmeiras, Ponte Preta e Santos.
                        Passando por isso, os oito melhores jogadores de cada clube participam de um torneio presencial para definir quem será o representante final daquela equipe.
                        A fase final, que terá um jogador para cada um dos 20 times, acontece no dia 1º de dezembro no Rio de Janeiro, na sede da CBF. A premiação acontece no dia 5 de dezembro, na festa de encerramento do Brasileirão tradicional.
                        Os interessados em participar podem se inscrever, até o dia 27 de outubro, no <a href="http://www.cbf.com.br/e-brasileirao/">site oficial do e-Brasileirão.</a>
                    </p>

                </div>

        </div>
        <div class="row demo-row">
        <div class="col-xs-4"></div>
            <div class="col-xs-4">
            <ul class="pagination">
                <li class="active"><a href="informacao.php">1</a></li>
                <li><a href="#fakelink">2</a></li>
                <li><a href="#fakelink">3</a></li>
                <li><a href="#fakelink">4</a></li>
                <li><a href="#fakelink">5</a></li>
            </ul>
        </div>
            <div class="col-xs-4"></div>
        </div>
    </div>
    </div>
    <footer>
        <div class="container">
            <div class="row demo-row">
                <div class="col-xs-5">
                    <h6>Nossos Contatos</h6>
                    <a href="https://www.facebook.com/vinycius13" class="fui-facebook"> Vinycius Silveira</a></br>
                    <a href="https://plus.google.com/116622724535038811811" class="fui-google-plus"> Viny</a></br>
                    <a href="https://www.facebook.com/leandroandrei.dacunha" class="fui-facebook"> Leandro Cunha</a></br>
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
<script src="dist/js/vendor/jquery.min.js"></script>
<script src="dist/js/flat-ui.min.js"></script>
<script src="docs/assets/js/application.js"></script>
</body>

