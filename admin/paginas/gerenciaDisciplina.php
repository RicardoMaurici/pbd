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
		        	$sql = "SELECT d.nome as nomeD, d.idDisciplina as idD FROM disciplina as d";
					$busca = mysql_query($sql) or die(mysql_error());
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
		            	<!--Adiciona a relacao de disciplinas-->
    				<?php while ($row = mysql_fetch_array($busca))
					{
						//Para cada disciplina busca os materiais relacionados
						$sqlMaterial = "SELECT m.nome as nomeM FROM disciplina_material as dm, material m WHERE dm.idDisciplina=".$row['idD']." and dm.idMaterial=m.idMaterial";
						$result = mysql_query($sqlMaterial) or die(mysql_error());
						$materiais="";
						while ($mat = mysql_fetch_array($result)){
							$materiais.=$mat['nomeM']."; ";
						}
					?>
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><?php echo $row['nomeD'];?></td>
			                <td>José, Maria</td>
			                <td><?php echo$materiais;?></td>
			              	<td><p><?php echo '<a class="btn btn-warning btn-xs" href="alterarDisciplina.php?id='.$row['idD'].'">Alterar</a>';?></p></td>
               				 <!--<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>
               				 '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';-->
                			<td><p><?php echo '<a href="deletarDisciplina.php?id='.$row['idD'].'" class="btn btn-danger btn-xs">Deletar</a>';?></p></td>
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