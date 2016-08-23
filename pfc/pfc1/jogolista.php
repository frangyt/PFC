<head>
    <meta charset=utf-8>
    <title>Header</title>
    <meta name="viewport" content="width=device-width">

    <link href="css/bootstrap.min.css"  rel="stylesheet">
    <link href="css/style.css"  rel="stylesheet">
    <link href="jogo.css"  rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>


</head>
<body>
<?php require("header.php") ?>

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "jogo_processa.php?cmd=del&id="+id;
    }
</script>

<div class="jumbotron">
    <h2>Jogos</h2>
    <p><a href="jogo_form.php?id="> <button type="button" class="btn btn-primary btn-large"> Adicionar Jogo</button> </a></p>
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
</body>