<?php
require_once("conexao.php");
require("header.php");



$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
$campeonatos_idregiao = $_POST["campeonatos_idregiao"];
$campeonatos_idjogo = $_POST["campeonatos_idjogo"];


if ($_GET["cmd"] == "ins") {
    $sql = "insert into campeonatos
                (nome, sigla, campeonatos_idregiao, campeonatos_idjogo)
                values ('$nome', '$sigla',$campeonatos_idregiao,$campeonatos_idjogo);";
}

$resultado = mysqli_query($conexao, $sql);
if ($resultado == false) {
    $erro = mysqli_error($conexao);

}
else {
    echo ('<p><a class="btn btn-primary btn-large" href="time_lista.php.php">Adicionar Times<span ></span></a></p> ');
    echo ('<p><a class="btn btn-primary btn-large" href="index.php">Concluir<span ></span></a></p> ');

}
include("footer.php");

?>
