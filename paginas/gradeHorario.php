<?php
require '../includes/header.html';
require '../includes/menuAluno.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Grade de Horários</h3>
  </div>
  <div class="panel-body">
	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>Horário</th>
	              <th>Segunda-Feira</th>
	              <th>Terça-Feira</th>
	              <th>Quarta-Feira</th>
	              <th>Quinta-Feira</th>
	              <th>Sexta</th>
	            </thead>
	           <tbody>
    
	            	<tr> <!--Alimenta Banco de Dados/Se já recebeu desmarca botão-->
		                <th>08:00</th>
		                <td>Português</td>
		                <td>Estrangeira</td>
		                <td>Matemática</td>
		                <td>Geografia</td>
		                <td>História</td>
		            </tr>

		            <tr> <!--Alimenta Banco de Dados/Se já recebeu desmarca botão-->
		                <th>10:00</th>
		                <td>Português</td>
		                <td>Estrangeira</td>
		                <td>Matemática</td>
		                <td>Geografia</td>
		                <td>História</td>
		            </tr>
	              
	           		<tr>
	           			<th>10:20</th>
		                <td>FisicaA</td>
		                <td>QuimicaA</td>
		                <td>Literatura</td>
		                <td>FisicaB</td>
		                <td>QuimicaB</td>
		            </tr>

		            <tr>
	           			<th>12:20</th>
		                <td>FisicaA</td>
		                <td>QuimicaA</td>
		                <td>Literatura</td>
		                <td>FisicaB</td>
		                <td>QuimicaB</td>
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