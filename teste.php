<?php
date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i:s');
echo $date;

?>

<!--select idpartidas, max(idtimes) as idtime1, min(idtimes) as idtime2, idcampeonatos, data, sigla_campeonato from partidas,
times_partida, campeonatos, times where idpartidas = times_partidas_idpartidas and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes
and idpartidas=1;
-->


