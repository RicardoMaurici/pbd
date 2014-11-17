<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Alteração de Curso</h3>
  </div>
<div class="panel-body">
  	<form class="form-horizontal" role="form">
  		<div class="form-group">
  		<label for="lbtipo" class="col-sm-2 control-label">Tipo</label>
          <div class="col-sm-2">
            <select class="form-control" id="sltipo"> <!--infomacao vem do banco-->
              <option>Extensivo</option> 
              <option>Semiextensivo</option>
              <option>Intensivo</option>
            </select>
          </div>
          <div class="col-sm-4">
            <label for="lbturno" class="col-sm-2 control-label">Turno</label>
            <div class="col-sm-7">
              <select class="form-control" id="slturno"> <!--infomacao vem do banco-->
              	<option>Matutino</option> 
              	<option>Vespertino</option>
              	<option>Noturno</option>
              </select>
            </div>
    	  </div>
		</div>
      <div class="form-group">
        <label for="lbvagas" class="col-sm-2 control-label">Vagas</label>
        <div class="col-sm-2">
            <input type="number" class="form-control" id="ivagas" placeholder="Nº vagas">
        </div>
      </div>
      <div class="form-group">
        <label for="lbdtinimat" class="col-sm-2 control-label">Início Matrícula</label>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="idtinimat" placeholder="Início Matrícula">
        </div>
        <div class="col-sm-5">
            <label for="lbdttermat" class="col-sm-2 control-label">Término Matrícula</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="idttermat" placeholder="Término Matrícula">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbdtiniins" class="col-sm-2 control-label">Início Inscrições</label>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="idtiniins" placeholder="Início Inscrições">
        </div>
        <div class="col-sm-5">
            <label for="lbdtterins" class="col-sm-2 control-label">Término Inscrições</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="idtterins" placeholder="Término Inscrições">
            </div>
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <a href="gerenciaCurso.php" class="btn btn-warning" style="width: 25%;" id="cadastrar">Alterar</a>
    </div>
	</form> 
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>