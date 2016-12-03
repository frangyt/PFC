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


<?php require ("header.php");
?>

<div class="container">

    <h1>Notícias</h1>
    <div class="row demo-row">

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="">
                <h3></h3>
                <p align="justify"> </p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="">
                <h3></h3>
                <p align="justify"></p>
            </div>
        </div>
        </br>

        <div class="col-xs-12">
            <div class="jumbotron" id="noticia">
                <blockquote>
                </blockquote>
                <img  id="imagem_noticia" class="img-rounded img-responsive" src="">
                <h3></h3>
                <p align="justify"></p>
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