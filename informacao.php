
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
if (isset($_SESSION["idusuario"])) {
    if ($_SESSION["tipo_usuario"] = 2){
        require("header_admin.php");
    }
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
                5 de dezembro de 2016<p align="right">Fonte: IGN</p>
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
            <blockquote>2 de dezembro de 2016 <p align="right">Fonte: IGN</p>
             </blockquote>
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
                    <blockquote>2 de Dezembro de 2016 <p align="right">Fonte: IGN</p>
                    </blockquote>
                    <img  id="imagem_noticia" class="img-rounded img-responsive" src="https://static.omelete.uol.com.br/media/uploads/conteudo/fotos/eBrasileirao.jpg">
                    <h3>Capcom Cup traz brasileiro na disputa e mais de US$ 350 mil em prêmios</h3>
                    <p align="justify">
                        A Capcom Cup 2016, campeonato mundial de Street Fighter V, começou nesta sexta-feira (2) já trazendo Thomas "Brolynho", nosso representante brasileiro, nas primeiras disputas do evento.
                        Ao todo, 32 jogadores vão disputar pelo título do mundial, todos selecionados pelo circuito de torneios oficial da empresa, o Capcom Pro Tour. O Centro de Convenções de Anaheim, nos Estados Unidos,
                        vai abrigar os competidores, que vão lutar pelas oito vagas para a grande final, realizada durante a PlayStation Experience (PSX).
                        A grande final da Capcom Cup vai acontecer em 3 de dezembro e este ano está com um formato diferente de premiação total. Em 2015, o torneio premiava o primeiro lugar com US$ 250 mil, mas em 2016,
                        cada DLC do conjunto Capcom Pro Tour de Street Fighter V vendida vai acumular uma porcentagem à premiação total -- isso inclui o estágio Ring of Destiny e roupas especiais para Cammy, Chun-Li e Necalli.
                        Até o mês de setembro, a premiação extra do conteúdo pago estava em US$ 90 mil.
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

