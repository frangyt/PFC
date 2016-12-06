
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


<?php
session_start();
if ($_SESSION["tipo_usuario"] = 2){
    require ("header_admin.php");
}
else {
    require("header.php");
}
?>

    <div class="container">

    <h1>Notícias</h1>
    <div class="row demo-row">

    <div class="col-xs-12">
        <div class="jumbotron" id="noticia">
            <blockquote>
                5 de dezembro de 2016
            </blockquote>
            <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/15350666-1395205707158644-365164269417647280-n_p4h4.jpg">
        <h3>League of Legends: Pain Gaming vence XLG Super Cup</h3>
        <p align="justify">A equipe brasileira paiN Gaming foi a grande vencedora da modalidade de League of Legends da XLG Super Cup, que aconteceu durante a Comic-Con Experience 2016, em São Paulo.
            A grande final, que foi realizada na Twitch Arena neste domingo (4), e a disputa, que foi uma melhor de três partidas, aconteceu entre a paiN e a CNB eSports. O placar final foi de 2 a 0,
            sendo o primeiro dominado pelo time e o segundo de virada.
            Por conta do campeonato amistoso All Star, organizado pela Riot Games, o principal mid laner do time, Gabriel "Kami" Bohm, não esteve presente na grande final do confronto com a CNB. Assim,
            a line-up do time contou com Matheus "Mylon" Borges, Thúlio "SirT" Carlos, afael "Rakin" Knitell, Pedro "Matsukaze" Gama e Caio "Loop" Almeida.
            A premiação total de XLG Super Cup foi de R$ 100 mil, e a paiN levou, no total, cerca de R$ 30 mil.
        </p>
        </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
            <blockquote>2 de dezembro de 2016</blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/15304272-1197890430302183-6550980126968818995-o_zjxg.jpg">
                <h3>Brasileiro Coldzera vence prêmio de melhor jogador de E-Sports do Ano no Game Awards 2016</h3>
            <p align="justify">
                É do Brasil! Durante o Game Awards 2016, o brasileiro Marcelo "Coldzera" David, do time de Counter-Strike: Global Offensive SK Gaming, foi eleito pelo público como o melhor atleta de eSports do ano.
                Coldezera, ao lado de sua equipe, é bicampeão das Majors de CS:GO e levou seu time ao vice-campeonato na ESL Pro League.
                Claramente emocionado, Coldzera subiu ao palco do Game Awards para agradecer especialmente "aos fãs brasileiros" dizendo também que “Abdicou muito da vida para chegar até aqui”.
                Parabéns pelo merecido reconhecimento, Coldzera! O Brasil está celebrando com você.
            </p>

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
                <li><a href="informacao2.php">2</a></li>
                <li><a href="informacao3.php">3</a></li>
                <li><a href="informacao4.php">4</a></li>
                <li><a href="informacao5.php">5</a></li>
            </ul>
        </div>
            <div class="col-xs-4"></div>
        </div>
    </div>
    </div>
<?php require ("footer.php");
?>
<script src="dist/js/vendor/jquery.min.js"></script>
<script src="dist/js/flat-ui.min.js"></script>
<script src="docs/assets/js/application.js"></script>
</body>

