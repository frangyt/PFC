<?php require("header.php") ?>

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "cidade_processa.php?cmd=del&id="+id;
    }
</script>

<div class="jumbotron">
    <h2>Cidades</h2>
    <p><a class="btn btn-primary btn-large" href="cidade_caminho.php?id=2">Adicionar Tipo do jogo <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <p><a class="btn btn-primary btn-large" href="cidade_caminho.php?id=1">Adicionar Região <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="table table-condensed">
        <tr class="success">
            <td></td>
            <td class="success">Tipo do Jogo</td>
            <td class="success">Região</td>
        </tr>
        <?php
        require("conexao.php");
        $sql = "select   idtipo_jogo, tipojogo_descricao, idregiao, regiao_descricao
                    from regiao, tipo_jogo;
                    ";

        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr class='active'>
                <td class='active'>" . $linha["tipojogo_descricao"] . "</td>
                <td class='sucess'> </td>
                <td class='active'>" . $linha["regiao_descricao"] . "</td>
              </tr>";
        }
        ?>
    </table>

</div>

<?php include("footer.php")?>
