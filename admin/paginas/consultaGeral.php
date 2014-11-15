<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Consulta Geral</h3>
  </div>
  <div class="panel-body">
	<form class="form-inline" role="form">
     	<div class="form-group">
     		<input type="text" class="form-control" id="ibuscacurso" placeholder="Insira o idCurso desejado">
  			<a href="consultaGeral.php" class="btn btn-primary">Buscar</a>
  			<input type="text" class="form-control" id="ibuscamatricula" placeholder="Insira a matrícula desejada">
  			<a href="recebimentoDocumentoAluno.php" class="btn btn-primary">Buscar</a>
  			<input type="text" class="form-control" id="ibuscainscricao" placeholder="Insira a inscrição desejada">
  			<a href="recebimentoDocumentoAluno.php" class="btn btn-primary">Buscar</a>
  		</div>
  	</form>
  	<hr />
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        	<!--Se fizer busca traz as tuplas que satisfazem a condição-->
		        	<!--Os documentos são iguais para todos os tipos de curso-->
		        	<!--Não precisa Incluir, pois todos alunos precisam entregar documentos-->
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>Inscrição</th>
	              <th>Matrícula</th>
	              <th>Nome Aluno</th>
	              <th>CPF</th>
	              <th>Curso</th>
	              <th>Material</th><!--Todos materias e documentos entregues-->
	              <th>Documento</th>
	              <th>Visualizar</th>
	              <th>Alterar</th>
	              <th>Excluir</th>
	            </thead>
	           <tbody>
    
	            	<tr> <!--Alimenta Banco de Dados/Se já recebeu desmarca botão-->
		                <td>111</td>
		                <td>111</td>
		                <td>Joaquim</td>
		                <td>111.111.111-11</td>
		                <td>1 - Extensivo - Noturno 2014</td>
		                <td><input type="checkbox" class="checkthis" disabled="disabled" checked="checked"/></td>
		                <td><input type="checkbox" class="checkthis" disabled="disabled" /></td>
		              	<td><p><a href="detalheCadastroAluno.php" class="btn btn-primary btn-xs">Cadastro Aluno</a>
		              	<td><p><a href="alterarCadastroAluno.php" class="btn btn-warning btn-xs">Alterar</a>
		              	<td><p><a href="deletarCadastroAluno.php" class="btn btn-danger btn-xs">Excluir</a>
		            </tr>
	              
	           		<tr>
	           			<td>222</td>
		                <td>222</td>
		                <td>Joaquina</td>
		                <td>222.222.222-22</td>
		                <td>2 - Intensivo - Matutino 2014</td>
		                <td><input type="checkbox" class="checkthis" disabled="disabled" /></td>
		                <td><input type="checkbox" class="checkthis" disabled="disabled" checked="checked"/></td>
		                <td><p><a href="detalheCadastroAluno.php" class="btn btn-primary btn-xs">Cadastro Aluno</a>
		              	<td><p><a href="alterarCadastroAluno.php" class="btn btn-warning btn-xs">Alterar</a>
		              	<td><p><a href="deletarCadastroAluno.php" class="btn btn-danger btn-xs">Excluir</a>
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