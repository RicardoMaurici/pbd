<?php
require '../includes/header.html';
require '../includes/menuProfessor.php';
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
		            </thead>
		            <tbody>
    
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td>1</td>
			                <td>1 - Extensivo - Noturno - 2014/2</td>
			                <td>5</td>
			                <td>6</td>
			                <td>7</td>
			              	<td>8</td>
                			<td>9</td>
                			<td>10</td>
                			<td>0</td>
                			<td>07/11/2014</td>
			            </tr>
	              
	             		<tr>
			                <td>2</td>
			                <td>2 - Intensivo - Matutino - 2014</td>
			                <td>5</td>
			                <td>6</td>
			                <td>7</td>
			              	<td>8</td>
                			<td>9</td>
                			<td>10</td>
                			<td>0</td>
                			<td>08/11/2014</td>
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