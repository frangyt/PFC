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


    <?php
    session_start();
    require("conexao.php");
    if ($_SESSION["tipo_usuario"] = 2){
        require ("header_admin.php");
    }
    else {
        require("header.php");
    }
    ?>


<div class="container">
    <?php
    $id = $_GET["id"];
    $idtime = "";
    ?>

    <table class="flat-table flat-table-1">
        <thead>
            <th>     </th>
            <th >Data e Horário</th>
            <th >Campeonato</th>
            <th >Time</th>
            <th > </th>
            <th > Time</th>
            <th> vencedor</th>
        </thead>
        </tbody>
        <?php
        $sql="select data, idcampeonatos, max(idtimes) as idtime1, min(idtimes) as idtime2, sigla_campeonato from partidas, times_partida, campeonatos, times where idpartidas = times_partidas_idpartidas
                       and partidas_idcampeonatos = idcampeonatos and idtimes = times_partidas_idtimes and idpartidas= $id";
        $resultado = mysqli_query($conexao,$sql);
        $linha = mysqli_fetch_array($resultado);
        $idtime1 = $linha["idtime1"];
        $idtime2 = $linha["idtime2"];
        echo "<td></td>";
        echo "<td>". $linha["data"]. " </td>";
      echo  " <td><a class='btn btn-block btn-lg btn-inverse' href='campeonato_perfil.php?id=" . $linha["idcampeonatos"] . "'>" . $linha["sigla_campeonato"] . "</a>              </td>";
        $sql2 = "select sigla_times from times where idtimes = $idtime1";
        $resultado2 = mysqli_query($conexao, $sql2);
        $linha2 = mysqli_fetch_array($resultado2);
        echo "<td>". $linha2["sigla_times"]." </td>";
        echo "<td></td>";
        $sql3 = "select sigla_times from times where idtimes = $idtime2";
        $resultado3 = mysqli_query($conexao, $sql3);
        $linha3 = mysqli_fetch_array($resultado3);
        echo "<td> ". $linha3["sigla_times"]."</td>";
        echo "<form action='processa_resultado.php' method='post'>";
        echo "<td> <select name=campeonatos_idregiao id='inputCampeonatos_idregiao' class='form-control select select-primary' data-toggle='select'>
                        
                       <option value=".$linha2["sigla_times"].">'.$linha4['regiao_descricao'].'<option>';
                        }
                        ?>
                    </select> ";
?>


        </div>
        <div class="col-xs-8">
            <div class="form-group">
                <label for="inputCampeonatos_idregiao"><h4>Regiao</h4></label>
                <div class="input-group">

                    <select name=campeonatos_idregiao id="inputCampeonatos_idregiao" class="form-control select select-primary" data-toggle="select">
                        <?php
                        require("conexao.php");
                        $sintaxesql = "select * from regiao order by regiao_descricao;";
                        $resultado = mysqli_query($conexao, $sintaxesql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            echo "<option value=".$linha['idregiao'].">".$linha['regiao_descricao']."</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
            <input type="submit" class="btn btn-block btn-lg btn-success" value="Salvar"/>
        </div>
        <div class="col-xs-2"></div>
    </div>
    </form>
</div>
</br>
<?php require ("footer.php");
?>