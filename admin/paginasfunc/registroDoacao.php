<?php
require '../includes/header.html';
require '../includes/menuFuncionario.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Doação/Contrato</h3>
  </div>
  <div class="panel-body">
       <a href="cadastroDoacao.php" class="btn btn-primary">Cadastrar</a>
  		<div class="row">    
   			<div class="col-md-12">
		        <div class="table-responsive">  
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th></th>
		              <th>Nº Contrato</th>
		              <th>Doador</th>
		              <th>Funcionário</th>
		              <th>Valor</th>
		              <th>Alterar</th>
		              <th>Termo</th>
		            </thead>
		            <tbody>
    
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><input type="checkbox" class="checkthis" /></td>
			                <td>1</td>
			                <td>João ME</td>
			                <td>Maria</td>
			                <td>R$ 10.000,00</td>
			              	<td><p><a href="alterarContrato.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
                			<td><p><a href="geraContrato.php" class="btn btn-primary btn-xs">Contrato</a></p></td>
			            </tr>
	              
	             		<tr>
			                <td><input type="checkbox" class="checkthis" /></td>
			                <td>2</td>
			                <td>Maria LTDA</td>
			                <td>José</td>
			                <td>R$ 15.000,00</td>
			                <td><p><a href="alterarContrato.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
			                <td><p><a href="geraContrato.php" class="btn btn-primary btn-xs">Contrato</a></p></td>
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