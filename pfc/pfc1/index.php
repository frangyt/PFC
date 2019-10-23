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
       }
       else {
           require("header.php");
       }
   }
   else{
       require("header.php");
   }
   ?>

<div class="container">

            <div class="section  dark  " style="padding-top:5px;padding-bottom:20px;background-repeat:no-repeat;background-position:center bottom;margin-bottom:10px;"><div style="width: 90%; text-align: center; margin: auto;padding: 5px;"><h2 class="title" style="color:#34495e;font-family: "Lato", Helvetica, Arial, sans-serif;;font-weight: 300;" ></h2></div></div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel">


                <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://www.legendsbr.com/wp-content/uploads/2014/12/League_of_Legends-fenomeno-campeonato_mundial_LNCIMA20141021_0079_27.jpg" alt="E-bet" style="position: relative">
      <div class="carousel-caption">
        <h3>Bem Vindo ao E-Bet</h3>
          <p>Seu site de apostas em E-Sports</p>
      </div>
    </div>


    </div>
    </div>


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

                        <?php
                        require ("conexao.php");
                        $sql= "Select nome, dinheiros from usuario order by dinheiros desc;";
                        $resultado = mysqli_query($conexao, $sql);
                        $id = 1;
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "
                            <tbody>
                            <tr>
                            <td align='center' >".$id."</td>
                            <td align='center' >" . $linha["nome"] . "</td>
                            <td align='center' >" . $linha["dinheiros"] . "</td>
                        </tr>
                        </tbody>
                        ";
                            $id = $id+1;
                        }
                        ?>

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
<?php
        $sql = "select * from noticias";
        $resultado = mysqli_query($conexao,$sql);
        while ($linha = mysqli_fetch_array($resultado)){
        $corpo = $linha["corpo"];
        $barra ="\\";
        $caminho = "noticias".$barra."noticia".$corpo.".txt";
        echo "<div class='container'>";

            echo "    <h1>Notícias</h1>";
            echo "    <div class='row demo-row'>";

                echo "        <div class='col-xs-12'>";
                    echo "            <div class='jumbotron' id='noticia'>";
                        echo " <blockquote>";
                            echo " ".$linha["data"]." <p align='right'>Fonte: ".$linha["fonte"]."</p>";
                            echo "               </blockquote>";

                        echo "                <h3> ".$linha["titulo"]."</h3>";
                        echo "                <p align='justify'> ";
                            $corpo = fopen($caminho , "r");
                            while (!feof ($corpo)) {
                            $linha2 = fgets($corpo,
                            4096);
                            echo $linha2."<br>";


                            }
                            fclose($corpo);


                            echo "                </p>
                    </div>
                </div>
                </br>";
                }
                ?>

    </div>
</div>
</div>
</div>
    <?php require ("footer.php");
    ?>
 </body>
</html>
