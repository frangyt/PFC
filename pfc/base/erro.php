<?php require("header.php") ?>

<div class="jumbotron">
    <h2>ATENÇÃO!</h2>
    <?php
    $erro = $_GET["erro"];
    if ($erro == "usuexi") {
        echo "<h3>CPF Já Cadastrado!</h3>";
    }
    else {
        echo $erro;
    }
    ?>
</div>

<?php include("footer.php")?>
