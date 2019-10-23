<?php
require_once("conexao.php");


$nome = $_POST["nome"];
$jogo_idtipo_jogo = $_POST["jogo_idtipo_jogo"];

if ($_GET["cmd"] == "ins") {
    $sql = "insert into jogo
                (jogo_descricao, jogo_idtipo_jogo )
                values ('$nome', '$jogo_idtipo_jogo');";
}


$resultado = mysqli_query($conexao, $sql);
if ($resultado == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);
}
else {
    header("location:jogolista.php");
}

?>
