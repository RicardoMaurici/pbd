<?php
include('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Gerenciar Disciplinas</h3>
  </div>
  <div class="panel-body">
	<a href="cadastroDisciplina.php" class="btn btn-primary">Cadastrar</a>
  		<div class="row">    
   			<div class="col-md-12">
		        <div class="table-responsive"> 
		        <?php 	
		        	$sql = "SELECT * FROM disciplina, disciplina_material, material WHERE disciplina.idDisciplina=disciplina_material.idDisciplina";
					$busca = mysql_query($sql)or die(mysql_error());
				?> 
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th>Disciplina</th>
		              <th>Professores</th>
		              <th>Material</th>
		              <th>Alterar</th>
		              <th>Excluir</th>
		            </thead>
		            <tbody>
    				<?php while ($row = mysql_fetch_array($busca))
					{
					?>
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><?php echo $row['disciplina.nome'];?></td>
			                <td>José, Maria</td>
			                <td><?php echo$row['material'];?></td>
			              	<td><p><a href="alterarDisciplina.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
               				 <!--<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>-->
                			<td><p><a href="deletarDisciplina.php" class="btn btn-danger btn-xs">Deletar</a></p></td>
			            </tr>
	              
	             		<tr>
			                <td>Química</td>
			                <td>Maria</td>
			                <td> - </td>
			                <td><p><a href="alterarDisciplina.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
			                <td><p><a href="deletarDisciplina.php" class="btn btn-danger btn-xs">Deletar</a></p></td>
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