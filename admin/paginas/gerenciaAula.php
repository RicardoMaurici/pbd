<?php
include('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Gerenciar Aula</h3>
  </div>
  <div class="panel-body">
	<a href="cadastroAula.php" class="btn btn-primary">Cadastrar</a>
  		<div class="row">    
   			<div class="col-md-12">
		        <div class="table-responsive"> 
		        <?php 	
		        	$sql = "SELECT * FROM aula";
					$busca = mysql_query($sql) or die(mysql_error());
				?> 
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th>Disciplina</th>
		              <th>Professores</th>
		              <th>Horário</th>
		              <th>Dia Semana</th>
		              <th>Alterar</th>
		              <th>Excluir</th>
		            </thead>
		            <tbody>
		            	
    				<?php while ($row = mysql_fetch_array($busca))
					{
						//Pega nome professor
						$sqlProfessor = "SELECT p.nomeCompleto as nomeP FROM professor p WHERE p.idPessoa=".$row['idPessoa'];
						$result = mysql_query($sqlProfessor);
						if(!$result){
							echo '<meta http-equiv="refresh" content="0;url=../gerenciaAula.php">';
							echo '<script>alert("'.mysql_error().'")</script>';
						}else{
							$prof=mysql_fetch_array($result);
						}

						//Pega nome disciplina
						$sqlDisciplina = "SELECT d.nome as nomeD FROM disciplina d WHERE d.idDisciplina=".$row['idDisciplina'];
						$result = mysql_query($sqlDisciplina);
						if(!$result){
							echo '<meta http-equiv="refresh" content="0;url=../gerenciaAula.php">';
							echo '<script>alert("'.mysql_error().'")</script>';
						}else{
							$disc=mysql_fetch_array($result);
						}

						//Pega horarios e dia Semana
						$sqlhorario = "SELECT DATE_FORMAT(h.hrInicio,'%H:%i') as inicio, DATE_FORMAT(h.hrFim,'%H:%i') as fim, ds.nomeDia as semana 
						FROM horario h INNER JOIN  horario_dia hd ON h.idHorario = hd.idHorario INNER JOIN diasemana ds 
						ON hd.idDia = ds.idDia 
						WHERE h.idHorario=".$row['idHorario'];
						$result = mysql_query($sqlhorario);
						if(!$result){
							echo '<meta http-equiv="refresh" content="0;url=../gerenciaAula.php">';
							echo '<script>alert("'.mysql_error().'")</script>';
						}else{
							$horario=mysql_fetch_array($result);
							$inicio=$horario[0];
							$fim=$horario[1];
							$semana=$horario[2];

						}
					?>
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><?php echo $disc['nomeD'];?></td>
			                <td><?php echo $prof['nomeP']; ?></td>
			                <td><?php echo $inicio." - ".$fim; ?></td>
			                <td><?php echo $semana; ?></td>
			              	<td><p><?php echo '<a class="btn btn-warning btn-xs" href="alterarAula.php?idP='.$row['idPessoa'].'&idD='.$row['idDisciplina'].'&idH='.$row['idHorario'].'">Alterar</a>';?></p></td>
               				<td><p><?php echo '<a href="deletarAula.php?idP='.$row['idPessoa'].'&idD='.$row['idDisciplina'].'&idH='.$row['idHorario'].'" class="btn btn-danger btn-xs">Deletar</a>';?></p></td>
			            </tr>
			            <?php } ?>
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