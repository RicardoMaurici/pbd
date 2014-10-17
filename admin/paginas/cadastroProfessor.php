<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Professor</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
  		<div class="form-group">
    		<label for="nomeCompleto" class="col-sm-2 control-label">Nome Completo</label>
    		<div class="col-sm-4">
      			<input type="text" class="form-control" id="nomeCompleto" placeholder="Informe o nome completo">
    		</div>
    	</div>
    	<div class="form-group">
    		<label for="CPF" class="col-sm-2 control-label">CPF</label>
    		<div class="col-sm-2">
      			<input type="text" class="form-control" id="cpf" placeholder="Informe o CPF">
    		</div>
    		<div class="col-sm-3">
      			<label for="RG" class="col-sm-2 control-label">RG</label>
      			<div class="col-sm-6">
      				<input type="text" class="form-control" id="rg" placeholder="Informe o RG">
    			</div>
    		</div>
    	</div>
	</form>
 </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>