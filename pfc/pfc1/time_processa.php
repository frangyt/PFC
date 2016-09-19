<?php
require_once("conexao.php");


$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
$jogo = $_POST["times_idjogo"];

if ($_GET["cmd"] == "ins") {
    $sql = "insert into times
                (nome_time, sigla_times, times_idjogo)
                values ('$nome', '$sigla', $jogo);";
}


$resultado = mysqli_query($conexao, $sql);
if ($resultado == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);
}
else {
    header("location:time_lista.php");
}

?>
