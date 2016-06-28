<?php
require_once("conexao.php");
require("header.php");


$data = $_POST["data"];
$nome = $_POST["nome"];
$sigla = $_POST["sigla"];
$idcampeonato = $_POST["partidas_idcampeonato"];
$idtimes1 = $_POST["idtimes1"];
$idtimes2 = $_POST["idtimes2"];
$hora = $_POST["hora"];

$datetime = $data . " " . $hora;
echo $datetime;



if ($_GET["cmd"] == "ins") {
    $sql = "insert into partidas
                (data, sigla, partidas_idcampeonato)
                values ('$data', '$idcampeonato');

            select idpartidas into $idpartida from partidas where data = $data and $idcampeonato = partidas_idcampeonato;

            insert into times_partida
              (idtimes, times_partidas_idpartidas)
              values ($idtimes1, $idpartida );
             insert into times_partida
              (idtimes, times_partidas_idpartidas)
              values ($idtimes2, $idpartida);

                ";
}

$resultado = mysqli_query($conexao, $sql);
if ($resultado == false) {
    $erro = mysqli_error($conexao);

}
else {
    header("location:partidas_lista.php");

}
include("footer.php");

?>
