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
    <label>email:</label><input type="text" name="email" id="email"  value="<?php echo $email; ?>"><br>
    <label>Senha:</label><input type="password" name="senha" id="senha"  value="<?php echo $senha; ?>"><br>
    <input type="submit" value="entrar" id="entrar" name="entrar"><br>
</form>
</div>
<?php require ("footer.php");
?>
</body>
</html>


