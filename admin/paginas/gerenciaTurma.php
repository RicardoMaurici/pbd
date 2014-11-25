<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');

if(isset($_POST['cadastrar'])){
	$idCurso = $_POST['idCurso'];
	$idSala = $_POST['idSala'];
	$idTurma = $idCurso.'2014';

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
    				
<?php
    		$sql="SELECT * FROM Turma";
            $result=mysql_query($sql);
            while($row=mysql_fetch_array($result)){
				echo '<tr>';
				echo '<td>'.$row['idCurso'].'</td>';
				echo '<td>Sala '. $row['idSala'].'</td>';
				$q = "SELECT concat(`tipo`,' - ',`turno`,' ',year(`dtInicioInscricao`)) c FROM `Curso` where idCurso = {$row['idCurso']}";
				$r = mysql_fetch_array(mysql_query($q));
				echo '<td>'.$r['c'].'</td>';
		        echo '<td><p><a href="alterarTurma.php?turma='.$row['idTurma'].'&pessoa='.$row['idPessoa'].'&disciplina='.$row['idDisciplina'].'&horario='.$row['idHorario'].'" class="btn btn-warning btn-xs">Alterar</a>';
		        echo '<td><p><a href="deletarTurma.php?turma='.$row['idTurma'].'&pessoa='.$row['idPessoa'].'&disciplina='.$row['idDisciplina'].'&horario='.$row['idHorario'].'" class="btn btn-danger btn-xs">Excluir</a>';
		        echo '</tr>'; 
		    }         
?>			              	 
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