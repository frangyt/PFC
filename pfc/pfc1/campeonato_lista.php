<head>

    <style>
        body  {
            background-image: url("imagens/fundo2.jpg");
        }
    </style>


</head>
<?php require("header.php") ?>

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "campeonato_processa.php?cmd=del&id="+id;
    }
</script>


    <h2>Campeonatos</h2>
    <p><a class="btn btn-primary btn-large" href="campeonato_form.php?id=">Adicionar Campeonato <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="table table-condensed">
        <tr class="success">
            <td></td>
            <td class="success">Nome</td>
            <td class="success">Sigla</td>
            <td class="success">Região</td>
            <td class="success">Jogo</td>
        </tr>
        <?php
        require("conexao.php");
        $sql = "select nome, sigla, regiao_descricao, jogo_descricao from campeonatos, jogo, regiao
                where campeonatos_idregiao = idregiao and campeonatos_idjogo = idjogo;";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr class='active'>
                <td></td>
                <td class='active'>" . $linha["nome"] . "</td>
                <td class='active'>" . $linha["sigla"] . "</td>
                <td class='active'>" . $linha["regiao_descricao"] . "</td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
              </tr>";
        }
        ?>
    </table>
