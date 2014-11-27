<?php
include ('../conecta_aluno.php');
require '../includes/header.html';
require '../includes/menuAluno.php';

$idAluno = $_SESSION['idAluno'];

$sql = "SELECT idCurso FROM Inscricao i JOIN Matricula m ON i.idMatricula = m.idMatricula AND m.matRecebido = 1 WHERE i.idPessoa = $idAluno";
$busca = mysql_query($sql) or die(mysql_error());

$idCurso = mysql_fetch_row($busca);

$query = "SELECT * FROM grade_aulas_aluno where idCurso = $idCurso[0]";
$search = mysql_query($query);


?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Grade de Horários</h3>
  </div>
  <div class="panel-body">
	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive"> 
	        <?php
	        if(!$search){
				?><h2 style="text-align:center;">Ainda não há Grade de Horários disponível</h2><?php
			}?> 
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>Turma</th>
	              <th>Professor</th>
	              <th>Disciplina</th>
	              <th>Ínicio</th>
	              <th>Término</th>
	              <th>Sala</th>
	              <th>Dia</th>
	             </thead>
	           <tbody>
    
	            	<tr> 
<?php
				while ($row = mysql_fetch_array($search)){
					?> </tr> <?php
		        	echo '<th>'.$row['idTurma'].'</th>';
		            echo '<th>'.$row['nomeCompleto'].'</th>';
		            echo '<th>'.$row['nome'].'</th>';
		            echo '<th>'.$row['hrInicio'].'</th>';
		            echo '<th>'.$row['hrFim'].'</th>';
		            echo '<th>'.$row['idSala'].'</th>';
		            echo '<th>'.$row['nomeDia'].'</th>';
		        ?> </tr>
		        <?php }   

?>
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