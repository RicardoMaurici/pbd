<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Aula</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="lbcurso" class="col-sm-2 control-label">Professor - Disciplina</label>
          <div class="col-sm-5">
            <select class="form-control" id="slcurso"> <!--infomacao vem do banco-->
              <?php
                $sql="SELECT p.nomeCompleto as nomeP, d.nome as nomeD, d.idDisciplina as idD, p.idPessoa idP FROM professor_disciplina pd INNER JOIN professor p ON pd.idPessoa=p.idPessoa INNER JOIN disciplina d ON pd.idDisciplina = d.idDisciplina";
                $result=mysql_query($sql);
                if(!$result){
                  echo '<script>alert("'.mysql_error().'")</script>';
                }
                while($row=mysql_fetch_array($result)){
                  $ids[0]=$row['idP'];
                  $ids[1]=$row['idD'];
              ?>
                <option value=<?php echo $ids;?>><?php echo $row['nomeP']." - ".$row['nomeD']; ?></option>
              <?php } ?>
            </select>
        </div>
      </div>
  		<div class="form-group">
  		<label for="lbtipo" class="col-sm-2 control-label">Horário - Dia Semana</label>
          <div class="col-sm-2">
            <select class="form-control" id="sltipo"> <!--infomacao vem do banco-->
              <option>Sala - 1</option> 
              <option>Sala - 2</option>
              <option>Sala - 3</option>
            </select>
          </div>
		</div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <a href="gerenciaAula.php" class="btn btn-primary" style="width: 25%;" id="cadastrar">Cadastrar</a>
    </div>
	</form> 
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>