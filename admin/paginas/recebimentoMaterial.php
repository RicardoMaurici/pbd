<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Recebimento de Material</h3>
  </div>
  <div class="panel-body">
  <div class="container">
  		<a href="cadastroMaterial.php" class="btn btn-primary">Cadastrar</a>
  		<div class="row">    
   			<div class="col-md-12">
		        <div class="table-responsive">  
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th>Cod Material</th>
		              <th>Material</th>
		              <th>Qtd Estoque</th>
		              <th>Alterar</th>
		              <th>Excluir</th>
		            </thead>
		            <tbody>
    
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td>1</td>
			                <td>Lápis</td>
			                <td>0</td>
			              	<td><p><button id="alteraMat" name="alteraMat" class="btn btn-warning btn-xs" data-title="altera" data-toggle="modal" data-target="#altera" data-placement="top" rel="tooltip">Alterar</button></p></td>
               				 <!--<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>-->
                			<td><p><a class="btn btn-danger btn-xs">Deletar</a></p></td>
			            </tr>
	              
	             		<tr>
			                <td>2</td>
			                <td>Caderno</td>
			                <td>3</td>
			                <td><p><button id="alteraMat" name="alteraMat" class="btn btn-warning btn-xs" data-title="altera" data-toggle="modal" data-target="#altera" data-placement="top" rel="tooltip">Alterar</button></p></td>
               				<td><p><a class="btn btn-danger btn-xs">Deletar</a></p></td>
			            </tr>
            		</tbody>       
          		  </table>     
       			</div>
      		</div>
  		</div>
  </div>
  </div>
</div>

<div class="modal fade" id="altera" tabindex="-1" role="dialog" aria-labelledby="altera" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Alterando Quantidade Estoque</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="lbnovaqtd" class="col-sm-6 control-label">Nova Quantidade:</label>
              <div class="col-sm-2">
				<input type="text" class="form-control" id="inovaqtd">
              </div>  
        </div>
      </form>
      </div>
      <div class="modal-footer ">
      	<a href="recebimentoMaterial.php" class="btn btn-warning">Alterar</a>
      </div>
    </div>
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>