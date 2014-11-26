<?php
require '../includes/header.html';
require '../includes/menuFuncionario.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Pedido de Material</h3>
  </div>
  <div class="panel-body">
        <a href="fazerPedido.php" class="btn btn-primary">Fazer Pedido</a>
  		<div class="row">    
   			<div class="col-md-12">
		        <div class="table-responsive">  
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th></th>
		              <th>Nº Pedido</th>
		              <th>Solicitante</th>
		              <th>Valor Total</th>
		              <th>Data do Pedido</th>
		              <th>Alterar</th>
		            </thead>
		            <tbody>
    
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><input type="checkbox" class="checkthis" /></td>
			                <td>1</td>
			              	<td>Maria</td>
			                <td>R$ 520,00</td>
			                <td>08/10/2014</td>
			              	<td><p><a href="alterarPedido.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
			            </tr>
	              
	             		<tr>
			                <td><input type="checkbox" class="checkthis" /></td>
			                <td>2</td>
			                <td>José</td>
			                <td>R$ 1.050,00</td>
			                <td>15/10/2014</td>
			                <td><p><a href="alterarPedido.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
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