<?php require("header.php") ?>

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
        alert(id);
            window.location.href = "usuario_processa.php?cmd=del&id="+id;
    }
</script>

<div class="jumbotron">
    <h2>Usuários</h2>
    <p><a class="btn btn-primary btn-large" href="usuario_form.php?id=0">Adicionar <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="table table-condensed">
        <tr class="success">
            <td></td>
            <td class="success">email</td>
            <td class="success">Nome</td>
            <td class="success">senha</td>
            <td class="success">data de nascimento</td>
        </tr>
        <?php
        require("conexao.php");
        $resultado = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr class='active'>
                <td class='active'>
                    <a href='usuario_form.php?id=" .$linha["cpf"]."'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
                    <a href='javascript:confirma(\"" . $linha["cpf"] . "\");'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> </a>
                </td>
                <td class='active'>".$linha["cpf"]."</td>
                <td class='active'>".$linha["nome"]."</td>
                <td class='active'>".$linha["ds_logradouro_nome"]."</td>
                <td class='active'>".$linha["ds_cidade_nome"]."</td>
              </tr>";
        }
        ?>
    </table>
    <p><a class="btn btn-primary btn-large" href="usuario_form.php?id=0">Adicionar <span class="glyphicon glyphicon-plus-sign"></span></a></p>
</div>

<?php include("footer.php")?>

