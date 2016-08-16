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
    </head>
    <body>
    <div class="container-fluid">
       <?php require("header.php") ?>  


<form>
       
       <div class="row" id="texto">
           
            <div class="col-md-7" id="cad">

                            
                                <label>Nome:</label>
                                <input class="campo" type="text" id="nome"></br>
                                <label> Email: </label>
                                <input class="campo" type="email" id="email" ></br>
                       
                   
                            
                                <label> Data de Nascimento: </label>
                                    <input class="campo" type="date" id="datanasc"></br>

                             
                  
                         
                                <label> Senha: </label>
                                    <input class="campo" type="password" id="senha"></br>
                                    </br>
                                    </br>
                                    
                          
            </div>

            <div class="col-md-3" id="textotermos">

    
                <p class="termos">
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                Termos que ninguem vai ler0000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                000000000000000000000000000000000000
                </p>
                <h3 >
                <input class="check"  type="checkbox"> aceito
                </h3>
                
            
            </div>
        </div>
        
        <input type="submit" class="aceito" value="Cadastrar">

                 

                   
            
       
       
             
        </div>
        
    </div>
    <?php require("rodape.php") ?>     
    </body>
</html>
