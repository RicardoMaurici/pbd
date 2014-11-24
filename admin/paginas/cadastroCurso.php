<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');
//Pagina principal após o login

?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Curso</h3>
  </div>
<div class="panel-body">
  	<form class="form-horizontal" role="form" method="post" action="./bd/cad_curso.php">
  		<div class="form-group">
  		<label for="lbtipo" class="col-sm-2 control-label">Tipo</label>
          <div class="col-sm-2">
            <select name="tipoCurso" class="form-control" id="sltipo"> <!--infomacao vem do banco-->
              <option>Semi-Extensivo</option>
              <option>Extensivo</option> 
              <option>Intensivo</option>
            </select>
          </div>
          <div class="col-sm-4">
            <label for="lbturno" class="col-sm-2 control-label">Turno</label>
            <div class="col-sm-7">
              <select name="turnoCurso" class="form-control" id="slturno"> <!--infomacao vem do banco-->
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
            <input  name="vagasCurso" type="number" class="form-control" min=0 id="ivagas" placeholder="Nº vagas" required>
        </div>
      </div>
      <div class="form-group">
        <label for="lbdtinimat" class="col-sm-2 control-label">Início Matrícula</label>
        <div class="col-sm-2">
            <input name="inicioMatCurso" type="date" class="form-control" id="idtinimat" placeholder="dd/mm/AAAA">
        </div>
        <div class="col-sm-5">
            <label for="lbdttermat" class="col-sm-2 control-label">Término Matrícula</label>
            <div class="col-sm-5">
              <input name="terminoMatCurso" type="date" class="form-control" id="idttermat" placeholder="dd/mm/AAAA">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbdtiniins" class="col-sm-2 control-label">Início Inscrições</label>
        <div class="col-sm-2">
            <input name="inicioInscCurso" type="date" class="form-control" id="idtiniins" placeholder="dd/mm/AAAA">
        </div>
        <div class="col-sm-5">
            <label for="lbdtterins" class="col-sm-2 control-label">Término Inscrições</label>
            <div class="col-sm-5">
              <input name="terminoInscCurso" type="date" class="form-control" id="idtterins" placeholder="dd/mm/AAAA">
            </div>
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <button name="cadastrar" type="submit" class="btn btn-primary" style="width: 25%;" id="cadastrar">Cadastrar</button>
    </div>
	</form> 
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>