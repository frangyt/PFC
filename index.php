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

 ini_set( 'display_errors', true );
 error_reporting( E_ALL );

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
            <!-- CAROUSEL -->

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://sm.ign.com/ign_br/screenshot/default/15304272-1197890430302183-6550980126968818995-o_zjxg.jpg">
                        <div class="carousel-caption">
                            <h3>BRASILEIRO COLDZERA VENCE PRÊMIO DE MELHOR JOGADOR DE ESPORTS DO ANO NO GAME AWARDS 2016</h3>
                            <p>Jogador de Counter-Strike da SK Gaming foi o mais votado em eleição pública</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="http://sm.ign.com/ign_br/screenshot/default/featured-homepage-smoke_wkkq.jpg">
                        <div class="carousel-caption">
                            <h3>CAPCOM CUP TRAZ BRASILEIRO NA DISPUTA E MAIS DE US$ 350 MIL EM PRÊMIOS</h3>
                            <p>Vai, Brasil!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="http://sm.ign.com/ign_br/screenshot/default/s2_mnfa.jpg">
                        <div class="carousel-caption">
                            <h3>CONVERSAMOS COM A ÚNICA JOGADORA PROFISSIONAL DE RAINBOW SIX DA AMÉRICA LATINA</h3>
                            <p>"Quando se é o centro das atenções, cada passo deve ser planejado"</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="http://sm.ign.com/ign_br/screenshot/default/25790561206-ece1affad2-k-1_pvvy.jpg">
                        <div class="carousel-caption">
                            <h3>COMO É SER UMA JOGADORA PROFISSIONAL DE CS:GO DENTRO E FORA DO BRASIL?</h3>
                            <p>Uma canadense e uma brasileira comentam suas experiências no cenário competitivo do shooter</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="http://sm.ign.com/ign_br/screenshot/default/i_6nvp.jpg">
                        <div class="carousel-caption">
                            <h3>LEAGUE OF LEGENDS: EQUIPE COREANA SKT T1 RENOVA CONTRATO COM FAKER</h3>
                            <p>Bengi e Duke estão fora</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="section  dark  " style="padding-top:10px;padding-bottom:40px;background-image:url (data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARwAAACxCAMAAAAh3/JWAAAAHlBMVEUAAAAFBQUNDQ0TExMICAgUFBQQEBAZGRkbGxsXFxeC1EQlAAABN0lEQVR4nO3ZzWrCQACF0flLtO//wtV1KU1M0TvDObiIoB+zSi5aCsCb1V8v6s+Lv7+0VAYAYFlZsysrAwDM7cxj/qVlMXHm0F66dJyJMwDA3I5sgxOfXSpzZANdPM68GQBgbv/05+CSGQCAZWXNrqwMAMCysmZXVgYAYFlZsysrAwCwrKzZlZUBAOZ25jH/0rKYOHNoL106zsQZmFGr+2h7G72W3rZR6l4eb3vr+6dPFqCPcW/ttrU+2tZvZbuXvvWvfe+fPlmAMcqoj3tke77qeN4u6+OiDvdEppb181JWJmyTZmUAgLllza6sDADAsrJmV1YGAGBZWbMrKwMAsKys2ZWVAQBYVtbsysoAAHM7sg1OfHapTNhxsjIAwNyyfl7KygAALCtrdmVlAACWlTW7sjIA7/INe2sEbewTwGAAAAAASUVORK5CYII=);background-repeat:no-repeat;background-position:center bottom;margin-bottom:20px;">
                <div style="width: 90%; text-align: center; margin: auto;padding: 10px;">
                    <h2 class="title" style="color:#fff;font-family: 'Lato', Arial, Tahoma, sans-serif;font-weight: 300;">E-BET</h2>
                </div>
            </div>
        <div class="row demo-row">

    <div class="col-xs-12" id="texto_noticia">

        <div class="jumbotron" id="noticia">

            <blockquote>
                22 de Agosto de 2016
            </blockquote>
            <img class="img-rounded img-responsive" id="imagem_noticia" src="http://cdn.espn.com.br/image/wide/622_810dddd3-8a14-3aee-a78a-66a9d0b871db.jpg">
        <h3>Counter Strike: Dignitas garante vaga para torneio de US$ 1,5 milhão na China</h3>
        <p align="justify">A Team Dignitas superou 19 adversárias e ficou com a primeira colocação das qualificatórias da Europa e da Comunidade do Estados Independentes para a World Electronic Sports Games 2016 de Counter-Strike: Global Offensive. A seletiva foi disputada durante o final de semana no Stereo Plaza, em Kiev, na Ucrânia.
            Os dinamarqueses levaram a melhor na decisão contra a Rússia e venceram por 2 a 0, com 16-7 na Mirage e 16-4 na Cobblestone. O resultado rendeu a equipe US$ 30 mil e o primeiro seed europeu da WESG 2016.
            Além da Dignitas e da Rússia, finalistas do evento, mais seis equipes conseguiram vaga - Virtus.pro, Kinguin, GODSENT, iGame.com, Ucrânia e Team EnVyUs. A grande decepção ficou por conta da Astralis, que terminou a competição no 9-12º lugar e não disputará o evento principal.
            A qualificatória seguiu as mesmas regras da WESG 2016, por isso diversas equipes não puderam usar sua escalação completa. O regulamento da competição exige que todos os jogadores sejam da mesma nacionalidade, forçando os times a fazerem alterações ou criando equipes temporárias, como a vice-campeã Rússia.
            As duas finalistas sofreram com essa regra. A Dig não pôde usar o norueguês Ruben "RUBINO" Villarroel, que deu lugar a Philip "aizy" Aistrup, da FaZe Clan, durante a competição. A Rússia, por sua vez, montou uma "seleção" composta por Denis "electronic" Sharipov e Georgi "WorldEdit" Yaskin, da Flipsid3 Tactics, Alexey "ub1que" Polivanov e Savelii "jmqa" Bragin, da Team Preparation e Dmitry "hooch" Bogdanov, ex-Gambit Gaming e atualmente sem clube.
            A WESG agora volta suas atenções para a seletiva das Américas, que ocorrem entre os dias 21 e 23 de outubro, em São Paulo. O Brasil terá dois representantes na disputa e eles sairão de qualificatórias disputadas online entre as próximas quarta e sexta-feira (12 e 14).
            O WESG 2016 será realizado em Shangai, na China, e ainda não tem data marcada, mas contará com US$ 1,5 milhão em prêmios - a maior premiação da história do Counter-Strike. A competição conta com o patrocínio do Alibaba Group, principal conglomerado de e-commerce do mundo.</p>
        </div>
        </br>
        <div class="jumbotron" id="noticia">
            <blockquote>
                22 Agosto de 2016
            </blockquote>
            <img class="img-rounded img-responsive" id="imagem_noticia" src="http://cdn.espn.com.br/image/wide/622_f9bc5657-d57c-322a-814d-24b9c6588cc6.jpg">
        <h3>Counter Strike: Tradicionais em versões passadas, Valve traz 'sprays' de volta</h3>

        <p align="justify">Os mais saudosistas jogadores de Counter-Strike se lembram dos velhos "sprays". As dezenas de desenhos espalhados pelos mapas viraram tradição, principalmente nos servidores casuais. Agora, mais de quatro anos depois do lançamento de CS:GO, a funcionalidade finalmente está de volta.
            A Valve lançou na noite desta quinta-feira (6) uma atualização que habilita os sprays, que agora serão chamados de grafites. As artes estarão disponíveis para compra no mercado da Steam em pacotes e individualmente, além de poderem ser obtidas nos drops semanais.
            Assim que adquirido, um pacote de grafites vem selado e com 50 aplicações. Caso ele seja aberto, ele não pode ser negociado novamente no mercado da Steam. Se desejar continuar usando o spray após zerar as aplicações, o jogador terá de comprá-lo novamente.
            Cada jogador poderá usar o grafite a cada round ou a cada 45 segundos. A aplicação dura 7 minutos e vai se apagando gradualmente.
            Além das artes, o patch também trouxe algumas outras mudanças, principalmente dos sons. A mixagem foi aperfeiçoada, o barulho dos tiros diminuídos e o som da M4A1-S, que era audível de muito longe apesar da arma ser silenciada, foi corrigido.
            Para ver a relação completa das mudanças na atualização, acesse o <a href="http://blog.counter-strike.net/index.php/2016/10/16255/">blog do Counter-Strike.</a>
        </p>
        </div>

        </div>

        </div>
</br>
        <div class="row demo-row">
        <div class="col-xs-4">
            </div>
            <div class="col-xs-4">
                <p>Para mais notícias clique <a href="informacao.php"> aqui</a> </p>
            </div>
            <div class="col-xs-4">
            </div>
        </div>
       <div class="row demo-row">
                <div class="col-xs-1">
                    </div>
                <div class="col-xs-4" >

                    <table  class="flat-table flat-table-1">
                        <thead>
                        <th>Ranking</th>
                        </thead>
                        <?php
                        require ("conexao.php");
                        $sql= "Select nome, dinheiros from usuario order by dinheios desc;";
                        $resultado = mysqli_query($conexao, $sql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "
                        
                        <tbody>
                        <tr>
                            <td>1°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>2°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>3°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>4°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>5°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>6°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>7°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>8°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>9°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        <tr>
                            <td>10°" . $linha["idusuario"] . " / " . $linha["dinheiros"] . "</td>
                        </tr>
                        </tbody>
                    </table>
                    ";
                        }
                        ?>

</div>
                <div class="col-xs-2" >
                </div>

                <div class="col-xs-3" >
                    <table class="flat-table flat-table-1">
                        <thead>

                        <th></th>
                        <th>Jogos</th>
                        <th></th>


                        </thead>
                        <tbody>
                        <tr>
                            <td>TimeA</td>
                            <td><span id="icone" class="fui-cross"></span></td>
                            <td>TimeB</td>
                        </tr>
                        <tr>
                            <td>TimeC</td>

                            <td><span id="icone" class="fui-cross"></span></td>

                            <td>TimeD</td>
                        </tr>
                        <tr>
                            <td>TimeE</td>

                            <td><span id="icone" class="fui-cross"></span></td>

                            <td>TimeF</td>
                        </tr>
                        <tr>
                            <td>TimeG</td>

                            <td><span id="icone" class="fui-cross"></span></td>

                            <td>TimeH</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            <div class="col-xs-2">
            </div>

    </div>
    </div>



    <?php require ("footer.php");
    ?>
 </body>
</html>
