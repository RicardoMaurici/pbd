<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');
//Pagina principal após o login

if(isset($_GET['curso'])){

  $sql="SELECT * FROM Curso where idCurso=".$_GET['curso'];
  $result=mysql_query($sql);
  $row=mysql_fetch_array($result);
}
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Alteração de Curso</h3>
  </div>
<div class="panel-body">
  	<form class="form-horizontal" method="post"role="form" action="gerenciaCurso.php">
      <?php echo '<input type="hidden" name="idCurso" value='.$row['idCurso'].'>'; ?>
  		<div class="form-group">
  		<label for="lbtipo" class="col-sm-2 control-label">Tipo</label>
          <div class="col-sm-2">
            <select name="tipoCurso" class="form-control" id="sltipo"> <!--infomacao vem do banco-->
              <?php echo '<option selected>'.$row['tipo'].'</option>'; ?>
              <option>Extensivo</option> 
              <option>Semi-Extensivo</option>
              <option>Intensivo</option>
            </select>
          </div>
          <div class="col-sm-4">
            <label for="lbturno" class="col-sm-2 control-label">Turno</label>
            <div class="col-sm-7">
              <select  name="turnoCurso" class="form-control" id="slturno"> <!--infomacao vem do banco-->
                <?php echo '<option selected>'.$row['turno'].'</option>'; ?>
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
            <input  name="vagasCurso" type="number" class="form-control" id="ivagas" value="<?php echo $row['vagas']; ?>
" placeholder="Nº vagas">
        </div>
      </div>
   
      <div class="form-group">
        <label for="lbdtiniins" class="col-sm-2 control-label">Início Inscrições</label>
        <div class="col-sm-2">
            <input name="inicioInscCurso" type="date" class="form-control" id="idtiniins" value="<?php echo $row['dtInicioInscricao']; ?>" placeholder="Início Inscrições">
        </div>
        <div class="col-sm-5">
            <label for="lbdtterins" class="col-sm-2 control-label">Término Inscrições</label>
            <div class="col-sm-5">
              <input name="terminoInscCurso" type="date" class="form-control" id="idtterins" value="<?php echo $row['dtFimInscricao']; ?>
" placeholder="Término Inscrições">
            </div>
        </div>
      </div>
         <div class="form-group">
        <label for="lbdtinimat" class="col-sm-2 control-label">Início Matrícula</label>
        <div class="col-sm-2">
            <input name="inicioMatCurso" type="date" class="form-control" id="idtinimat" value="<?php echo $row['dtInicioMatricula']; ?>" placeholder="Início Matrícula">
        </div>
        <div class="col-sm-5">
            <label for="lbdttermat" class="col-sm-2 control-label">Término Matrícula</label>
            <div class="col-sm-5">
              <input name="terminoMatCurso" type="date" class="form-control" id="idttermat" value="<?php echo $row['dtFimMatricula']; ?>" placeholder="Término Matrícula">
            </div>
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <button name="alterar" type="submit" class="btn btn-warning" style="width: 25%;" id="cadastrar">Alterar</button>
    </div>
	</form> 
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>