<?php
require_once("conexao.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$hash = md5($senha);
$tipo_usuario = 1;



if ($_GET["cmd"] == "ins") {
    $sql = "insert into usuario (email,senha,nome,dinheiros, tipo_usuario)
              values ('$email','$hash' , '$nome',  500, 1);";

}
$resultado = mysqli_query($conexao, $sql);
if ($resultado == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);

}
else {
    header("location:index.php");

}

?>
