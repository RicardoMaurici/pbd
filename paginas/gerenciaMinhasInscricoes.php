<?php
require '../includes/header.html';
require '../includes/menuAluno.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Minhas inscrições</h3>
  </div>
  <div class="panel-body">
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive"> 
	        <h3>Período de matrícula em aberto:</h3> 
	        <h5>* Caro candidato, caso você já tenha se matrículado em algum outro curso, sua inscrição será indeferida (Você não será selecionado).</h5> 
		        	<!--Retorna cursos que alunos esta inscrito, e ativa botao matricula se estiver no periodo e selecionado-->
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>ID</th>
	              <th>Tipo</th>
	              <th>Turno</th>
	              <th>Vagas</th>
	              <th>Início Matrículas</th>
	              <th>Término Matrículas</th>
	              <th>Matrícula</th>
	            </thead>
	           <tbody>
    
	            	<tr> <!--Alimenta Banco de Dados-->
		                <td>1</td>
		                <td>Extensivo</td>
		                <td>Noturno</td>
		                <td>80</td>
		                <td>01/02/2014</td>
		                <td>20/02/2014</td>
		                <!--Se ja esta matriculado desmarca botao-->
		              	<td><p><a href="pedidoMatricula.php" class="btn btn-warning btn-xs">Fazer minha matrícula</a></td>
		            </tr>
	              
	           		<tr>
	           			<td>2</td>
		                <td>Intensivo</td>
		                <td>Matutino</td>
		                <td>75</td>
		                <td>01/06/2014</td>
		                <td>20/06/2014</td>
		              	<td><p><a href="pedidoMatricula.php" class="btn btn-warning btn-xs" disabled>Fazer minha matrícula</a></td>
		            </tr>
           		</tbody>       
       		  </table>     
    		</div>
    		<hr />
    		<div class="table-responsive"> 
	        <h3>Período de matrícula encerrado:</h3> 
		        	<!--Retorna cursos que alunos esta inscrito, e ativa botao matricula se estiver no periodo e selecionado-->
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
	            </thead>
	           <tbody>
    
	            	<tr> <!--Alimenta Banco de Dados-->
		                <td>1</td>
		                <td>Extensivo</td>
		                <td>Noturno</td>
		                <td>80</td>
		                <td>01/02/2014</td>
		                <td>20/02/2014</td>
		               	<td>01/03/2014</td>
		                <td>20/03/2014</td>
		            </tr>
	              
	           		<tr>
	           			<td>2</td>
		                <td>Intensivo</td>
		                <td>Matutino</td>
		                <td>75</td>
		                <td>01/06/2014</td>
		                <td>20/06/2014</td>
		              	<td>01/07/2014</td>
		                <td>20/06/2014</td>
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