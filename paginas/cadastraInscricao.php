<?php
include ('../conecta.php');
require '../includes/header.html';
require '../includes/menuAluno.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Inscrição</h3>
  </div>
  <div class="panel-body">
    <?php $id=$_GET['id']; ?>
  	<form class="form-horizontal" role="form" method="post" action="bd/cad_inscricao.php?id=<?php echo $id?>">
  		<div class="form-group">
    		<label for="lbnomePai" class="col-sm-2 control-label">Nome do Pai</label>
    		<div class="col-sm-4">
      			<input type="text" class="form-control" id="inomePai" name="inomePai" placeholder="Informe o nome do Pai">
    		</div>
    	</div>
      <div class="form-group">
        <label for="lbnomeMae" class="col-sm-2 control-label">Nome do Mãe</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="inomeMae" name="inomeMae" placeholder="Informe o nome da Mãe">
        </div>
      </div>
    	<div class="form-group">
    		<label for="lbtrabalha" class="col-sm-2 control-label"> Trabalha? </label>
        <div class="col-sm-2">
           <select class="form-control" id="sltrabalha" name="sltrabalha">
              <option value=0>Sim</option>
              <option value=1>Não</option>
            </select>
        </div>
        <div class="col-sm-3">
          <label for="lbfilhos" class="col-sm-3 control-label">Filhos</label>
          <div class="col-sm-5">
              <input type="number" class="form-control" id="filhos" name="filhos" >
          </div>
        </div>
      </div>  
      <div class="form-group">
        <label for="lbtel1" class="col-sm-2 control-label">Nacionalidade</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="nacionalidade" name="nacionalidade" placeholder="Nacionalidade">
        </div>
        <div class="col-sm-3">
          <label for="lbestadocivil" class="col-sm-3 control-label">Estado Civil</label>
          <div class="col-sm-8">
            <select class="form-control" id="slestadocivil" name="slestadocivil">
              <?php
                $sql="SELECT*FROM estadocivil WHERE idEstadoCivil";
                $result=mysql_query($sql);
                while($row=mysql_fetch_array($result)){
              ?>
                <option value=<?php echo $row['idEstadoCivil'];?>><?php echo $row['tipoEstado']; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbrenda" class="col-sm-2 control-label">Renda Familiar</label>
          <div class="col-sm-4">
            <select class="form-control" id="slrenda" name="slrenda"> <!--infomacao vem do banco-->
              <?php
                $sql="SELECT*FROM faixarenda";
                $result=mysql_query($sql);
                while($row=mysql_fetch_array($result)){
              ?>
                <option value=<?php echo $row['idRenda'];?>><?php echo "De R$ ".$row['valorMin']." a R$ ".$row['valorMax']; ?></option>
              <?php } ?>
            </select>
          </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
      <input type="submit" class="btn btn-primary" style="width: 25%;" id="cadastrar" name="cadastrar" value="Concluir Inscrição">
      
    </div>
	</form>
  </div>
  </div>  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>