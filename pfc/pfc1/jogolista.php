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

<script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "jogo_processa.php?cmd=del&id="+id;
    }
</script>

<div class="container">
    <h2>Jogos</h2>
    <p><a href="jogo_form.php?id=" class="btn btn-primary btn-large"> Adicionar Jogo <span class="fui-plus-circle"></span></a></p>
    <table class="flat-table flat-table-1">
        <thead>
            <th></th>
            <th class="success">Nome</th>
            <th class="success">Tipo jogo</th>
        </thead>
        <?php
        require("conexao.php");
        $sql = "select idjogo, jogo_descricao, tipojogo_descricao from jogo, tipo_jogo where jogo_idtipo_jogo = idtipo_jogo;";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo "<tbody>
                <td class='active'><a class='btn btn-block btn-lg btn-inverse' href='jogo_perfil.php?id=".$linha["idjogo"]."'>" .$linha["idjogo"]. "</a>  </td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
                <td class='active'>" . $linha["tipojogo_descricao"] . "</td>
              </tbody>";
        }
        ?>
    </table>


    <?php require ("footer.php");
    ?>
<script src="dist/js/vendor/jquery.min.js"></script>
<script src="dist/js/flat-ui.min.js"></script>
<script src="docs/assets/js/application.js"></script>

<script>
    videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
</script>

</body>
