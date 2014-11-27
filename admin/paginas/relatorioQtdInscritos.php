<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Gerenciar Cursos</h3>
  </div>
  <div class="panel-body">
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        	<!--Se fizer busca traz as tuplas que satisfazem a condição-->
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>ID</th>
	              <th>Tipo</th>
	              <th>Turno</th>
	              <th>Vagas</th>
	              <th>Início Matrículas</th>
	              <th>Término Matrículas</th>
	              <th>Início Inscrições</th>
	              <th>Término Inscrições</th>
	              <th>Quantidade de Inscritos</th>
	            </thead>
	           <tbody>
				<?php
    				$sql="SELECT * FROM qtdinscritos_curso qc JOIN curso c ON c.idCurso=qc.idCurso";
              		$result=mysql_query($sql) or die (mysql_error());
              		while($row=mysql_fetch_array($result)){
				?>				
              	<tr> <!--Alimenta Banco de Dados-->
		                <td><?php echo $row['idCurso']; ?></td>
		                <td><?php echo $row['tipo']; ?></td>
		                <td><?php echo $row['turno']; ?></td>
		                <td><?php echo $row['vagas']; ?></td> 
		                <td><?php echo $row['dtInicioMatricula']; ?></td>
		                <td><?php echo $row['dtFimMatricula']; ?></td>
		                <td><?php echo $row['dtInicioInscricao']; ?></td>
		                <td><?php echo $row['dtFimInscricao']; ?></td>
		                <td><?php echo $row['qtdInscritos']; ?></td>
		            </tr>
              
          		
				<?php 
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