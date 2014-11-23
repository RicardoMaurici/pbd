<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1" >
  <div class="panel-heading">
    <h3 class="panel-title">Alteração de Disciplina</h3>
  </div>
  <div class="panel-body"style="margin-left:300px;" >
  	<form class="form-horizontal" role="form" action="alt_disciplina.php" method="post" >
      <?php
        $id = $_GET['id'];
        $sql="SELECT*FROM disciplina WHERE idDisciplina='$id'";
        $result=mysql_fetch_array(mysql_query($sql));
        ?>
  		<div class="form-group">
    		<label for="lbDisciplina" class="col-sm-2 control-label">Disciplina</label>
    		<div class="col-sm-4">
      			<input type="text" class="form-control" id="iDisciplina" placeholder="Informe o nome da disciplina" value="<?php echo "$result[nome]"?>">
    		</div>
    	</div>
      <div class="form-group">
        <label for="lbinteresse" class="col-sm-2 control-label">Materiais</label>
          <div class="col-sm-4">
            <select multiple class="form-control"> <!--infomacao vem do banco-->
              <option>Apostila Biologia</option>
              <option>Apostila Inglês</option>
              <option>Apostila Matemática</option>
              <option>Apostila Português</option> 
              <option>Caderno</option>
              <option>Lápis</option>
            </select>
          </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <button type="submit" href="gerenciaDisciplina.php" class="btn btn-warning" style="width:30%;">Alterar</button>
        <a href="gerenciaDisciplina.php" class="btn btn-warning" style="width:30%;">Alterar</a>
    </div>
	</form>
</div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>