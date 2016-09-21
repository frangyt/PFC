<?php require("header.php") ?>

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
            <td class="success">Times</td>
            <td class="success"> Ganhador</td>
        </tr>
        <?php
        require("conexao.php");
        $consulta = "select max(idpartidas) from partidas;";
        $rconsulta = mysqli_query($conexao,$consulta);
        $seila = mysqli_fetch_array($rconsulta);
        $max=$seila["max(idpartidas)"];
        $idpartidas = 1;
            $sql = "select   idpartidas, idtimes, idcampeonatos, data, sigla_campeonato, sigla_times, ganhador
                    from partidas, times_partida, campeonatos, times  where idpartidas = times_partidas_idpartidas
                    and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes;
                    ";
 echo $seila["max(idpartidas)"];
            $resultado = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($resultado)) {
                echo "<tr class='active'>
                <td class='active'>" . $linha["data"] . "</td>
                <td class='active'><a class='btn btn-info' href='campeonato_perfil.php?id=" . $linha["idcampeonatos"] . "'>" . $linha["sigla_campeonato"] . "</a>              </td>
                <td class='active'><a class='btn btn-info' href='times_perfil.php?id=" . $linha["idtimes"] . "'>" . $linha["sigla_times"] . "</a>              </td>
                <td class='active'>" . $linha["ganhador"] . "</td>
              </tr>";
            }

        ?>
    </table>

</div>

<?php include("footer.php")?>
