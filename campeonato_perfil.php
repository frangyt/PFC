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

<?php require ("header.php");
    ?>
<div class="container">
<?php
require_once("conexao.php");

$idcampeonatos = $_GET["id"];
$sql = "select idcampeonatos,  nome_campeonato, sigla_campeonato, regiao_descricao, jogo_descricao
                    from campeonatos, jogo, regiao where campeonatos_idjogo= idjogo and campeonatos_idregiao = idregiao and idcampeonatos = $idcampeonatos;
                    ";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);

echo "          
                <h4>Campeonato:<h6>" . $linha["nome_campeonato"] . "</h6></h4>
                <h4>Região:" . $linha["regiao_descricao"] . "</td>
                <h4 ><strong>Jogo:</strong>" . $linha["jogo_descricao"] . "</td>
              ";

$sql2 = "select nome_time from partidas, times, campeonatos, times_partida where idcampeonatos = partidas_idcampeonatos and idtimes = times_partidas_idtimes
and times_partidas_idpartidas = idpartidas and idcampeonatos = $idcampeonatos;";
$resultado2 = mysqli_query($conexao, $sql2);
$linha2 = mysqli_fetch_array($resultado2);
echo '</br>';
echo '</br>';

echo "<tr class='active'>
            
                <td class='active'> Nome do Time</td> 
                ";
echo '</br>';
while ($linha2 = mysqli_fetch_array($resultado2)) {
    echo "<tr class='active'>
                
                <td class='active'>" . $linha2["nome_time"] . "</td>
           </tr>
    </br>";
}

echo "<p><a class='btn btn-primary btn-large' href='partidas_form.php?id='>Adicionar Partidas<span class='glyphicon glyphicon-plus-sign'></span></a></p>"


?>

</div>
<?php require ("footer.php");
?>
</body>