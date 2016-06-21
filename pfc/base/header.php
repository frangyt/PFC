<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pedidos - 2INFOI2</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand" href="index.php">2INFOI2</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li><a href="usuario_lista.php">Usuários</a></li>
                                <li class="divider"></li>
                                <li><a href="cidade_lista.php">Cidades</a></li>
                                <li><a href="estado_lista.php">Estados</a></li>
                                <li class="divider"></li>
                                <li><a href="produto_lista.php">Produtos</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pedidos<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li><a href="pedido_lista.php?fat=s">Faturados</a></li>
                                <li><a href="pedido_lista.php?fat=n">Não Faturados</a></li>
                            </ul>
                        </li>
                        <li><a href="nossa_equipe.php">Equipe</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="e-Mail">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control" id="exampmleInputPassword3" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default">Entrar</button>
                        </form>
                    </ul>
                </div>
            </nav>
