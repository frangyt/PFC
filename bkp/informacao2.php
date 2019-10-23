<head xmlns="http://www.w3.org/1999/html">
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link rel="icon" href="img/iconepagina.png">
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
                <blockquote> 24 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                    </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/s2_mnfa.jpg">
                <h3>Conversamos com a única jogadora profissional de Rainbow Six da América Latina</h3>
                <p align="justify"> Quando falamos de jogadoras profissionais nos eSports, geralmente falamos sobre as dificuldades de ser mulher no meio -- em especial quando muitos não acreditam nas habilidades da jogadoras. Em maio deste ano,
                    o mesmo aconteceu com a cyberatleta e streamer Nicolle "CherryGumms" Merhy, que postou um vídeo denunciando a maneira como era tratada dentro do cenário competitivo de Rainbow Six Siege.
                    O IGN Brasil conversou com CherryGumms, que atualmente é a única jogadora profissional de Rainbow Six Siege na América Latina, e a nossa primeira pergunta foi se o vídeo teve uma boa repercussão.
                    Segundo a streamer, "aquele desabafo fez com que várias pessoas me apoiassem" e ela começou a "ver o lado positivo de minhas conquistas. Sempre vão ter pessoas que irão ser pedras em seu caminho,
                    tentando te colocar para baixo, mas quando você começa a perceber o apoio que tem e ignora as ofensas, você realmente consegue enxergar o tamanho e a proporção do seu trabalho".</p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>29 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/25790561206-ece1affad2-k-1_pvvy.jpg">
                <h3>Como é ser uma jogadora profissional de CS:GO dentro e fora do Brasil?</h3>
                <p align="justify"> O cenário competitivo de eSports está crescendo no mundo inteiro. Vemos cada vez mais competições encantadores com premiações estratosféricas que parecem tão convidativas.
                    E por trás de tantas vitórias em campeonatos mundiais de League of Legends e brasileiros participando de disputas de Counter-Strike: Global Offensive, existe toda uma organização internacional que dá espaço para que os esportes eletrônicos cresçam.
                    No entanto, ainda não estamos no patamar ideal aqui no Brasil. Lá fora, os patrocínios e o cenário competitivo são levados muito a sério, mas aqui ainda estamos trilhando o caminho em direção de um ambiente saudável para os jogadores profissionais.
                    Pensando nas diferenças entre o cenário nacional e internacional, o IGN Brasil entrevistou com exclusividade duas jogadoras profissionais de Counter-Strike: Global Offensive para comentarem suas experiências como cyberatletas: a brasileira Camila Natale e a canadense Stephanie Harvey.
                    "A comunidade de CS:GO é muito diversa e muito única. Nós temos jogadores de três origens diferentes (CS 1.6, Source e Global Offensive), de todas as idades, experiências e nacionalidades", declarou Stephanie "Harvey" Harvey, jogadora profissional da CLG, equipe de eSports internacional.
                    "Ainda existem muitos fãs que nem jogam o game, que entraram nesse mundo por causa de apostas e outras coisas. Isso traz pessoas maravilhosas, mas, ao mesmo tempo, muita toxicidade", completou.
                    A toxicidade parece que ser um problema comum em qualquer país. Segundo Camila Natale, "tanto os jogadores quanto os fãs do jogo são muito preconceituosos com as meninas jogando". A brasileira acredita que esse preconceito está melhorando aos poucos, mas que "machismo existe em todo lugar,
                    independente do país". Enquanto isso, Harvey apontou que sente uma diferença quando joga dentro e fora dos Estados Unidos, onde está treinando atualmente.
                    "Eu morei na Europa durante uma parte da minha carreira no Counter-Strike, e eu definitivamente senti uma separação gigante entre jogadores masculinos e femininos", afirmou a cyberatleta. "Também senti uma falta de respeito enorme em relação às habilidades das profissionais mulheres.
                    Nos Estados Unidos, não existe essa separação. Nós jogamos com e contra os caras. Como não existem times completamente femininos, jogamos com os meninos mesmo", completou.
                    Essa é uma questão essencial para entender a diferença no cenário competitivo de CS:GO no mundo inteiro. Enquanto aqui no Brasil não temos times mistos -- e reconhecidos -- de Counter-Strike, lá fora é comum que existam equipes com homens e mulheres nos eSports. No começo deste ano,
                    um time brasileiro de League of Legends estava rejeitando mulheres afirmando que isso ia contra os termos e condições determinados pela Riot Games, o que mais tarde seria desmentido pela desenvolvedora.
                    <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/15211625-10207978485039445-1462097535-n_1zva.jpg">
                    "Tanto os jogadores quanto os fãs do jogo são muito preconceituosos com as meninas jogando", desabafa Camila. "Eles falam sem saber como é difícil ser mulher e tentar viver de um jogo. Falam que somos ruins como se tivéssemos a mesma estrutura de um time masculino, com gaming house e salário.
                    Todo dia sofremos assédio ou xingamentos, e isso uma hora desgasta e faz com que as meninas desistam", completou a profissional.
                    A desigualdade de gênero, porém, não parece ser um problema exclusivamente brasileiro. Harvey também afirmou já ter sofrido preconceito por ser menina, "em especial porque ela chamou muita atenção, de uma maneira boa e ruim".
                    A maneira como tanto a cyberatleta brasileira quanto a canadense respondem a essas situações é semelhante: aos poucos, elas aprendem a ignorar. "Eu tento focar em mim e nos meus objetivos", declarou Harvey. "Até hoje, não existem muitas jogadoras nos eSports e não é fácil de fazer isso funcionar e ser respeitada.
                    Eu vejo muito sexismo e acho que ainda vai demorar para as coisas mudarem".
                    A maior diferença então entre ser uma jogadora dentro e fora do Brasil está na questão econômica e social. Enquanto os brasileiros ainda estão em busca de patrocínio, e de acordo com Camila as jogadoras internacionais têm "mais oportunidade porque a maioria dos campeonatos acontecem nos Estados Unidos ou na Europa",
                    Harvey acredita que o principal para que hajam mais profissionais femininas é "trazer mais meninas para o cenário e, ao mesmo tempo, dar mais ferramentas que ajudem a diminuir a toxicidade da comunidade".
                    Camila acredita que a mudança de atitude é natural, e que tudo vai partir do momento em que as jogadoras receberem a mesma visibilidade e oportunidades de jogadores masculinos. Enquanto isso, Harvey acredita que o essencial é colocar cyberatletas femininas em destaque para que as pessoas possam se inspirar, e que "mulheres passem a ajudar outras mulheres a crescer".
                    É fato que ainda estamos correndo atrás do cenário internacional quando o assunto é patrocínio e visibilidade. Mas, aos poucos, os esportes eletrônicos estão ganhando mais visibilidade. Agora só precisamos mostrar que os videogames, os eSports e o cenário competitivo não diferenciam gênero.
                </p>
                </div>
            </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>29 de Novembro de 2016 <p align="right">Fonte: IGN</p>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="http://sm.ign.com/ign_br/screenshot/default/i_6nvp.jpg">
                <h3>League of Legends: Equipe coreana SKT T1 renova contrato com Faker</h3>
                <p align="justify"> Não é só no Brasil que os jogadores mudando de times em League of Legends. Após os jogadores Yang e Revolta irem para a Keyd Stars, a SK Telecom T1, equipe vencedora do World 2016, anunciou nesta terça-feira (29) a renovação do contrato de Lee "Faker" Sang-hyeok -- considerado o melhor jogador de LoL do mundo.
                    Segundo a SKT T1, Faker recebeu "o maior contrato da história dos eSports", mas não divulgou os valores em específicos. Além do mid-laner coreano, a organização também renovou os contratos do atirador Bae "Bang" Jun-sik, do suporte Lee "Wolf" Jae-wan e do caçador Kang "Blank" Sun-gu.
                    Já o caçador Bae "Bengi" Seong-ung e o topo Lee "Duke" Ho-Seong saíram da equipe sul-coreana, junto com o treinador Lee "PohManDu" Jeong-hyeon. Agora, a SKT T1 está buscando novos integrantes para o seu time de League of Legends, mas até o momento não revelou quais serão os próximos jogadores contratados.
                    O campeonato Mundial de League of Legends de 2016 ultrapassou a premiação total de US$ 5 milhões e a SKT T1 levou para casa a premiação fixa de US$ 2,13 milhões, sem contar o valor acrescido de 25% derivado das vendas da skin Zed Campeonato, criada especialmente para o Worlds.</p>
            </div>
        </div>
        </div>
        <div class="row demo-row">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <ul class="pagination">
                    <li><a href="informacao.php">1</a></li>
                    <li class="active"><a href="informacao2.php">2</a></li>
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
</body>