<head xmlns="http://www.w3.org/1999/html">
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
<body>

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
    <?php
    $id = $_GET["id"];
    $idtime = "";
    ?>

   <table class="flat-table flat-table-1"></table>
        <thead>
            <th>     </th>
            <th>Data e Horário</th>
            <th>Campeonato</th>
            <th>Time</th>
            <th> </th>
            <th> Time</th>
            <th> vencedor</th>
            <th>perdedor</th>
        </thead>
        </tbody>
        <?php
        $sql="select data, idcampeonatos, max(idtimes) as idtime1, min(idtimes) as idtime2, sigla_campeonato from partidas, times_partida, campeonatos, times where idpartidas = times_partidas_idpartidas
                       and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes and idpartidas= $id";
        $resultado = mysqli_query($conexao,$sql);
        $linha = mysqli_fetch_array($resultado);
        $idtime1 = $linha["idtime1"];
        $idtime2 = $linha["idtime2"];
        ?>
    <td><form action="processa_resultado.php?id=<?php echo $id?>" method="post"> </td>

        <td><?php echo $linha["data"]?> </td>
      <td><a class='btn btn-block btn-lg btn-inverse' href='campeonato_perfil.php?id=<?php echo $linha["idcampeonatos"] ?>'><?php echo $linha["sigla_campeonato"] ?></a>              </td>
        <?php
        $sql2 = "select sigla_times, nome_time from times where idtimes = $idtime1";
        $resultado2 = mysqli_query($conexao, $sql2);
        $linha2 = mysqli_fetch_array($resultado2);
        ?>
        <td><?php echo $linha2["sigla_times"]?> </td>
        <td></td>
        <?php
        $sql3 = "select sigla_times, nome_time from times where idtimes = $idtime2";
        $resultado3 = mysqli_query($conexao, $sql3);
        $linha3 = mysqli_fetch_array($resultado3);
        ?>
        <td> <?php  echo $linha3["sigla_times"] ?></td>
        <td></td>
        <td> <select name=idtimeV id='inputsigla_time' class='form-control select select-primary' data-toggle='select'>
                        
                       <option value=<?php echo $idtime1?> > <?php echo $linha2['nome_time']?><option>
                       <option value=<?php echo $idtime2?> > <?php echo $linha3['nome_time']?><option>

                    </select> </td>
    <td> <select name=idtimeP id='inputsigla_time' class='form-control select select-primary' data-toggle='select'>

            <option value=<?php echo $idtime1?> > <?php echo $linha2['nome_time']?><option>
            <option value=<?php echo $idtime2?> > <?php echo $linha3['nome_time']?><option>

        </select> </td>
            <td><input type="submit" class="btn btn-block btn-lg btn-success" value="Salvar"/> </td>
            </form>
            </tbody>




</table>
    </div>



<?php require ("footer.php");
?>
</body>
