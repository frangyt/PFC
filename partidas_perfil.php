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


<?php require ("header.php");
?>
<div class="container">
        <div class="col-xs-5">
            <div class="jumbotron" id="caixa_partida1">
            <img class="img-rounded img-responsive" src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ab/Luminosity_Gaming_logo.svg/1024px-Luminosity_Gaming_logo.svg.png">
            <h6 align="center">Luminosity Gaming</h6>
                <form action="processa_aposta.php" method="post">
                    <div id="slider1">
                        <div id="custom-handle" class="ui-slider-handle"></div>
                    </div>
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
                <h6 align="center">SK Gaming</h6>
                <form action="processa_aposta.php" method="post">
                    <input type="range" min="0" max= <?php
                    if (isset($_SESSION["idusuario"])) {
                        echo  $_SESSION["dinheiros"];

                    }
                    else{
                        echo 500;
                    }
                    ?>  value="0"  id="custom-hundle" onchange="showValue(this.value)" />
                    <span id="range">0</span>
                    <script type="text/javascript">
                        function showValue(newValue)
                        {
                            document.getElementById("range").innerHTML=newValue;
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
                    <input type="submit" class="btn btn-primary btn-large" value="apostar">
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