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
    <link rel="icon" href="img/iconepagina.png">
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
    if ($_SESSION["tipo_usuario"] == 2) {
        require("header_admin.php");
    } else {
        require("header.php");
    }
}
else{
    require("header.php");
}
?>
<div class="container">

    <h1>Notícias</h1>
    <div class="row demo-row">

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote> 18 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://i2.wp.com/shoryuken.com/wp-content/uploads/2016/07/Evo-Championship-Series.png?fit=750%2C400&resize=750%2C400">
                <h3>EVO 2017 ganha data e local</h3>
                <p align="justify"> A Evolution Champion Series (EVO) 2017 anunciou na última quarta-feira (16) as datas e o local da próxima edição do campeonato -- considerado o maior torneio do mundo de jogos de luta.
                    Em um anúncio oficial, a empresa revelou que o evento vai acontecer entre os dias 14 e 16 de julho de 2017 em Las Vegas, nos Estados Unidos. Assista ao trailer de apresentação do EVO 2017 abaixo:
                    <iframe width="560" height="336" src="https://www.youtube.com/embed/DyalQVxixfA" frameborder="0" allowfullscreen></iframe>
                    Entre os jogos que estarão disponíveis durante o EVO 2017, as principais opções são Street Fighter V, Tekken 7 e Super Smash Bros., mas nada foi oficializado até o momento.
                    A EVO 2017 ainda não revelou também o valor da premiação total.
                </p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote> 16 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/ilha-da-macacada-1_84r6.jpg">
                <h3>Ilha da Macacada é confirmada no Campeonato Brasileiro de League of Legends 2017</h3>
                <p align="justify"> Após revelar que iria encerrar indefinidamente suas atividades com League of Legends, a organização de times de eSports KaBuM! anunciou nesta quarta-feira (16) que será o principal patrocinador da equipe da Ilha da Macacada -- time criado a partir do grupo de Facebook com mesmo nome.
                    Segundo o Mais eSports, a equipe vai se chamar oficialmente KaBuM! IDM e estará presente no Campeonato Brasileiro de League of Legends 2017. Ao que tudo indica, a KaBuM! já estava procurando novas oportunidades e analisando opções para vender ou não a sua vaga no CBLoL, mas a decisão veio depois de "conhecer de perto o trabalho e as propostas da IDM", de acordo com Guilherme Fonte, diretor do KaBuM! e-Sports.
                    Até o momento, a line-up oficial da Ilha da Macacada do primeiro split do CBLoL 2017 ainda não foi confirmada -- ainda que a equipe esteja competindo na XLG Super Cup 2016.</p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>14 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/slivertv-iem-live-stream-screenshot-2_bnup.jpg">
                <h3>Torneio internacional de CS:GO e League of Legends será transmitido em realidade virtual</h3>
                <p align="justify"> A Electronic Sports League (ESL) anunciou na última sexta-feira (11) que vai transmitir as partidas da Intel Extreme Masters Oakland (IEM), torneio internacional de Counter-Strike: Global Offensive e League of Legends, em realidade virtual. A novidade faz parte de uma parceria entre a organização de eventos de eSports e da SLIVER.tv.
                    "Fãs ao redor do mundo poderão ter acesso a estatísticas valiosas e informações em tempo real, tudo isso em uma experiência imersiva e natural de realidade virtual", declarou Mitch Liu, diretor executivo da SLIVER.tv. Ainda segundo Liu, o objetivo da empresa é "transformar a experiência de espectador de eSports para sempre".
                    O novo tipo de transmissão terá a possibilidade de mudar a perspectiva da câmera dos jogadores, além de disponibilizar estatísticas em tempo real e uma linha do tempo de eventos. Em outubro deste ano, a SLIVER.tv e a ESL fizeram a primeiro torneio de CS:GO com essa inovação durante a ESL One New York.</p>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4">
            <ul class="pagination">
                <li><a href="informacao.php">1</a></li>
                <li><a href="informacao2.php">2</a></li>
                <li class="active"><a href="informacao3.php">3</a></li>
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
</body>