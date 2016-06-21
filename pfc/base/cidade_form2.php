<?php require("header.php") ?>

<div class="jumbotron">
    <?php
    $idtipo_jogo= $_GET["id"];
    $tipo_jogo_descricao="";
    $idregiao= "";
    $regiao_descricao = "";
   ?>
      <h2>tipo do jogo : Inclusão</h2>
      <form action='cidade_processa.php?cmd=ins&id=1' method='post'>



    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="inputTipo_jogo_descricao">Tipo do jogo</label>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    <input type="text" class="form-control" id="tipo_jogo_descricao" name="tipo_jogo_descricao" placeholder="Tipo do jogo" value="<?php echo $tipo_jogo_descricao; ?>">
                </div>
            </div>
        </div>
    </div>







    <input type="submit" class="btn btn-primary btn-large" value="Salvar"/>
    </form>
</div>



<?php include("footer.php")?>
