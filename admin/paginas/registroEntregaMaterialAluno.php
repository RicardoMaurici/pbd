<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Entrega de Material ao Aluno</h3>
  </div>
  <div class="panel-body">
    <form class="form-inline" role="form">
     	<div class="form-group">
     		<input type="text" class="form-control" id="ibuscaCurso" placeholder="Insira o idCurso desejado">
  			<a href="registroEntregaMaterialAluno.php" class="btn btn-primary">Buscar</a>
  		</div>
  	</form>
  	<hr />
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        	<!--Se fizer busca traz todos com o respectivo ID informado-->
		        	<!--Mostra Apenas os alunos que ainda não receberam Material-->
		        	<!--Mostra apenas cursos que precisam receber material-->
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>Recebido</th>
	              <th>Matrícula</th>
	              <th>Nome Aluno</th>
	              <th>CPF</th>
	              <th>Curso</th>
	              <th>Entregue</th>
	            </thead>
	           <tbody>
    
	            	<tr> <!--Alimenta Banco de Dados/Se já recebeu desmarca botão-->
		                <td><input type="checkbox" class="checkthis" disabled="disabled" checked="checked" /></td>
		                <td>111</td>
		                <td>Joaquim</td>
		                <td>111.111.111-11</td>
		                <td>1 - Noturno - Intensivo</td>
		              	<td><p><a href="registroEntregaMaterialAluno.php" class="btn btn-warning btn-xs" disabled="disabled">Sim</a></p></td>
		            </tr>
	              
	           		<tr>
		                <td><input type="checkbox" class="checkthis" disabled="disabled" /></td>
		                <td>222</td>
		                <td>Joaquina</td>
		                <td>222.222.222-22</td>
		                <td>2 - Matutino - Extensivo</td>
		                <td><p><a href="registroEntregaMaterialAluno.php" class="btn btn-warning btn-xs">Sim</a></p></td>
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