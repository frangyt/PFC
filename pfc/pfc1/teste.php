<?php
require("conexao.php");
$sql1 = "select max(idpartidas) from partidas;";
$resultado1 = mysqli_query($conexao, $sql1);
$linha1 = mysqli_fetch_array($resultado1);
$idmax = $linha1["max(idpartidas)"];

$id = 1;
while ($id <= $idmax) {
$sql = "select   idpartidas, idtimes, idcampeonatos, data, sigla_campeonato, sigla_times, ganhador
                     from partidas, times_partida, campeonatos, times  where idpartidas = times_partidas_idpartidas
                       and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes and idpartidas=$id;
                     ";
$resultado = mysqli_query($conexao, $sql);
while ($linha = mysqli_fetch_array($resultado)) {
       echo "<tr class='active'>
                 <td class='active'>" . $linha["data"] . "</td>
             <td class='active'><a class='btn btn-info' href='campeonato_perfil.php?id=" . $linha["idcampeonatos"] . "'>" . $linha["sigla_campeonato"] . "</a>              </td>
            <td class='active'><a class='btn btn-info' href='times_perfil.php?id=" . $linha["idtimes"] . "'>" . $linha["sigla_times"] . "</a>              </td>
          <td class='active'>" . $linha["ganhador"] . "</td>
       </tr>";
}
$id = $id+1;
    echo "</br>";
}

?>

<!--select idpartidas, max(idtimes) as idtime1, min(idtimes) as idtime2, idcampeonatos, data, sigla_campeonato from partidas,
times_partida, campeonatos, times where idpartidas = times_partidas_idpartidas and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes
and idpartidas=1;
-->


