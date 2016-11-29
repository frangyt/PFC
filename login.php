<html>
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
<body>
<?php require ("header.php");
?>
<div class="container">
<?php
$email = "";
$senha = "";
?>
<form method="POST" action="processalogin.php">

    </br>
    </br>
    </br>
    </br>
    <div class="row demo-row">
    <div class="col-xs-2">
    </div>
        <div class="col-xs-8">
        <div class="form-group">
    <label><h4>E-mail:</h4></label>
    <div class="input-group">
    <span class="input-group-addon"><span class="fui-user"></span></span>
    <input type="text" name="email" id="email" placeholder="Nome" class="form-control" value="<?php echo $email; ?>"><br>
        </div>
        </div>
    </div>
    </div>
    <div class="row demo-row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
    <div class="form-group">
        <label><h4>Senha:</h4></label>
        <div class="input-group">
            <span class="input-group-addon"><span class="fui-lock"></span></span>
    <input type="password" name="senha" id="senha"  placeholder="Nome" class="form-control" value="<?php echo $senha; ?>"><br>
        </div>
    </div>
    </div>
    </div>
    </br>
    <div class="row demo-row">
        <div class="row demo-row">
        <div class="col-xs-2"></div>
            <div class="col-xs-8">
            <input type="submit" value="Entrar" id="entrar" name="entrar" class="btn btn-block btn-lg btn-success"><br>
        </div>
        </div>
    </div>
</form>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<?php require ("footer.php");
?>
</body>
</html>


