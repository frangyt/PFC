<?php
$barra = "\\";
echo $barra;
$caminho = "noticias". $barra ."noticia". "2".".txt";
echo $caminho;
?>

<!--select idpartidas, max(idtimes) as idtime1, min(idtimes) as idtime2, idcampeonatos, data, sigla_campeonato from partidas,
times_partida, campeonatos, times where idpartidas = times_partidas_idpartidas and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes
and idpartidas=1;
-->


