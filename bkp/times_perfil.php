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
    <div class="row demo-row">
        <div class="col-xs-12">
<?php
require_once("conexao.php");

$idtimes = $_GET["id"];
$sql = "select idtimes,  nome_time, sigla_times, jogo_descricao
                    from times, jogo where times_idjogo = idjogo and idtimes = $idtimes;
                    ";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);

echo " <table class='flat-table flat-table-1'>
                  <thead>
                  <th>Nome do Time</th>
                  <th>Sigla</th>
                  <th>Jogo</th>
                  </thead>
                  <tbody>
                  <td>" . $linha["nome_time"] . "</td>
                  <td>" . $linha["sigla_times"] . "</td>
                  <td>" . $linha["jogo_descricao"] . "</td>
                  </tbody>
                  
                  </table>
                ";
$sql2 = "select idjogador, nome_jogador, nick, nome_time 
                    from jogador, times where jogador_idtimes = idtimes and idtimes = $idtimes;
                    ";

$resultado2 = mysqli_query($conexao, $sql2);

$linha2 = mysqli_fetch_array($resultado2);

echo "<table class='flat-table flat-table-1'>
               <thead>
                <th>Nome do Jogador</th>
                 <th>Nick</th>
                 </thead>
                <tbody>
                <td>" . $linha2["nome_jogador"] . "</td>
                <td><a class='btn btn-block btn-lg btn-inverse' " . $linha2["idjogador"] . "" .$linha2["nick"]. "</a></td>
              </tbody>
              ";

?>
<p><a class='btn btn-primary btn-large' href='jogador_form.php?id='>Adicionar Jogador <span class='fui-plus'></span></a></p>
</div>
    </div>
</div>
</body>
<?php require ("footer.php")?>

