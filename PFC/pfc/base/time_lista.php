<?php require("header.php") ?>

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "cidade_processa.php?cmd=del&id="+id;
    }
</script>

<div class="jumbotron">
    <h2>Cidades</h2>
    <p><a class="btn btn-primary btn-large" href="time_form.php?id=">Adicionar Time <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="table table-condensed">
        <tr class="success">

            <td class="success">Nome</td>
            <td class="success">Sigla</td>
            <td class="success">Jogo</td>
        </tr>
        <?php
        require("conexao.php");
        $sql = "select   nome, sigla, jogo_descricao
                    from times, jogo where times_idjogo = idjogo;
                    ";

        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr class='active'>
                <td class='active'>" . $linha["nome"] . "</td>
                <td class='active'>" . $linha["sigla"] . "</td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
              </tr>";
        }
        ?>
    </table>

</div>

<?php include("footer.php")?>
