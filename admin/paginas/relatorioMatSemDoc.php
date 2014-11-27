<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Relatório Alunos matriculados que ainda não entregaram todos documentos</h3>
  </div>
    <div class="panel-body">
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">
		       	<?php   
              		$sql = "SELECT * FROM alunos_matriculados_sem_doc";
              		$busca = mysql_query($sql) or die(mysql_error());
        		?> 
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>Matricula</th>
	              <th>Nome Aluno</th>
	              <th>CPF</th>
	              <th>Telefone</th>
	              <th>Telefone</th>
	              <th>E-mail</th>
	              <th>Curso</th>
	            </thead>
	           <tbody>
    			<?php while ($row = mysql_fetch_array($busca)){ ?>
	            	<tr>
		                <td><?php echo $row['Matricula'];?></td>
		                <td><?php echo $row['Nome'];?></td>
		                <td><?php echo $row['CPF'];?></td>
		                 <td><?php echo $row['telefone1'];?></td>
		                  <td><?php echo $row['telefone2'];?></td>
		                <td><?php echo $row['email'];?></td>
		                <td><?php echo $row['Curso']." - ".$row['tipo']." - ".$row['turno'];?></td>
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