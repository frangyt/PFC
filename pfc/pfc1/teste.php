<?php
$senha = $_POST["senha"];
echo $senha;
$hash = password_hash($senha,PASSWORD_BCRYPT);
echo $hash;
?>