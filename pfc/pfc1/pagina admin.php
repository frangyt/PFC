<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/íconee-bet.ico">
    <link href="index.css" rel="stylesheet">

    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>
    <style>
        body  {
            background-color: white;
        }
    </style>
</head>
<body>
<div class="container-fluid">



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
        <div>
            <h2>Cidades</h2>
            <table class="table table-condensed">
                <tr class="success">

                    <td class="success">Nome</td>
                    <td class="success">email</td>
                    <td class="success">senha</td>
                </tr>
                <?php
                require("conexao.php");
                $sql = "select   nome, email, senha
                    from usuario;
                    ";

                $resultado = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<tr class='active'>
                <td class='active'>" . $linha["nome"] . "</td>
                <td class='active'>" . $linha["email"] . "</td>
                <td class='active'>" . $linha["senha"] . "</td>
              </tr>";
                }
                ?>
            </table>
        </div>

</div>

</body>
</html>

