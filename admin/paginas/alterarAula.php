<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Alteração de Aula</h3>
  </div>
  <div class="panel-body">
    <?php 
    $idP=$_GET['idP'];
    $idD=$_GET['idD'];
    $idH=$_GET['idH']; 
    ?>
  	<form class="form-horizontal" role="form" method="post" action="bd/alt_aula.php?idP=<?php echo $idP.'&idD='.$idD.'&idH='.$idH   ?>">
      <div class="form-group">
        <label for="lbcurso" class="col-sm-2 control-label">Professor - Disciplina</label>
          <div class="col-sm-5">
            <select class="form-control" id="profDisc" name="profDisc"> <!--infomacao vem do banco-->
              <?php
                $sql="SELECT p.nomeCompleto as nomeP, d.nome as nomeD, d.idDisciplina as idD, p.idPessoa idP FROM professor_disciplina pd INNER JOIN professor p ON pd.idPessoa=p.idPessoa INNER JOIN disciplina d ON pd.idDisciplina = d.idDisciplina";
                $result=mysql_query($sql);
                if(!$result){
                  echo '<script>alert("'.mysql_error().'")</script>';
                }
                while($row=mysql_fetch_array($result)){
                  $ids = array($row['idP'],$row['idD']);
                  $id=implode(".",$ids);
                  if($row['idP']==$idP and $row['idD']==$idD){ ?>
                    <option selected value=<?php echo $id;?>><?php echo $row['nomeP']." - ".$row['nomeD']; ?></option>
                  <?php }else{ ?>
                    <option value=<?php echo $id;?>><?php echo $row['nomeP']." - ".$row['nomeD']; ?></option>
              <?php }} ?>
            </select>
          </div>
      </div>
  		<div class="form-group">
  		<label for="lbtipo" class="col-sm-2 control-label">Horário - Dia Semana</label>
          <div class="col-sm-3">
            <select class="form-control" id="hrSemana" name="hrSemana"> <!--infomacao vem do banco-->
              <?php
                $sql="SELECT h.hrInicio as inicio, h.hrFim as fim, ds.nomeDia as nomeSem, h.idHorario as idH, ds.idDia idD FROM horario_dia hd INNER JOIN horario h ON hd.idHorario=h.idHorario INNER JOIN diasemana ds ON hd.idDia = ds.idDia order by idD asc";
                $result=mysql_query($sql);
                if(!$result){
                  echo '<script>alert("'.mysql_error().'")</script>';
                }
                while($row=mysql_fetch_array($result)){
                  if($row['idH']==$idH){ ?>
                    <option selected value=<?php echo $row['idH'];?>><?php echo $row['inicio']." - ".$row['fim'].": ".$row['nomeSem']; ?></option>
                  <?php }else{ ?>
                     <option value=<?php echo $row['idH'];?>><?php echo $row['inicio']." - ".$row['fim'].": ".$row['nomeSem']; ?></option>
              <?php }} ?>
            </select>
          </div>
		</div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <input type="submit" class="btn btn-warning" style="width: 25%;" id="alterar" name="alterar" value="Alterar">
    </div>
	</form> 
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>