<head>
    <meta charset=utf-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-BET</title>

    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">

    <script src="dist/js/vendor/html5shiv.js"></script>
    <script src="dist/js/vendor/respond.min.js"></script>
    <script src="dist/js/vendor/jquery.min.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>
    <script src="docs/assets/js/application.js"></script>


    <style>
        body  {
            background-color: white;
        }
    </style>
</head>
<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "partidas_processa.php?cmd=del&id="+id;
    }
</script>


<?php
session_start();
if (isset($_SESSION["idusuario"])) {
    if ($_SESSION["tipo_usuario"] == 2) {
        require("header_admin.php");
    }
    else {
        require("header.php");
    }
}
else{
    require("header.php");
}
?>
<div class="container">


    <h4>Partidas</h4>
    <p><a class="btn btn-primary btn-large" href="partidas_form.php?id=">Adicionar partida <span class="glyphicon glyphicon-plus-sign"></span></a></p>
    <table class="flat-table flat-table-1">
        <thead>
            <th>     </th>
            <th >Data e Horário</th>
            <th >Campeonato</th>
            <th >Time</th>
            <th > </th>
            <th > Time</th>
        <th>vencedor</th>

        </thead>
        <?php
        require("conexao.php");
        $sql1 = "select max(idpartidas) from partidas;";
        $resultado1 = mysqli_query($conexao, $sql1);
        $linha1 = mysqli_fetch_array($resultado1);
        $idmax = $linha1["max(idpartidas)"];
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i:s');


        $id = 1;
        while ($id <= $idmax) {
            $sql = "select   idpartidas, max(idtimes) as idtime1, min(idtimes) as idtime2,  idcampeonatos, data, sigla_campeonato
                     from partidas, times_partida, campeonatos, times  where idpartidas = times_partidas_idpartidas
                       and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes and idpartidas=$id ;
                     ";
            $resultado = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($resultado)) {
                if (isset ($linha["idtime1"])) {
                    $idtime1 = $linha["idtime1"];
                    $idtime2 = $linha["idtime2"];
                    echo "<tbody>
                  <td><a class='btn btn-block btn-lg btn-inverse' href='partidas_perfil.php?id=" . $linha["idpartidas"] . "'>" . $linha["idpartidas"] . "</a>              </td>
                 <td>" . $linha["data"] . "</td>
             <td><a class='btn btn-block btn-lg btn-inverse' href='campeonato_perfil.php?id=" . $linha["idcampeonatos"] . "'>" . $linha["sigla_campeonato"] . "</a>              </td>";

                    $sql2 = "select sigla_times from times where idtimes = $idtime1;";
                    $resultado2 = mysqli_query($conexao, $sql2);
                    $linha2 = mysqli_fetch_array($resultado2);
                    echo "<td><a class='btn btn-block btn-lg btn-inverse' href='times_perfil.php?id=" . $linha["idtime1"] . "'>" . $linha2["sigla_times"] . "</a    >              </td>
            <td><a href='partidas_perfil.php?id=" . $id . "'> <span class='fui-cross'></a></span></td>";
                    $sql3 = "select sigla_times from times where idtimes = $idtime2;";
                    $resultado3 = mysqli_query($conexao, $sql3);
                    $linha3 = mysqli_fetch_array($resultado3);
                    echo "<td><a class='btn btn-block btn-lg btn-inverse' href='times_perfil.php?id=" . $linha["idtime2"] . "'>" . $linha3["sigla_times"] . "</a>              </td>";

                    $sql5 = "select ganhador from times_partida where times_partidas_idpartidas = $id";
                    $resultado5 = mysqli_query($conexao, $sql5);
                    $linha5 = mysqli_fetch_array($resultado5);
                    if ($linha5["ganhador"] == null) {


                        echo "<td><a class='btn btn-block btn-lg btn-primary' href = 'atualiza_resultado.php?id=" . $id . "' > atualizar vencedor </a > </td >";
                    } else {
                        $sql4 = " select nome_time, idtimes from times, times_partida, partidas where idpartidas = $id and ganhador = 's' and times_partidas_idpartidas = idpartidas and  
                        times_partidas_idtimes = idtimes";
                        $resultado4 = mysqli_query($conexao, $sql4);
                        $linha4 = mysqli_fetch_array($resultado4);
                        echo "<td><a class='btn btn-block btn-lg btn-primary' href='times_perfil.php?id=" . $linha4["idtimes"] . "' > " . $linha4["nome_time"] . "</a> </td>";
                    }


                    echo " </tbody>";
                }
            }
            $id = $id+1;
            echo "</br>";
        }

        ?>
    </table>


</div>
<?php require ("footer.php");
?>