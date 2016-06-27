<?php require("header.php") ?>

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "estado_processa.php?cmd=del&id="+id;
    }
</script>

<div class="jumbotron">
    <h2>Estados</h2>
    <p><a class="btn btn-primary btn-large" href="estado_form.php?id=">Adicionar Jogo <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="table table-condensed">
        <tr class="success">
            <td></td>
            <td class="success">Nome</td>
            <td class="success">Tipo jogo</td>
        </tr>
        <?php
        require("conexao.php");
        $sql = "select jogo_descricao, tipojogo_descricao from jogo, tipo_jogo where jogo_idtipo_jogo = idtipo_jogo;";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr class='active'>
                <td></td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
                <td class='active'>" . $linha["tipojogo_descricao"] . "</td>
              </tr>";
        }
        ?>
    </table>

</div>

<?php include("footer.php")?>
