<?php
require_once("conexao.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$datnasc = $_POST["datnasc"];
if ($_GET["cmd"] == "ins") {
    $sql = "insert into usuario (email, senha, nome,  dinheiros)
              values ('$email', '$senha', '$nome',  500);";
}
$resultado = mysqli_query($conexao, $sql);
if ($resultado == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);
}
else {
    header("location:usuario_lista.php");
}
?>
