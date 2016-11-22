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



    <?php require ("header.php");
    ?>
    <div class="container">

    <script language="Javascript">
    function confirma(id) {
        if (confirm("Deseja remover esse item?"))
            window.location.href = "campeonato_processa.php?cmd=del&id="+id;
    }
</script>


    <h2>Campeonatos</h2>
    <p><a class="btn btn-primary btn-large" href="campeonato_form.php?id=">Adicionar Campeonato <span class="fui-plus-circle"></span></a></p>
    <table class="flat-table flat-table-1">
        <thead>
            <th></th>
            <th class="success">Nome</th>
            <th class="success">Sigla</th>
            <th class="success">Região</th>
            <th class="success">Jogo</th>
        </thead>
        <?php
        require("conexao.php");
        $sql = "select idcampeonatos, nome_campeonato, sigla_campeonato, regiao_descricao, jogo_descricao from campeonatos, jogo, regiao
                where campeonatos_idregiao = idregiao and campeonatos_idjogo = idjogo;";
        $resultado = mysqli_query($conexao, $sql);
        while ($linha = mysqli_fetch_array($resultado)) {
            echo " <tbody>
                    <tr class='active'>
          
                <td class='active'><a class='btn btn-block btn-lg btn-inverse' href='campeonato_perfil.php?id=".$linha["idcampeonatos"]."'>" .$linha["idcampeonatos"]. "</a>              </td>
                <td class='active'>" . $linha["nome_campeonato"] . "</td>
                <td class='active'>" . $linha["sigla_campeonato"] . "</td>
                <td class='active'>" . $linha["regiao_descricao"] . "</td>
                <td class='active'>" . $linha["jogo_descricao"] . "</td>
              </tr>
              </tbody> ";
        }
        ?>
    </table>
</div>
<footer>
    <div class="container">
        <div class="row demo-row">
            <div class="col-xs-5">
                <h6>Nossos Contatos</h6>
                <a href="https://www.facebook.com/vinycius13" class="fui-facebook"> Vinycius Silveira</a></br>
                <a href="https://plus.google.com/116622724535038811811" class="fui-google-plus"> viny13.99</a></br>
                <a href="https://www.facebook.com/leandro.andrei.cunha?ref=ts&fref=ts" class="fui-facebook"> Leandro Cunha</a></br>
                <a href="https://plus.google.com/100994567177990828022" class="fui-google-plus"> Leandro</a></br>
            </div>
            <div class="col-xs-2"></div>
            <div class="col-xs-5">
                <h6>Contatos do IFC-Araquari</h6>
                <a href="http://araquari.ifc.edu.br/" class="fui-window"> Site do Instituto</a></br>
                <a href="https://www.facebook.com/ifc.oficial" class="fui-facebook"> Facebook do Instituto</a></br>
                <span class="fui-home"> <b>(47) 3803-7200</b></span>

            </div>


        </div>
        <div class="row demo-row">
            <div class="col-xs-4">
            </div>
            <div class="col-xs-4">
                © Todos os Direitos reservados à sua mãe
            </div>
            <div class="col-xs-4">
            </div>
        </div>
    </div>
</footer>
<script src="dist/js/vendor/jquery.min.js"></script>
<script src="dist/js/flat-ui.min.js"></script>
<script src="docs/assets/js/application.js"></script>

<script>
    videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
</script>
</body>
