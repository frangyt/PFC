<?php
require_once("conexao.php");
require("header.php");


$data = $_POST["data"];
$nome = $_POST["nome"];
$idcampeonatos = $_POST["partidas_idcampeonatos"];
$hora = $_POST["hora"];

$datetime = $data . " " . $hora;
echo $datetime;
?>
<br/>
<?php

if ($_GET["cmd"] == "ins") {
    echo "oi";
    $sql = "insert into partidas
                (data, partidas_idcampeonatos)
                values ('$datetime', '$idcampeonatos');

             

                 ";
    echo "tchau";
}
?>
<br/>
<?php
echo "oi";
?>
<br/>
<?php

?>
<br/>
<?php
$resultado = mysqli_query($conexao, $sql);
echo $resultado;
if ($resultado == false) {
    $erro = mysqli_error($conexao);
   echo $erro;
}
else {
    header("location:partidas_times_form.php");
}







include("footer.php");

?>
