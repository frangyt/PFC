<?php
require_once("conexao.php");

$email = $_POST["email"];
$senha = ($_POST["senha"]);

$sql = "SELECT idusuario FROM usuario WHERE email = '$email'";
$result = mysqli_query($sql);
while ($sql = mysqli_fetch_array($result)){
    $senha = $sql["senha"];
    echo $senha;
}



?>