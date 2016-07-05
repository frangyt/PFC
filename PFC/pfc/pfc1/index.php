<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

    <head>
        <meta charset=utf-8>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-BET</title>

        <link href="css/bootstrap.min.css"  rel="stylesheet">
        <link href="css/style.css"  rel="stylesheet">
        <link href="index.css"  rel="stylesheet">
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



    <?php require("header.php") ?>



<div class="row">


    <div class="col-md-7">
<div id="texto">
<img id="img-p" class="img-responsive" src="imagens/overwatch.jpeg" alt="">

                <hr>
               
                <p class="lead">Novo cenario se aproximando</p>
                <p>Fãs de Overwatch e de e-sports estão ansiosos para os campeonatos do jogo </p>
                <p>que promete serem emocionantes de muita estratégia e emoção </p>
                <p>O jogo atualmente esta na fase beta mas muitos times profissionais ja estão confirmados.</p>
                

                <hr>
</div>
</div>

    <div class="row">


        <div class="col-md-7">
            <div id="texto">
                <img id="img-p" class="img-responsive" src="imagens/overwatch.jpeg" alt="">

                <hr>

                <p class="lead">Novo cenario se aproximando</p>
                <p>Fãs de Overwatch e de e-sports estão ansiosos para os campeonatos do jogo </p>
                <p>que promete serem emocionantes de muita estratégia e emoção </p>
                <p>O jogo atualmente esta na fase beta mas muitos times profissionais ja estão confirmados.</p>


                <hr>
            </div>
        </div>

        <div class="col-md-5">
<div id="jogo" class="table-responsive">
    <table class="table table-condensed">


      <th></th>
      <th id="titulo"><a href="jogo.php">Jogos</a> </th>      
      <th></th> 
  
 
    <tr>
      <td id="campo"><a href="time_teste.php">Time1</a></td>
      <td id="x"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></td>
      <td id="campo"><a href="time_teste.php">Time2</a></td>
    </tr>
    <tr>
     <td id="campo"><a href="time_teste.php">Time1</a></td>
      <td id="x"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></td>
      <td id="campo"><a href="time_teste.php">Time2</a></td>
    </tr>
    <tr>
      <td id="campo"><a href="time_teste.php">Time1</a></td>
      <td id="x"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></td>
      <td id="campo"><a href="time_teste.php">Time2</a></td>
    </tr>
  
</table>
</div>
</br>


<div id="top" class="table-responsive">
    <table class="table table-condensed">


      <th></th>
      <th ><a id="titulo1" href="ranking.php">Ranking</a> </th>      
      <th></th> 
  
 
    <tr>
      <td id="campo"><a href="perfil_teste.php">Usuário 1</a></td>
      <td id="campo">9999999</td>
    </tr>
    <tr>
      <td id="campo"><a href="perfil_teste.php">Usuário 1</a></td>
      <td id="campo">9999999</td>
    </tr>
    <tr>
      <td id="campo"><a href="perfil_teste.php">Usuário 1</a></td>
      <td id="campo">9999999</td>
    </tr>
  
</table>
</div>
</div>
    </div>






     
    </div>
    <?php require("rodape.php") ?>
    </body>
</html>
