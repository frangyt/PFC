<?php
require_once("conexao.php");

$idtimes = $_GET["id"];
$sql = "select idtimes,  nome_time, sigla_times, jogo_descricao
                    from times, jogo where times_idjogo = idjogo and idtimes = $idtimes;
                    ";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);
echo "<tr class='active'>
            
                <td class='active'> Nome do Time</td>
                 <td class='active'> Sigla</td>
                 <td class='active'> Jogo</td> 
                ";
echo '</br>';
echo "<tr class='active'>
                
                <td class='active'>" . $linha["nome_time"] . "</td>
                <td class='active'>" . $linha["sigla_times"] . "</td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
              </tr>";
echo $idtimes;
$sql2 = "select idjogador, nome_jogador, nick, nome_time from jogador, times where jogador_idtimes = idtimes and idtimes = $idtimes;";
$resultado2 = mysqli_query($conexao, $sql2);
echo '</br>';
echo '</br>';

echo "<tr class='active'>
            
                <td class='active'> Nome do Jogador</td>
                 <td class='active'> Nick</td>
                ";
echo '</br>';
    while ($linha2 = mysqli_fetch_array($resultado2)) {
        echo "<tr class='active'>
                
                <td class='active'>" . $linha2["nome_jogador"] . "</td>
                <td class='active'><a class='btn btn-info' href='jogador_perfil.php?id=".$linha2["idjogador"]."'>" .$linha2["nick"]. "</a>              </td>
              </tr>
              </br>";
    }

echo "<p><a class='btn btn-primary btn-large' href='jogador_form.php?id='>Adicionar Jogador <span class='glyphicon glyphicon-plus-sign'></span></a></p>"


?>