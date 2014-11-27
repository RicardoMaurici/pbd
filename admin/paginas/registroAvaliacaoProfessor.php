<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Avaliação do Professor</h3>
  </div>
  <div class="panel-body">
  	<a href="cadastroAvaliacaoProfessor.php" class="btn btn-primary">Cadastrar</a>
  		<div class="row">    
   			<div class="col-md-12">
   				<?php
   					$sql="SELECT * FROM avaliacaoprofessor";
   					$busca=mysql_query($sql) or die (mysql_error());
   				?>
		        <div class="table-responsive">  
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th>Nº Avaliação</th>
		              <th>Professor</th>
		              <th>Expectativa</th>
		              <th>Planejamento</th>
		              <th>Atendimento</th>
		              <th>Transmissão</th>
		              <th>Pontualidade</th>
		              <th>Apresentação</th>
		              <th>Dt Avaliação</th>
		              <th>Alterar</th>
		              <th>Deletar</th>
		            </thead>
		            <tbody>
    				<?php while ($row = mysql_fetch_array($busca)){ ?>
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><?php echo $row['idAvaliacao']; ?></td>
			                <td><?php echo $row['idPessoa']; ?></td>
			                <td><?php echo $row['expectativa']; ?></td>
			                <td><?php echo $row['planejamento']; ?></td>
			                <td><?php echo $row['atendimento']; ?></td>
			              	<td><?php echo $row['transmissao']; ?></td>
                			<td><?php echo $row['pontualidade']; ?></td>
                			<td><?php echo $row['apresentacao']; ?></td>
                			<td><?php echo $row['dtAvaliacao']; ?></td>
                			<td><p><a href="alterarAvaliacaoProfessor.php" disabled class="btn btn-warning btn-xs">Alterar</a></p></td>
			                <td><p><a href="deletarAvaliacaoProfessor.php" disabled class="btn btn-danger btn-xs">Deletar</a></p></td>
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