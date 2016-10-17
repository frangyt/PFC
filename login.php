<html>
<head>
    <title> Login de Usuário </title>
</head>
<body>
<form method="POST" action="processalogin.php">
    <label>email:</label><input type="text" name="email" id="email"  value="<?php echo $email; ?>"><br>
    <label>Senha:</label><input type="password" name="senha" id="senha"  value="<?php echo $senha; ?>"><br>
    <input type="submit" value="entrar" id="entrar" name="entrar"><br>
</form>
</body>
</html>


