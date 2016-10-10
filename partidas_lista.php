
<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "partidas_processa.php?cmd=del&id="+id;
    }
</script>

<div class="jumbotron">
    <h2>Partidas</h2>
    <p><a class="btn btn-primary btn-large" href="partidas_form.php?id=">Adicionar partida <span class="fui-plus-circle"></span></a></p>
    <table class="table table-condensed">
        <tr class="success">

            <td class="success">Data</td>
            <td class="success">Campeonato</td>
            <td class="success">Times</td>
            <td class="success"> Ganhador</td>
        </tr>
        <?php
        require("conexao.php");
        $id=1;
        $sql2 = "select max(idpartidas) as idpartidas from partidas;";
        $resultado2 = mysqli_query($conexao,$sql2);
        $linha2 = mysqli_fetch_array($resultado2);
        while ($id <= $linha2["idpartidas"]) {
            $sql = "select idpartidas, max(idtimes) as idtime1, sigla_times as sigla1, ganhador, idcampeonatos, data, sigla_campeonato from partidas
                    times_partida, campeonatos, times where idpartidas = times_partidas_idpartidas and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes
                    and idpartidas=$id;
                    select idpartidas, min(idtimes) as idtime2, sigla_times as sigla2, ganhador, idcampeonatos, data, sigla_campeonato from partidas
                    times_partida, campeonatos, times where idpartidas = times_partidas_idpartidas and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes
                    and idpartidas=$id;

                    ";


            $resultado = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($resultado)) {
                echo "<tr class='active'>
                <td class='active'>" . $linha["data"] . "</td>
                <td class='active'><a class='btn btn-info' href='campeonato_perfil.php?id=" . $linha["idcampeonatos"] . "'>" . $linha["sigla_campeonato"] . "</a>              </td>
                <td class='active'><a class='btn btn-info' href='times_perfil.php?id=" . $linha["idtime1"] . "'>" . $linha["sigla1"] . "</a>              </td>
                <td class='active'><a class='btn btn-info' href='times_perfil.php?id=" . $linha["idtime2"] . "'>" . $linha["sigla2"] . "</a>              </td>
                <td class='active'>" . $linha["ganhador"] . "</td>
              </tr>";
            }
            $id++;
        }

        ?>
    </table>

</div>
