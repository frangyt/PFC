<?php
session_start();
require_once("conexao.php");
$id = $_GET["id"];
$idusuario = $_SESSION["idusuario"];

if (isset($_POST["valor1"])){
    $valor = $_POST["valor1"];
    $sql = "select min(times_partidas_idtimes) from times_partida where times_partidas_idpartidas = $id  ";
    $resultado = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_array($resultado);
    $idtime = $linha["min(times_partidas_idtimes)"];
}
else{
    $valor = $_POST["valor2"];
    $sql = "select max(times_partidas_idtimes) from times_partida where times_partidas_idpartidas = $id  ";
    $resultado = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_array($resultado);
    $idtime = $linha["max(times_partidas_idtimes)"];
}

    $sqlA = "insert into apostas
                (valor, apostas_idpartidas, apostas_idtimes, apostas_idusuario)
                values ('$valor', '$id', '$idtime', '$idusuario' );";



$resultadoA = mysqli_query($conexao, $sqlA);

    $valornovo = $_SESSION["dinheiros"] - $valor;
$sqlU = "update usuario set dinheiros = $valornovo where idusuario = $idusuario;";
$resultadoU = mysqli_query($conexao, $sqlU);

$_SESSION["dinheiros"] = $valornovo;

# quando for pra atualizar o resultado da partida roda a atualização do dinheiro do pessoal que ganhou naquele jogo

if ($resultado == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);
}
else {
    header("location:partidas_lista.php?");
}




?>