<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Fornecedor</h3>
  </div>
  <div class="panel-body">
     <div class="container">
  		<a href="cadastroFornecedor.php" class="btn btn-primary">Cadastrar</a>
  		<div class="row">    
   			<div class="col-md-12">
		        <div class="table-responsive">  
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th></th>
		              <th>Razão Social</th>
		              <th>CNPJ</th>
		              <th>Responsável</th>
		              <th>Telefone</th>
		              <th>Alterar</th>
		              <th>Excluir</th>
		            </thead>
		            <tbody>
    
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><input type="checkbox" class="checkthis" /></td>
			                <td>José ME</td>
			                <td>31.056.623/0001-00</td>
			                <td>José</td>
			                <td>(99)9999-9999</td>
			              	<td><p><a href="alterarFornecedor.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
               				 <!--<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>-->
                			<td><p><a href="deletarFornecedor.php" class="btn btn-danger btn-xs">Deletar</a></p></td>
			            </tr>
	              
	             		<tr>
			                <td><input type="checkbox" class="checkthis" /></td>
			                <td>Maria LTDA</td>
			                <td>55.255.146/0001-70</td>
			                <td>Maria</td>
			                <td>(88)8888-8888</td>
			                <td><p><a href="alterarFornecedor.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
			                <td><p><a href="deletarFornecedor.php" class="btn btn-danger btn-xs">Deletar</a></p></td>
			            </tr>
            		</tbody>       
          		  </table>     
       			</div>
      		</div>
  		</div>
  </div>
</div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>