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
        $sql = "select   data, sigla, sigla_times, ganhador
                    from partidas, times_partida, campeonatos, times  where idpartidas = times_partidas_idpartidas
                    and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes;
                    ";

        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr class='active'>
                <td class='active'>" . $linha["data"] . "</td>
                <td class='active'>" . $linha["sigla"] . "</td>
                <td class='active'>" . $linha["sigla_times"] . "</td>
                <td class='active'>" . $linha["ganhador"] . "</td>
              </tr>";
        }
        ?>
    </table>

</div>

<?php include("footer.php")?>
