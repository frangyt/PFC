<?php
session_start();
require("conexao.php");
$id = $_GET["id"];
$idtimev = $_POST["idtimeV"];
$idtimep = $_POST["idtimeP"];

$sql="UPDATE times_partida SET ganhador='s' WHERE times_partidas_idtimes=$idtimev and times_partidas_idpartidas= $id;";
$resultado = mysqli_query($conexao, $sql);
$sql2="UPDATE times_partida SET ganhador='n' WHERE times_partidas_idtimes=$idtimep and times_partidas_idpartidas= $id;";

$resultado2= mysqli_query($conexao, $sql2);
if ($resultado == false or $resultado2 == false) {
    $erro = mysqli_error($conexao);
    header("location:erro.php?erro=".$erro);
}
else {
    $sql3 = "SELECT SUM(valor) as VTa FROM apostas where apostas_idpartidas=$id;";
    $resultado3 = mysqli_query($conexao,$sql3);
    $linha = mysqli_fetch_array($resultado3);
    $vta = $linha["VTa"];
    $sql4 = "select sum(valor) as vatv from apostas where apostas_idpartidas=$id and apostas_idtimes=$idtimev;";
    $resultado4 = mysqli_query($conexao,$sql4);
    $linha2 = mysqli_fetch_array($resultado4);
    $vatv= $linha2["vatv"];
    $sql9 = "select apostas_idusuario  from apostas where apostas_idpartidas=$id and apostas_idtimes = $idtimev;";
    $resultado9 = mysqli_query($conexao, $sql9);

    while ($linha3 = mysqli_fetch_array($resultado9)){
        $idmin = $linha3["apostas_idusuario"];
        $sql6 = "select sum(valor) from apostas where apostas_idpartidas=$id and apostas_idusuario=$idmin;";
        $resultado6 = mysqli_query($conexao,$sql6);
        $linha4=mysqli_fetch_array($resultado6);
        $va = $linha4["sum(valor)"];
        $dinheiros = ($va*$vta)/$vatv;
    $sql8="select dinheiros from usuario where idusuario = $idmin";
    $resultado8 = mysqli_query($conexao,$sql8);
    $linha5 = mysqli_fetch_array($resultado8);
    $novodinheiro = $dinheiros + $linha5["dinheiros"];

        echo $idmin;
        $sql7 = "update usuario set dinheiros = $novodinheiro where idusuario=$idmin;";
        $resultado7 = mysqli_query($conexao,$sql7);
            if($resultado7 == false){
                $erro1 = mysqli_error($conexao);
                header("location:erro.php?erro=".$erro1);
            }
            else {
              header("location:partidas_lista.php");

            }


   }


}



?>