<?php
include('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Disciplina</h3>
  </div>
  <div class="panel-body" style="margin-left:300px;">
  	<form action="../bd/cad_disciplina.php"class="form-horizontal" role="form" method="post">
  		<div class="form-group">
    		<label for="lbDisciplina" class="col-sm-2 control-label">Disciplina</label>
    		<div class="col-sm-4">
      			<input type="text" class="form-control" required id="iDisciplina" name="iDisciplina" placeholder="Informe o nome da disciplina">
    		</div>
    	</div>
      <div class="form-group">
        <label for="lbmateriais" class="col-sm-2 control-label">Materiais</label>
          <div class="col-sm-4">
            <select multiple class="form-control" name="materiais" id="materiais"> <!--infomacao vem do banco-->
              <?php
              $sql="SELECT*FROM material";
              $result=mysql_query($sql);
              while($row=mysql_fetch_array($result)){
              ?>
              <option value=<?php echo $row['idMaterial'];?>><?php echo $row['nome']; ?></option>
              <?php } ?>
            </select>
          </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <input name="cadastrar" type="submit" class="btn btn-primary" style="width:30%;" id="cadastrar" value="Cadastrar">
    </div>
	</form>
</div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>