<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Selecionar Alunos para o Curso</h3>
  </div>
    <div class="panel-body">
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        	<!--Se fizer busca traz as tuplas que satisfazem a condição-->
		        	<!--Os documentos são iguais para todos os tipos de curso-->
		        	<!--Não precisa Incluir, pois todos alunos precisam entregar documentos-->
		       	<?php   
              		$sql = "SELECT * FROM alunos_inscritos";
              		$busca = mysql_query($sql) or die(mysql_error());
        		?> 
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>Inscrição</th>
	              <th>Nome Aluno</th>
	              <th>CPF</th>
	              <th>E-mail</th>
	              <th>Curso</th>
	              <th>Selecionado</th>
	              <th>Selecionar</th>
	            </thead>
	           <tbody>
    			<?php while ($row = mysql_fetch_array($busca)){ ?>
	            	<tr> <!--Alimenta Banco de Dados/Se já selecionado desmarca botão-->
		                <td><?php echo $row['idInscricao'];?></td>
		                <td><?php echo $row['nomeCompleto'];?></td>
		                <td><?php echo $row['cpf'];?></td>
		                <td><?php echo $row['email'];?></td>
		                <td><?php echo $row['idCurso']." - ".$row['tipo']." - ".$row['turno'];?></td>
		                <?php if($row['selecionado']<>1){ ?>
		                	<td><input type="checkbox" class="checkthis" disabled="disabled"/></td>
		                	<td><p><?php echo '<a class="btn btn-primary btn-xs" id="selecionar" href="bd/selecionaAluno.php?id='.$row['idInscricao'].'">Selecionar Aluno</a>';?></td>
		                <?php }else{ ?>
		                	<td><input type="checkbox" class="checkthis" disabled="disabled" checked="checked"/></td>
		                	<td><p><?php echo '<a disabled class="btn btn-primary btn-xs" id="selecionar" href="bd/selecionaAluno.php?id='.$row['idInscricao'].'">Selecionar Aluno</a>';?></td>
		                <?php } ?>
		            </tr>
		            <?php } ?>
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