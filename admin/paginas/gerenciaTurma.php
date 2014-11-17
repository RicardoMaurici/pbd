<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Gerenciar Turmas</h3>
  </div>
  <div class="panel-body">
	<form class="form-inline" role="form">
     	<div class="form-group">
     		<input type="text" class="form-control" id="ibuscacurso" placeholder="Insira o idCurso desejado">
  			<a href="gerenciaTurma.php" class="btn btn-primary">Buscar</a>
  			<input type="text" class="form-control" id="ibuscaturma" placeholder="Insira o idTurma desejado">
  			<a href="gerenciaTurma.php" class="btn btn-primary">Buscar</a>
  		</div>
  	</form>
  	<hr />
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
    
	            	<tr> <!--Alimenta Banco de Dados-->
		                <td>1</td>
		                <td>Sala - 1</td>
		                <td>1 - Extensivo - Noturno 2014</td>
		              	<td><p><a href="alterarTurma.php" class="btn btn-warning btn-xs">Alterar</a>
		              	<td><p><a href="deletarTurma.php" class="btn btn-danger btn-xs">Excluir</a>
		            </tr>
	              
	           		<tr>
	           			<td>2</td>
		                <td>Sala - 2</td>
		                <td>2 - Intensivo - Matutino 2014</td>
		              	<td><p><a href="alterarTurma.php" class="btn btn-warning btn-xs">Alterar</a>
		              	<td><p><a href="deletarTurma.php" class="btn btn-danger btn-xs">Excluir</a>
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