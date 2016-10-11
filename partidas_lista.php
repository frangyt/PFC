<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "partidas_processa.php?cmd=del&id="+id;
    }
</script>

<div class="jumbotron">
    <h2>Partidas</h2>
    <p><a class="btn btn-primary btn-large" href="partidas_form.php?id=">Adicionar partida <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="table table-condensed">
        <tr class="success">

            <td class="success">Data</td>
            <td class="success">Campeonato</td>
            <td class="success">Time</td>
            <td class="sucess"> </td>
            <td class="success"> Time</td>

        </tr>
        <?php
        require("conexao.php");
        $sql1 = "select max(idpartidas) from partidas;";
        $resultado1 = mysqli_query($conexao, $sql1);
        $linha1 = mysqli_fetch_array($resultado1);
        $idmax = $linha1["max(idpartidas)"];

        $id = 1;
        while ($id <= $idmax) {
            $sql = "select   idpartidas, max(idtimes) as idtime1, min(idtimes) as idtime2,  idcampeonatos, data, sigla_campeonato
                     from partidas, times_partida, campeonatos, times  where idpartidas = times_partidas_idpartidas
                       and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes and idpartidas=$id;
                     ";
            $resultado = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($resultado)) {
                $idtime1 = $linha["idtime1"];
                $idtime2 = $linha["idtime2"];
                echo "<tr class='active'>
                 <td class='active'>" . $linha["data"] . "</td>
             <td class='active'><a class='btn btn-info' href='campeonato_perfil.php?id=" . $linha["idcampeonatos"] . "'>" . $linha["sigla_campeonato"] . "</a>              </td>";

             $sql2 = "select sigla_times from times where idtimes = $idtime1";
             $resultado2 = mysqli_query($conexao, $sql2);
             $linha2 = mysqli_fetch_array($resultado2);
            echo "<td class='active'><a class='btn btn-info' href='times_perfil.php?id=" . $linha["idtime1"] . "'>" . $linha2["sigla_times"] . "</a>              </td>
            <td class='active'> <span class='fui-cross'></span></td>";
                $sql3 = "select sigla_times from times where idtimes = $idtime2";
                $resultado3 = mysqli_query($conexao, $sql3);
                $linha3 = mysqli_fetch_array($resultado3);
            echo "<td class='active'><a class='btn btn-info' href='times_perfil.php?id=" . $linha["idtime2"] . "'>" . $linha3["sigla_times"] . "</a>              </td>

            </tr>";
            }
            $id = $id+1;
            echo "</br>";
        }

        ?>
    </table>

</div>