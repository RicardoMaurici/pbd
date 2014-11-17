<?php
require '../includes/header.html';
require '../includes/menuAluno.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Inscrição</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
  		<div class="form-group">
    		<label for="lbnomePai" class="col-sm-2 control-label">Nome do Pai</label>
    		<div class="col-sm-4">
      			<input type="text" class="form-control" id="inomePai" placeholder="Informe o nome do Pai">
    		</div>
    	</div>
      <div class="form-group">
        <label for="lbnomeMae" class="col-sm-2 control-label">Nome do Mãe</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="inomeMae" placeholder="Informe o nome da Mãe">
        </div>
      </div>
    	<div class="form-group">
    		<label for="lbtrabalha" class="col-sm-2 control-label"> Trabalha? </label>
        <div class="col-sm-2">
           <select class="form-control" id="sltrabalha">
              <option>Sim</option>
              <option>Não</option>
            </select>
        </div>
        <div class="col-sm-3">
          <label for="lbfilhos" class="col-sm-3 control-label">Filhos</label>
          <div class="col-sm-5">
              <input type="number" class="form-control" id="idfilhos" >
          </div>
        </div>
      </div>  
      <div class="form-group">
        <label for="lbtel1" class="col-sm-2 control-label">Nacionalidade</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="itel1" placeholder="Nacionalidade">
        </div>
        <div class="col-sm-3">
          <label for="lbestadocivil" class="col-sm-3 control-label">Estado Civil</label>
          <div class="col-sm-8">
            <select class="form-control" id="slestadocivil">
              <option>Solteiro</option>
              <option>Casado</option>
              <option>Viúvo</option>
              <option>Divorciado</option>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbrenda" class="col-sm-2 control-label">Renda Familiar</label>
          <div class="col-sm-4">
            <select class="form-control" id="slrenda"> <!--infomacao vem do banco-->
              <option>ATÉ 3 SALÁRIOS MÍNIMOS</option> 
              <option>DE 3 A 5 SALÁRIOS MÍNIMOS</option>
              <option>DE 5 A 10 SALÁRIOS MÍNIMOS</option>
              <option>DE 10 A 20 SALÁRIOS MÍNIMOS</option>
              <option>MAIS DE 20 SALÁRIOS MÍNIMOS</option>
            </select>
          </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
      <a href="mainAluno.php" class="btn btn-primary" style="width: 25%;" id="cadastrar">Concluir Inscrição</a>
      <!--<button type="button" class="btn btn-warning" id="alterar">Alterar</button>
      <button type="button" class="btn btn-danger" id="cancelar">Excluir</button>-->
    </div>
	</form>
  </div>
  </div>  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>