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
                <blockquote>10 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/evie-winter_6emv.png">
                <h3>Paladins: Torneio Evie’s Winter Classic Brazil reúne equipes profissionais e amadoras</h3>
                <p align="justify"> A PrakeNexo, organizadora do competitivo de Paladins no Brasil, anunciou nesta quinta-feira (10) um novo evento do esporte eletrônico, que desta vez vai reunir equipes profissionais e amadoras dentro do campeonato.
                    O Evie’s Winter Classic Brazil será um torneio de meio de temporada oficial do game da Hi Rez, desenvolvedora responsável também pelo MOBA Smite, e terá início em 12 de novembro. A competição será totalmente online e vai contar com cinco semanas de disputa, que vai somar pontos para a classificação geral. Os oito melhores vão garantir a vaga para a segunda fase, que vai acontecer entre os dias 13 e 17 de dezembro.
                    <input class="fui-list-bulleted">Confira a Premiação total abaixo:
                    1° lugar: US$ 4mil.
                    2º lugar: US$ 2mil.
                    3º e 4º lugar: US$ 1mil.
                    5º a 8º lugar: US$ 500.
                </p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>09 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/img-7746-660x330_bry5.jpg">
                <h3>Mundial de Crossfire terá time brasileiro e premiação total de US$ 400 mil</h3>
                <p align="justify"> O CrossFire Stars 2016, campeonato mundial do jogo de tiros em primeira pessoa online, já está com suas doze equipes participantes selecionadas. Entre elas, os brasileiros da Remo Brave -- que conquistaram o título de vencedor do segundo split do CrossFire Elite League (CFEL) -- será o único representante nacional dentro do torneio.
                    A Remo Brave conquistou sua vaga após vencer a INTZ eSports por três a zero, e agora vai se juntar com as outras equipes, sendo elas Team WoW (Canadá/Estados Unidos), XCN Gaming (Indonésia), Insanes (Japão), Hidden (Coreia do Sul), Freedom Gaming (Vietnã), Vici Gaming (China), AllGamers (China), Pacific Wara (Filipinas) e Kowai (Colômbia).
                    Essa será a primeira vez que a Remo Brave vai competir no Mundial de CrossFire, que vai acontecer entre 2 e 4 de dezembro em Suzhou, na China. A premiação total do evento será de US$ 400 mil, sendo que o primeiro lugar vai levar US$ 200 mil para casa</p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>04 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://newmeta.com.br/wp-content/uploads/2016/11/overwatch-league-azul.jpg">
                <h3>Blizzard anuncia liga competitiva de Overwatch</h3>
                <p align="justify"> Com o sucesso que tem nos eSports desde a década de 1990 com StarCraft, é natural que a Blizzard invista mais no esporte eletrônico com seus games. Tanto que tem uma área chamada Blizzard eSports justamente para criar programas competitivos em volta de StarCraft 2, Heroes of the Storm, Hearthstone e World of Warcraft. Não é surpresa que o maior sucesso recente da empresa, Overwatch, não tivesse o mesmo tratamento. A Sombra, nova personagem do game, foi anunciada na abertura da Blizzcon
                    <iframe width="560" height="336" src="https://www.youtube.com/embed/H_mlDidEqOM" frameborder="0" allowfullscreen></iframe>
                    Chamado de Overwatch League, e é uma aposta ambiciosa no mundo do eSports, que é um pouco diferente do que estamos acostumados. Os três pilares dessa liga são consistência, estabilidade e acessibilidade e a ideia é criar "um ecossistema mundial para competição profissional" dentro do game
                    A intenção é dar apoio a times profissionais e para jogadores, para que possam ter carreiras dentro do esporte eletrônico, diz comunicado da Blizzard.
                    A temporada começa em 2017 e a Blizzard vai ter eventos em que vai convidar jogadores e chamar outros que se destacaram em competições do game. Eles serão avaliados ao longo do ano com testes e competições. Qualquer jogador selecionado que for contratado por um time neste período vai ter um contrato que inclui um salário mínimo e um pacote de benefícios.
                    Assim, a Blizzard acredita que, com isso, o "suporte e sustentabilidade de times locais, com base de fãs locais, vai aumentar em diferentes regiões. Uma vez que esses times locais entrem na liga, suas vagas estarão garantidas, dando oportunidades a eles pelos próximos anos".
                    </p>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
            <ul class="pagination">
                <li><a href="informacao.php">1</a></li>
                <li><a href="informacao2.php">2</a></li>
                <li><a href="informacao3.php">3</a></li>
                <li class="active"><a href="informacao4.php">4</a></li>
                <li><a href="informacao5.php">5</a></li>
            </ul>
        </div>
        <div class="col-xs-4"></div>
    </div>
</div>
</div>
<?php require ("footer.php");
?>
</body>