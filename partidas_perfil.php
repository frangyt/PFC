<!DOCTYPE html>
<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="partidas_perfil.css" rel="stylesheet">
    <script src="partidas_perfil.js"></script>
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


require("conexao.php");
$id=$_GET["id"];
?>
<div class="container">
        <div class="col-xs-5">
            <div class="jumbotron" id="caixa_partida1">
            <img class="img-rounded img-responsive" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ab/Luminosity_Gaming_logo.svg/1024px-Luminosity_Gaming_logo.svg.png">
            <h6 align="center"><?php
                $sql1 = "select min(times_partidas_idtimes) from times_partida where times_partidas_idpartidas = $id  ";
                $resultado1 = mysqli_query($conexao, $sql1);
                $linha1 = mysqli_fetch_array($resultado1);
                $idtime1 = $linha1["min(times_partidas_idtimes)"];
                $sqlM = "select nome_time from times where idtimes = $idtime1";
                $resultadoM = mysqli_query($conexao, $sqlM);
                $linhaM = mysqli_fetch_array($resultadoM);
                echo $linhaM["nome_time"];
                ?>
                </h6>
                <form action="processa_aposta.php?id=<?php echo $id;?>" method="post">
                    <input type="range" min="0" max= <?php
                    if (isset($_SESSION["idusuario"])) {
                        echo  $_SESSION["dinheiros"];

                    }
                    else{
                        echo 500;
                    }
                    ?>  value="0"  id="custom-hundle" name="valor1" onchange="showValue2(this.value)" />
                    <span id="range1">0</span>
                    <script type="text/javascript">
                        function showValue2(newValue)
                        {
                            document.getElementById("range1").innerHTML=newValue;
                        }
                    </script>


                    <script>
                        var $slider = $("#slider1");
                        if ($slider.length > 0) {
                            $slider.slider({
                                min: 1,
                                max: <?php
                                if (isset($_SESSION["idusuario"])) {
                                    echo  $_SESSION["dinheiros"];

                                }
                                else{
                                    echo 500;
                                }
                                ?>,
                                value: 3,
                                orientation: "horizontal",
                                range: "min"
                            }).addSliderSegments($slider.slider("option").max);
                        }
                    </script>
                    <input type="submit" class="btn btn-primary btn-large" value="apostar">
                </form>

            </div>

        </div>

        <div class="col-xs-2">
        </div>
        <div class="col-xs-5">
            <div class="jumbotron" id="caixa_partida2">
            <img class="img-rounded img-responsive" src="http://s.sk-gaming.com/logo/SKb_sRGB.png">
                <h6 align="center"><?php
                    $sql2 = "select max(times_partidas_idtimes) from times_partida where times_partidas_idpartidas = $id  ";
                    $resultado2 = mysqli_query($conexao, $sql2);
                    $linha2 = mysqli_fetch_array($resultado2);
                    $idtime2 = $linha2["max(times_partidas_idtimes)"];
                    $sqlR = "select nome_time from times where idtimes = $idtime2";
                    $resultadoR = mysqli_query($conexao, $sqlR);
                    $linhaR = mysqli_fetch_array($resultadoR);
                    echo $linhaR["nome_time"];
                    ?></h6>
                <form action="processa_aposta.php?id=<?php echo $id;?>"  method="post">
                    <input type="range" min="0" max= <?php
                    if (isset($_SESSION["idusuario"])) {
                        echo  $_SESSION["dinheiros"];

                    }
                    else{
                        echo 500;
                    }
                    ?>  value="0" name="valor2" id="custom-hundle" onchange="showValue1(this.value)" />
                    <span id="range2">0</span>
                    <script type="text/javascript">
                        function showValue1(newValue)
                        {
                            document.getElementById("range2").innerHTML=newValue;
                        }
                    </script>


                    <script>
                        var $slider2 = $("#slider2");
                        if ($slider2.length > 0) {
                        $slider2.slider({
                        min: 1,
                        max: <?php
                            if (isset($_SESSION["idusuario"])) {
                            echo  $_SESSION["dinheiros"];

                        }
                        else{
                            echo 500;
                        }
                         ?>,
                        value: 3,
                        orientation: "horizontal",
                        range: "min"
                        }).addSliderSegments($slider2.slider("option").max);
                        }
                    </script>
                    <input type="submit"  class="btn btn-primary btn-large" value="apostar">
                </form>

            </div>
        </div>


    </div>
</br>
    </br>
    </br>
    </br>
    </br>
    </br>



</div>
<?php require ("footer.php");
?>
</body>