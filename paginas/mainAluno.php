<?php
require '../includes/header.html';
require '../includes/menuAluno.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Bem vindo <?php $login?>Página principal - Cursos Abertos</h3>
  </div>
  <div class="panel-body">
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        	<!--APENAS MOSTRA CURSOS COM INSCRICOES ABERTAS-->
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
	              <th>Inscrição</th>
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
		                <!--Se ja esta inscrito desmarca botao-->
		              	<td><p><a href="cadastraInscricao.php" class="btn btn-warning btn-xs">Quero me candidatar</a></td>
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
		              	<td><p><a href="cadastraInscricao.php" class="btn btn-warning btn-xs" disabled>Quero me candidatar</a></td>
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