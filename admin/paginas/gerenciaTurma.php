<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');

if(isset($_POST['cadastrar'])){
	$idCurso = $_POST['idCurso'];
	$idSala = $_POST['idSala'];
	$idTurma = $idCurso.'2014';
	echo $idTurma;

	for($i = 1; $i <= 10; $i++){
		if($_POST[$i] != 'Selecione aqui'){
			$p = explode(',',$_POST[$i]);
			$sql = "INSERT INTO `Turma`(`idTurma`, `idPessoa`, `idDisciplina`, `idHorario`, `idSala`, `idCurso`) VALUES 
			($idTurma,$p[0],$p[1],$p[2],$idSala,$idCurso)";
			$result=mysql_query($sql);
			if(!$result){
				echo '<meta http-equiv="refresh" content="0;url=cadastroTurma.php">';
				echo '<script>alert("'.mysql_error().'")</script>';
			}
		}
	}
}
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Gerenciar Turmas</h3>
  </div>
  <div class="panel-body">
  	<a href="cadastroTurma.php" class="btn btn-primary">Cadastrar</a>
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        	<!--Se fizer busca traz as tuplas que satisfazem a condição-->
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>ID</th>
	              <th>Sala</th>
	              <th>Curso</th>
	              <th>Alterar</th>
	              <th>Excluir</th>
	            </thead>
	           <tbody>
    
	            	<tr> <!--Alimenta Banco de Dados-->
		                <td>1</td>
		                <td>Sala - 1</td>
		                <td>1 - Extensivo - Noturno 2014</td>
		              	<td><p><a href="alterarTurma.php" class="btn btn-warning btn-xs">Alterar</a>
		              	<td><p><a href="deletarTurma.php" class="btn btn-danger btn-xs">Excluir</a>
		            </tr>
	              
	           		<tr>
	           			<td>2</td>
		                <td>Sala - 2</td>
		                <td>2 - Intensivo - Matutino 2014</td>
		              	<td><p><a href="alterarTurma.php" class="btn btn-warning btn-xs">Alterar</a>
		              	<td><p><a href="deletarTurma.php" class="btn btn-danger btn-xs">Excluir</a>
		            </tr>
           		</tbody>       
       		  </table>     
    		</div>
    	</div>
  	</div>
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>