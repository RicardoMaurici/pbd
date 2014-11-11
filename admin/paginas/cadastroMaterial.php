<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Material</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
  		<div class="form-group">
    		<label for="lbnomeMaterial" class="col-sm-2 control-label">Nome Material</label>
    		<div class="col-sm-2">
      			<input type="text" class="form-control" id="inomeMaterial" placeholder="Informe o material">
    		</div>
        <div class="col-sm-5">
          <label for="lbquantidade" class="col-sm-3 control-label">Qtd Estoque</label>
          <div class="col-sm-2">
            <input type="text" class="form-control" id="iqtdEstoque">
          </div>
        </div>
    	</div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <a href="recebimentoMaterial.php" class="btn btn-primary" style="width: 25%;" id="cadastrar">Cadastrar</a>
    </div>
    </form>
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>