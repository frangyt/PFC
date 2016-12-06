<?php
session_start();
require("conexao.php");
$id = $_GET["id"];
$idtimev = $_POST["idtimeV"];
$idtimep = $_POST["idtimeP"];

$sql="UPDATE times_partida SET ganhador='s' WHERE times_partidas_idtimes=$idtimev and times_partidas_idpartidas= $id;";
$sql2="UPDATE times_partida SET ganhador='n' WHERE times_partidas_idtimes=$idtimep and times_partidas_idpartidas= $id;";
$resultado = mysqli_query($conexao, $sql);
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
        $idusuario = 1;
    $sql5="select max(apostas_idusuario) as maxid from apostas where apostas_idpartidas=$id; ";
    $resultado5 = mysqli_query($conexao,$sql5);
    $linha3 = mysqli_fetch_array($resultado5);
    $idmax = $linha3["maxid"];

   // while ($idusuario <= $idmax){
        $sql6 = "select sum(valor) from apostas where apostas_idpartidas=$id and apostas_idusuario=$idusuario;";
        $resultado6 = mysqli_query($conexao,$sql6);
        $linha4=mysqli_fetch_array($resultado6);
        $va = $linha4["sum(valor)"];
        $dinheiros = ($va.$vta)/$vatv;
        $sql7 = "update usuario set dinheiros = $dinheiros where idusuario=$idmax";
        $resultado7 = mysqli_query($conexao,$sql7);
            if($resultado7 == false){
                $erro = mysqli_error($conexao);
                header("location:erro.php?erro=".$erro);
            }
            else {

                $_SESSION["dinheiros"] = $dinheiros;
            }
           // $id=$id +  1;

   // }


}



?>