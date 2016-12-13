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
            <!-- CAROUSEL -->
            <div class="section  dark  " style="padding-top:5px;padding-bottom:20px;background-repeat:no-repeat;background-position:center bottom;margin-bottom:10px;"><div style="width: 90%; text-align: center; margin: auto;padding: 5px;"><h2 class="title" style="color:#34495e;font-family: "Lato", Helvetica, Arial, sans-serif;;font-weight: 300;" >Bem vindo ao E-Bet</h2></div></div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>
                <!--wrapper slides-->
                <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://sm.ign.com/ign_br/screenshot/default/15304272-1197890430302183-6550980126968818995-o_zjxg.jpg" alt="Coldzera" style="position: relative">
      <div class="carousel-caption">
        <h3>BRASILEIRO COLDZERA VENCE PRÊMIO DE MELHOR JOGADOR DE ESPORTS DO ANO NO GAME AWARDS 2016</h3>
        <p>Jogador de Counter-Strike da SK Gaming foi o mais votado em eleição pública</p>
      </div>
    </div>

    <div class="item">
      <img src="http://sm.ign.com/ign_br/screenshot/default/featured-homepage-smoke_wkkq.jpg" alt="CapcomCup" style="position: relative">
      <div class="carousel-caption">
        <h3>CAPCOM CUP TRAZ BRASILEIRO NA DISPUTA E MAIS DE US$ 350 MIL EM PRÊMIOS</h3>
        <p>Vai, Brasil!</p>
      </div>
    </div>

    <div class="item">
      <img src="http://sm.ign.com/ign_br/screenshot/default/s2_mnfa.jpg" alt="ÚnicaMulherR6" style="position: relative">
      <div class="carousel-caption">
        <h3>CONVERSAMOS COM A ÚNICA JOGADORA PROFISSIONAL DE RAINBOW SIX DA AMÉRICA LATINA</h3>
        <p>"Quando se é o centro das atenções, cada passo deve ser planejado"</p>
      </div>
    </div>

    <div class="item">
      <img src="http://sm.ign.com/ign_br/screenshot/default/25790561206-ece1affad2-k-1_pvvy.jpg" alt="JogadoraCS" style="position: relative">
      <div class="carousel-caption">
        <h3>COMO É SER UMA JOGADORA PROFISSIONAL DE CS:GO DENTRO E FORA DO BRASIL?</h3>
        <p>Uma canadense e uma brasileira comentam suas experiências no cenário competitivo do shooter</p>
      </div>
    </div>
    <div class="item">
      <img src="http://sm.ign.com/ign_br/screenshot/default/i_6nvp.jpg" alt="SKTFaker" style="position: relative">
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
           </br>

            <div class="row demo-row">
                <div class="col-xs-1">
                </div>
                <div class="col-xs-3" >

                    <table  class="flat-table flat-table-1">
                        <thead>
                        <th></th>
                        <th>Ranking</th>
                        <th></th>
                        </thead>
                        <thead>
                        <th>Posição</th>
                        <th>Usuário</th>
                        <th>Dinheiro</th>
                        </thead>
                        <tbody>
                        <?php
                        require ("conexao.php");
                        $sql= "Select nome, dinheiros from usuario order by dinheiros desc;";
                        $resultado = mysqli_query($conexao, $sql);
                        $id = 1;
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<tr>
                            <td align='center' >".$id."</td>
                            <td align='center' >" . $linha["nome"] . "</td>
                            <td align='center' >" . $linha["dinheiros"] . "</td>
                        </tr>
                        ";
                            $id = $id+1;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4" >
                </div>

                <div class="col-xs-3" >
                    <table class="flat-table flat-table-1">
                        <thead>

                        <th></th>
                        <th>jogos</th>
                        <th></th>


                        </thead>


                        <tbody>
                        <?php
                                                require("conexao.php");
                                                $id = 1;
                                                $sql1 = "select max(idpartidas) from partidas;";
                                                $resultado1 = mysqli_query($conexao,$sql1);
                                                $linha1 = mysqli_fetch_array($resultado1);
                                                $idmax = $linha1["max(idpartidas)"];
                                             while ($id <= $idmax) {
                                                 $sql = "select   idpartidas, max(idtimes) as idtime1, min(idtimes) as idtime2 from partidas, times_partida, times  where idpartidas = times_partidas_idpartidas
                                                        and  idtimes = times_partidas_idtimes and idpartidas=$id ;";
                                                 $resultado = mysqli_query($conexao, $sql);
                                                 while ($linha = mysqli_fetch_array($resultado)) {
                                                     if (isset ($linha["idtime1"])) {
                                                         $idtime1 = $linha["idtime1"];
                                                         $idtime2 = $linha["idtime2"];

                                                         $sql2 = "select sigla_times from times where idtimes = $idtime1";
                                                         $resultado2 = mysqli_query($conexao, $sql2);
                                                         $linha2 = mysqli_fetch_array($resultado2);
                                                         echo "<td><a class='btn btn-block btn-lg btn-inverse' href='times_perfil.php?id=" . $linha["idtime1"] . "'>" . $linha2["sigla_times"] . "</a>              </td>
                                                         <td><p align='center'><a href='partidas_perfil.php?id=" . $id . "'> <span class='fui-cross'></a></span></p></td>";
                                                         $sql3 = "select sigla_times from times where idtimes = $idtime2";
                                                         $resultado3 = mysqli_query($conexao, $sql3);
                                                         $linha3 = mysqli_fetch_array($resultado3);
                                                         echo "<td><a class='btn btn-block btn-lg btn-inverse' href='times_perfil.php?id=" . $linha["idtime2"] . "'>" . $linha3["sigla_times"] . "</a>              </td>";


                                                         echo "</tbody>";
                                                     }
                                                     $id = $id + 1;
                                                 }
                                             }
                         ?>
                    </table>
                </div>

                <div class="col-xs-1">
                </div>

            </div>

           <div class="row demo-row">

    <div class="col-xs-12" id="texto_noticia">

        <div class="jumbotron" id="noticia">

            <blockquote>
                6 de Dezembro de 2016
            </blockquote>
            <img class="img-rounded img-responsive" id="imagem_noticia" src="http://sm.ign.com/t/ign_br/screenshot/default/30564249281-c9be7ec2c3-z_e8ec.640.jpg">
        <h3>Mundial de League of Legends teve mais de 14,3 milhões de espectadores simultâneos</h3>
        <p align="justify">Com direito até a um infográfico, a Riot Games divulgou nesta terça-feira (6) que o Worlds 2016, Campeonato Mundial de League of Legends -- que aconteceu entre 29 de setembro e 29 de outubro --, bateu recordes de audiência e duração.
            A melhor de cinco partidas que definiu a SK Telecom T1 como tricampeã no campeonato na grande final teve duração total de 252 minutos (aproximadamente quatro horas), e foi assistida por mais de 43 milhões de pessoas do mundo inteiro. A partida teve pico de audiência de 14,3 milhões de espectadores simultâneos nas plataformas de streaming online.
            “Estamos muito felizes com esse resultado, acreditamos que reunimos uma grande audiência considerando a predominância de times internacionais em um horário mais tarde do que o habitual para as transmissões do CBLOL”, declarou Roberto Iervolino, gerente geral da Riot Games Brasil. “Cada vez mais, o fã brasileiro de League of Legends se integra ao cenário internacional, tendo acesso e dando valor ao conteúdo de grandes partidas, grandes equipes e eventos”, completou.
            A premiação do primeiro lugar do Worlds foi a mais alta já paga em um Mundial. A SKT T1 levou para casa nada menos do que US$ 6,7 milhões (aproximadamente R$ 23 milhões). Além disso, foram adicionados à premiação original de US$ 2,1 milhões cerca de US$ 1,6 milhão com conteúdo in-game dos times (ícones) e mais US$ 3 milhões de contribuição dos fãs com conteúdos in-game (como a venda de skins Zed Campeonato).</p>
        </div>
        </br>
        <div class="jumbotron" id="noticia">
            <blockquote>
                6 de Dezembro de 2016
            </blockquote>
            <img class="img-rounded img-responsive" id="imagem_noticia" src="http://sm.ign.com/ign_br/screenshot/default/czavbq-wqaar4kw_b2xe.jpg">
        <h3>League of Legends: KaBuM! IDM Gaming anuncia line-up para CBLoL 2017</h3>

        <p align="justify">A Kabum! IDM Gaming, equipe criada a partir do grupo de Facebook da Ilha da Macacada, anunciou nesta terça-feira (6) a sua line-up para o Campeonato Brasileiro de League of Legends 2017.
            Em suas redes sociais, a organização revelou que a sua equipe vai contar com Luccas "Zantins" Zanqueta, Daniel "Danagorn" Augusto, Renato "TheFox" de Souza, Marcelo "Riyev" Carrara e Vinicius "Neki" Guilhardi.
            A equipe KaBuM! IDM Gaming surgiu a partir de uma parceria entre o grupo de Facebook Ilha da Macacada e a loja de produtos eletrônicos KaBuM!. Ao que tudo indica, a empresa já estava procurando novas oportunidades e analisando opções para vender ou não a sua vaga no CBLoL, mas a decisão veio depois de "conhecer de perto o trabalho e as propostas da IDM", de acordo com Guilherme Fonte, diretor do KaBuM! e-Sports.
            O primeiro split do Campeonato Brasileiro de League of Legends vai começar em fevereiro de 2017.</p>
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

    </div>



    <?php require ("footer.php");
    ?>
 </body>
</html>
