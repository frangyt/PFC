<?php
require_once("conexao.php");
require("header.php");


$data = $_POST["data"];
$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
$idcampeonatos = $_POST["partidas_idcampeonatos"];
$idtimes1 = $_POST["idtimes1"];
$idtimes2 = $_POST["idtimes2"];
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

             select max(idpartidas) as idpartidas from partidas;


            insert into times_partida
              (idtimes, times_partidas_idpartidas)
              values ($idtimes1, );
             insert into times_partida
              (idtimes, times_partidas_idpartidas)
              values ($idtimes2, );

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
echo $idpartidas;
echo $sql;
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
