<?php
require_once("conexao.php");
if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $sintaxesql = "Select * from usuario where email = '$email' and senha = md5('$senha')";
    $resultado = mysqli_query($conexao, $sintaxesql);
    if ($resultado == true) {
        if (mysqli_num_rows($resultado) > 0) {
            while ($linha = mysqli_fetch_array($resultado)) {
                session_start();
                $_SESSION["idusuario"] = $linha["idusuario"];
                $_SESSION["nome"] = $linha["nome"];
                $_SESSION["dinheiros"] = $linha["dinheiros"];
                $_SESSION["email"] = $linha["email"];
                $_SESSION["tipo_usuario"] = $linha["tipo_usuario"];

                header('location:index.php');
            }
        }
        else {
            echo "Usuário ou Senha Incorretos!";
        }
    }
    else {
        echo "Erro: ".mysqli_error($conexao);
    }
}
?>
