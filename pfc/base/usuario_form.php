<?php require("header.php") ?>

<div class="jumbotron">
    <?php
        $email = "";
        $senha = "";
        $nome = "";
        $datnasc = "";
        echo "<h2>Usuários : Inclusão</h2>";
        echo "<form action='usuario_processa.php?cmd=ins' method='post'>";

    ?>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputemail">email</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" id="inputemail" name="email" placeholder="email" value="<?php echo $email; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="inputsenha">Senha</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="password" class="form-control" id="inputsenha" name="senha" placeholder="Senha" value="<?php echo $senha; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="inputnome">Nome Completo</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" id="inputnome" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <label for="inputdatnasc">Data de Nascimento</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
                    <input type="date" class="form-control" id="inputdatnasc" name="datnasc" placeholder="Data de nascimento" value="<?php echo $datnasc; ?>">
                </div>
            </div>
        </div>

    </div>
    <input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
    </form>
</div>

<?php
    if ($_GET["id"] != "0") {
        echo '<script type="text/javascript">
           document.getElementById("inputemail").readOnly = true;
        </script>';
    }
?>

<?php include("footer.php")?>
