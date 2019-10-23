<?php
require_once("conexao.php");


$nome_jogador = $_POST["nome_jogador"];
$nick = $_POST["nick"];
$time = $_POST["jogador_idtimes"];

if ($_GET["cmd"] == "ins") {
    $sql = "insert into jogador
                (nome_jogador, nick, jogador_idtimes)
                values ('$nome_jogador', '$nick', $time);";
}


$resultado = mysqli_query($conexao, $sql);
if ($resultado == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);
}
else {
    header("location:times_perfil.php?".$time."");
}

?>
