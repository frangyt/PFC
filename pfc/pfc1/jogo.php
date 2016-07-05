<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>Jogo</title>

        <link href="css/bootstrap.min.css"  rel="stylesheet">
        <link href="css/style.css"  rel="stylesheet">
        <link href="jogo.css"  rel="stylesheet">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="jogo.js"></script>
		<style>
			body  {
				background-image: url("imagens/fundo2.jpg");
			}
		</style>
        
        
	
    </head>
    <body>
<?php require("header.php") ?>

            <div class="menu" id="menujogos">
                <div class="menu">
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">Counter-Strike</a>
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">League of Legends</a>
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">DOTA 2</a>
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">Hearthstone</a>
                    <a role="button" class="btn btn-primary navbar-btn" href="jogo1.php" id="estilobotoes">Fighting Games</a>
                </div>
            </div>
            
			<div class = "panel">
			   <div class = "panel-heading">Proximos Jogos</div>
			   
			   <table class="table">
				  <tr>
					 <td><img src="imagens/CS.jpg" class="img-responsive img-rounded"></td>
					<td><a href=#><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></a></span></td>
					<td id="campo"><a href="time_teste.php">Time1</a></td>
				    <td id="x"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></td>
					<td id="campo"><a href="time_teste.php">Time2</a></td>
					<td><a><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></a></span></td>
				  </tr>
				  
				  <tr>
					<td><img src="imagens/dota.png" class="img-responsive img-rounded"></td>
					<td><a href=#><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></a></span></td>
					<td id="campo"><a href="time_teste.php">Time1</a></td>
				    <td id="x"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></td>
					<td id="campo"><a href="time_teste.php">Time2</a></td>
					<td><a><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></a></span></td>
					
				  </tr>
				  
				  <tr>
					 <td><img src="imagens/lol.png" class="img-responsive img-rounded"></td>
					<td><a href=#><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></a></span></td>
					<td id="campo"><a href="time_teste.php">Time1</a></td>
				    <td id="x"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></td>
					<td id="campo"><a href="time_teste.php">Time2</a></td>
					<td><a><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></a></span></td>
				  </tr>
				  <tr>
					<td><img src="imagens/hs.png" class="img-responsive img-rounded"></td>
					<td><a href=#><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></a></span></td>
					<td id="campo"><a href="time_teste.php">Time1</a></td>
				    <td id="x"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></td>
					<td id="campo"><a href="time_teste.php">Time2</a></td>
					<td><a><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></a></span></td>
				  </tr>
				  <tr>
					<td><img src="imagens/fg.jpg" class="img-responsive img-rounded"></td>
					<td><a href=#><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></a></span></td>
					<td id="campo"><a href="time_teste.php">Time1</a></td>
				    <td id="x"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></td>
					<td id="campo"><a href="time_teste.php">Time2</a></td>
					<td><a><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></a></span></td>
				  </tr>				  
			   </table>
			   
			</div>
            
            
            
            

    <?php require("rodape.php") ?>  
    </body>
</html>
