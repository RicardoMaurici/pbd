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
	<form class="form-inline" role="form">
     	<div class="form-group">
     		<input type="text" class="form-control" id="ibuscacurso" placeholder="Insira o idCurso desejado">
  			<a href="gerenciaCurso.php" class="btn btn-primary">Buscar</a>
  			<a href="gerenciaCurso.php" class="btn btn-primary">Buscar Cursos com Matrículas Aberta</a>
  			<a href="gerenciaCurso.php" class="btn btn-primary">Buscar Cursos com Inscrições Aberta</a>
  		</div>
  	</form>
  	<hr />
  	<a href="cadastroCurso.php" class="btn btn-primary">Cadastrar</a>
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
	              <th>Alterar</th>
	              <th>Excluir</th>
	            </thead>
	           <tbody>
<?php
    $sql="SELECT * FROM Curso";
              $result=mysql_query($sql);
              while($row=mysql_fetch_array($result)){
?>
              	<tr> <!--Alimenta Banco de Dados-->
		                <td><?php echo $row['idCurso']; ?></td>
		                <td><?php echo $row['turno']; ?></td>
		                <td><?php echo $row['vagas']; ?></td>
		                <td><?php echo $row['tipo']; ?></td>
		                <td><?php echo $row['tdInicioMatricula']; ?></td>
		                <td><?php echo $row['dtFimMatricula']; ?></td>
		                <td><?php echo $row['dtInicioInscricao']; ?></td>
		                <td><?php echo $row['dtFimInscricao']; ?></td>
		              	<td><p><a href="alterarCurso.php?curso=<?php echo $row['idCurso']; ?>" class="btn btn-warning btn-xs">Alterar</a>
		              	<td><p><a href="deletarCurso.php?curso=<?php echo $row['idCurso']; ?>" class="btn btn-danger btn-xs">Excluir</a>
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