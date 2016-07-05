<?php require("header.php") ?>

<div class="jumbotron">
    <?php
    $idregiao= "";
    $regiao_descricao = "";
    ?>

       <h2>região : Inclusão</h2>
       <form action='cidade_processa.php?cmd=ins&id=2' method='post'>


    <div class="row" >
        <div class="col-md-12" >
            <div class="form-group" >
                <label for="inputRegiao_descricao" > Região</label >
                <div class="input-group" >
                    <span class="input-group-addon" ><span class="glyphicon glyphicon-pencil" ></span ></span >
                    <input type = "text" class="form-control" id = "regiao_descricao" name = "regiao_descricao" placeholder = "Região" value = "<?php echo $regiao_descricao; ?>"" >

                </div >
            </div >
        </div >
    </div >



    <input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
    </form>
</div>



<?php include("footer.php")?>
