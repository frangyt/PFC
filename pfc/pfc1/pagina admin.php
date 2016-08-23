<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>Cadastro</title>

    <link href="css/bootstrap.min.css"  rel="stylesheet">
    <link href="css/style.css"  rel="stylesheet">
    <link href="pagina admin.css"  rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <style>
        body  {
            background-image: url("imagens/fundo2.jpg");
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <?php require("header.php") ?>


    <form>

        <div class="row">

            <div class="col-md-4">
                <a href="jogolista.php"> <button type="button"  class="btn btn-primary navbar-btn"> Adicionar Jogo</button> </a>

            </div>
            <div class="col-md-4">
                <a href="time_lista.php"> <button type="button"  class="btn btn-primary navbar-btn"> Adicionar Time</button> </a>

            </div>
            <div class="col-md-4">
                <a href="campeonato_lista.php"> <button type="button"  class="btn btn-primary navbar-btn"> Adicionar Campeonato</button> </a>

            </div>
</div>

</div>

</body>
</html>

