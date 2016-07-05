<?php
require_once("conexao.php");


$tipo_jogo_descricao = $_POST["tipo_jogo_descricao"];
$regiao_descricao = $_POST["regiao_descricao"];

if ($_GET["id"] == "1") {
    if ($_GET["cmd"] == "ins") {
        $sql = "insert into tipo_jogo
                (tipojogo_descricao)
                values ('$tipo_jogo_descricao');";
    }
}
if ($_GET["id"] == "2") {
    if ($_GET["cmd"] == "ins") {
        $sql = "insert into regiao
                (regiao_descricao)
                values ('$regiao_descricao');";
    }
}
$resultado = mysqli_query($conexao, $sql);
if ($resultado == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);
}
else {
    require("header.php");
    echo ('<p><a class="btn btn-primary btn-large" href="cidade_lista.php">Adicionar Outro<span ></span></a></p> ');
    echo ('<p><a class="btn btn-primary btn-large" href="estado_lista.php">Adicionar Jogo<span ></span></a></p> ');
    include("footer.php");
}

?>
