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
    <?php $id=$_GET['id']; ?>
  	<form class="form-horizontal" role="form" action="bd/alt_disciplina.php?id=<?php echo $id?>" method="post" >
      <?php
        $sqld="SELECT*FROM disciplina WHERE idDisciplina='$id'";
        $resultd=mysql_fetch_array(mysql_query($sqld));
        ?>
  		<div class="form-group">
    		<label for="lbDisciplina" class="col-sm-2 control-label">Disciplina</label>
    		<div class="col-sm-4">
      			<input type="text" required class="form-control" id="iDisciplina" name="iDisciplina" placeholder="Informe o nome da disciplina" value="<?php echo "$resultd[nome]"?>">
    		</div>
    	</div>
      <div class="form-group">
        <label for="lbinteresse" class="col-sm-2 control-label">Materiais</label>
          <div class="col-sm-4">
            <select multiple class="form-control" name="materiais[]" id="materiais"> <!--infomacao vem do banco-->
              <?php
              $sql="SELECT*FROM material";
              $result=mysql_query($sql);
              while($row=mysql_fetch_array($result)){
                $sqlMaterial = "SELECT m.idMaterial as idM FROM disciplina_material as dm, material m WHERE dm.idDisciplina=".$id." and dm.idMaterial=".$row['idMaterial'];
                $mate = mysql_query($sqlMaterial) or die(mysql_error());
                if(mysql_num_rows($mate)!=0){
                  ?><option selected value=<?php echo $row['idMaterial'];?>><?php echo $row['nome']; ?></option>
                <?php } else{ ?>
                 <option value=<?php echo $row['idMaterial'];?>><?php echo $row['nome']; ?></option>
                <?php
                }
              } ?>
            </select>
          </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <button type="submit" class="btn btn-warning" style="width:30%;" id="alterar" name="alterar">Alterar</button>
    </div>
	</form>
</div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>