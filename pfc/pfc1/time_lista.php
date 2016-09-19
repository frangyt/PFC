<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/íconee-bet.ico">
    <link href="index.css" rel="stylesheet">

    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>
    <style>
        body  {
            background-color: white;
        }
    </style>
</head>

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "time_processa.php?cmd=del&id="+id;
    }
</script>


    <h2>Times</h2>
    <p><a class="btn btn-primary btn-large" href="time_form.php?id=">Adicionar Time <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="table table-condensed">
        <tr class="success">
            <td class="sucess"></td>
            <td class="success">Nome</td>
            <td class="success">Sigla</td>
            <td class="success">Jogo</td>
        </tr>
        <?php
        require("conexao.php");
        $sql = "select idtimes,  nome_time, sigla_times, jogo_descricao
                    from times, jogo where times_idjogo = idjogo;
                    ";

        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tr class='active'>
                <td class='active'><a class='btn btn-info' href='times_perfil.php?id=".$linha["idtimes"]."'>" .$linha["idtimes"]. "</a>              </td>
                <td class='active'>" . $linha["nome_time"] . "</td>
                <td class='active'>" . $linha["sigla_times"] . "</td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
              </tr>";
        }
        ?>
    </table>



