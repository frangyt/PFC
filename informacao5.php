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
                <blockquote> 24 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/t/ign_br/screenshot/default/2_99jj.640.jpg">
                <h3>ZOWIE consolida presença no Brasil com linha de acessórios para eSports</h3>
                <p align="justify"> Considerados alguns dos melhores acessórios para eSports por atletas profissionais dos jogos eletrônicos, a marca ZOWIE da BenQ está consolidando de vez a presença da marca no país com o lançamento seus monitores profissionais no país.
                    Durante a ESL CS:GO Pro League, que aconteceu nos dias 28 a 30 de Outubro no Ginásio do Ibirapuera, a marca trouxe um estande exclusivo em que o público teve a oportunidade de comprar os monitores oficiais utilizados na competição, assim como todos os acessórios ZOWIE.
                    "Foi uma honra aceitar o convite da ESL Brasil. A nossa participação foi importante para confirmar o posicionamento da BenQ ZOWIE como o melhor monitor para os profissionais em e- Sports. Trabalhamos há 6 meses com a nova linha de produtos e aproveitamos o evento para montar uma área de experimentação, onde o público podia conhecer tanto os monitores como também experimentar qual dos 8 modelos de mouse era o melhor para si mesmo, além de conhecer de perto nosso exclusivo mousepad e o CAMADE," Declarou Marcelo Café, Diretor da BenQ ZOWIE no Brasil.
                    A ZOWIE chegou ao Brasil em junho deste ano, trazendo três modelos de mouses em diferentes tamanhos: ZA, EC e FK. Todos os modelos possuem especificações técnicas iguais, dessa forma, o usuário pode escolher o formato e tamanho preferido de mouse. Eles são feitos com componentes duráveis e scroll óptico para trazer maior precisão.
                    <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://im.ziffdavisinternational.com/ign_br/screenshot/default/mouses_3avj.jpg">
                    Na área de mousepads, a marca traz os modelos SR e TFX. O SR tem superfície em pano e base em borracha macia, enquanto o TF-X possui base em borracha e superfície com combinação de tecido e plástico, trazendo mais segurança a quem bebe energético, refrigerante ou outros líquidos enquanto joga.
                    <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://im.ziffdavisinternational.com/ign_br/screenshot/default/mousepad_exwf.jpg">
                    O CAMADE é um acessório para gestão do cabo, para evitar o cabo emaranhado do mouse. Para isso, o jogador pode ajustar o comprimento para melhor performance.
                    Os modelos ZOWIE estão disponíveis para venda na loja online Games Academy.
                </p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>29 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/revolta-e-yang-1472842163886-615x300_xjv4.jpg">
                <h3>League of Legends: Keyd Stars contrata Yang, Revolta e Ziriguidun</h3>
                <p align="justify">A Keyd Stars, time brasileiro de eSports, anunciou nesta segunda-feira (28) a contratação dos jogadores profissionais Felipe "Yang" Zhao, Gabriel "Revolta" Henud -- ambos ex-integrantes da INTZ eSports -- e Pedro "Ziriguidun" Vilarinho, antigo suporte da paiN Gaming, para sua equipe de League of Legends.
                    Em comunicado oficial, a empresa revelou que a intenção original era "identificar novos talentos para a equipe" na Coreia do Sul, onde atualmente os jogadores Murilo "takeshi" Alves e André "esA" Pavezi estão fazendo bootcamp. A mudança de planos veio após a saída de Yang e Revolta, considerados hoje os melhores nas posições de Jungler e Top no Brasil, do time INTZ eSports.
                    "Depois de um ano árduo sem parar de jogar, eu precisava de alguma motivação para o ano que vem e eu acredito que a vontade do Takeshi em querer ser campeão vai me motivar a conquistar esse objetivo", declarou Yang no comunicado. "Eu acredito que agora eu poderei ver como outro time funciona como organização e ver como jogadores de outro time funcionam, pois quero ter o máximo de experiências possíveis", completou o cyberatleta.
                    Já para Revolta, que já passou por diversos times ao longo de sua carreira no cenário competitivo de League of Legends, "vestir a camisa do Keyd me dá mais vontade de conquistar tudo que conquistei esse ano com meus bons e velhos amigos, agora com os novos companheiros de time.</p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>3 de Dezembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/d3eqam5s-1_mcys.jpg">
                <h3>Jogador brasileiro Brolynho é eliminado da Capcom Cup, nos EUA</h3>
                <p align="justify">O jogador Brolynho, que representa o Brasil na Capcom Cup, torneio mundial de Street Fighter V que acontece durante o evento PlayStation Experience, nos Estados Unidos, lutou bravamente, mas não conseguiu evitar a eliminação do campeonato na sexta-feira (2). Ele perdeu as duas partidas que disputou.
                    Na primeira, ele perdeu para Joe "MOV" Egami, do Japão, e foi disputar a repescagemcom a lenda do game de luta Daigo Umehara, confronto que também saiu com a derrota.
                    O torneio Capcom Cup reúne os 32 melhores jogadores de Street Fighter V do mundo. As finais acontecem a partir da meia-noite deste sábado (3) para domingo (4) na PlayStation Experience, evento da Sony que acontece na cidade de Anaheim, nos Estados Unidos. A transmissão pode ser acompanhada pelo Twitch.</p>
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
                <li><a href="informacao4.php">4</a></li>
                <li class="active"><a href="informacao5.php">5</a></li>
            </ul>
        </div>
        <div class="col-xs-4"></div>
    </div>
</div>
</div>
<?php require ("footer.php");
?>
</body>