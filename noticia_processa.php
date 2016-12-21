<?php
require_once("conexao.php");
$titulo = $_POST["titulo"];
$data = $_POST["data"];
$fonte = $_POST["fonte"];
$corpo = $_POST["corpo"];
$sql = "select max(idnoticias) from noticias";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado);
$id = $linha["max(idnoticias)"] + 1;
$caminho = "noticias"."\\"."noticia". $id.".txt";
$file = fopen($caminho, "w+");
fwrite($file,$corpo);
$insert = "insert into noticias
                (titulo, corpo,data, fonte)
                values ('$titulo','$caminho','$data','$fonte');";
$resultado2 = mysqli_query($conexao,$insert);
if ($resultado == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);
}
else {
    header("location:noticias_lista.php");
}

