<?php
require_once("conexao.php");

$idcampeonatos = $_GET["id"];
$sql = "select idcampeonatos,  nome_campeonato, sigla_campeonato, regiao_descricao, jogo_descricao
                    from campeonatos, jogo, regiao where campeonatos_idjogo= idjogo and campeonatos_idregiao = idregiao and idcampeonatos = $idcampeonatos;
                    ";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);
echo "<tr class='active'>
            
                <td class='active'> Campeonato</td>
                 <td class='active'> Região</td>
                 <td class='active'> Jogo</td> 
                ";
echo '</br>';
echo "<tr class='active'>
                
                <td class='active'>" . $linha["nome_campeonato"] . "</td>
                <td class='active'>" . $linha["regiao_descricao"] . "</td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
              </tr>";

$sql2 = "select nome_time from partidas, times, campeonatos, times_partida where idcampeonatos = partidas_idcampeonatos and idtimes = times_partidas_idtimes
and times_partidas_idpartidas = idpartidas and idcampeonatos = $idcampeonatos;";
$resultado2 = mysqli_query($conexao, $sql2);
$linha2 = mysqli_fetch_array($resultado2);
echo '</br>';
echo '</br>';

echo "<tr class='active'>
            
                <td class='active'> Nome do Time</td> 
                ";
echo '</br>';
while ($linha2 = mysqli_fetch_array($resultado2)) {
    echo "<tr class='active'>
                
                <td class='active'>" . $linha2["nome_time"] . "</td>
           </tr>
    </br>";
}

echo "<p><a class='btn btn-primary btn-large' href='jogador_form.php?id='>Adicionar Jogador <span class='glyphicon glyphicon-plus-sign'></span></a></p>"


?>