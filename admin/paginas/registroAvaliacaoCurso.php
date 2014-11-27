<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Avaliação do Curso</h3>
  </div>
  <div class="panel-body">
     <a href="cadastroAvaliacaoCurso.php" class="btn btn-primary">Cadastrar</a>
  		<div class="row">    
   			<div class="col-md-12">
   				<?php
   					$sql="SELECT * FROM avaliacaocurso";
   					$busca=mysql_query($sql) or die (mysql_error());
   				?>
		        <div class="table-responsive">  
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th>Nº Avaliação</th>
		              <th>Curso</th> <!--idCurso+turno+tipo+semestre/ano-->
		              <th>Expectativa</th>
		              <th>Espaço</th>
		              <th>Material</th>
		              <th>Grade Horários</th>
		              <th>Disciplinas</th>
		              <th>Atendimento</th>
		              <th>Sistema</th>
		              <th>Dt Avaliação</th>
		              <th>Alterar</th>
		              <th>Deletar</th>
		            </thead>
		            <tbody>
    				<?php while ($row = mysql_fetch_array($busca)){ ?>
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><?php echo $row['idAvaliacao']; ?></td>
			                <td><?php echo $row['idCurso']; ?></td>
			                <td><?php echo $row['expectativa']; ?></td>
			                <td><?php echo $row['espaco']; ?></td>
			                <td><?php echo $row['material']; ?></td>
			              	<td><?php echo $row['gradeHorario']; ?></td>
                			<td><?php echo $row['disciplina']; ?></td>
                			<td><?php echo $row['atendimento']; ?></td>
                			<td><?php echo $row['sistema']; ?></td>
                			<td><?php echo $row['dtAvaliacao']; ?></td>
                			<td><p><a href="alterarAvaliacaoCurso.php" disabled class="btn btn-warning btn-xs">Alterar</a></p></td>
			                <td><p><a href="deletarAvaliacaoCurso.php" disabled class="btn btn-danger btn-xs">Deletar</a></p></td>
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