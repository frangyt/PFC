<?php
require_once("conexao.php");
require("header.php");


$idtimes1 = $_POST["idtimes1"];
$idtimes2 = $_POST["idtimes2"];
$idpartidas = $_POST["idpartidas"];

?>
<br/>
<?php

if ($_GET["cmd"] == "ins") {
    echo "oi";
    $sql = "insert into times_partida
                (times_partidas_idtimes, times_partidas_idpartidas)
                values ('$idtimes1', '$idpartidas'), ('$idtimes2', '$idpartidas');

             

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
    header("location:partidas_lista.php");
}







include("footer.php");

?>
