<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>Cadastro de Usuário</title>

        <link href="css/bootstrap.min.css"  rel="stylesheet">
        <link href="css/style.css"  rel="stylesheet">
        <link href="cadastro.css"  rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <style>
            body  {
                background-image: url("imagens/fundo2.jpg");
            }
        </style>
    </head>
    <body>
    <div class="container-fluid">
       <?php require("header.php");

        $email = "";
        $senha = "";
        $nome = "";

        echo "<h2>Usuários : Inclusão</h2>";
?>
        <form action='usuario_processa.php?cmd=ins' method='post'>


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

            <input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
        </form>
                 

                   
            
       
       
             
        </div>



    </body>
</html>
