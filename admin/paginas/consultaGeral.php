<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Consulta Geral</h3>
  </div>
  <div class="panel-body">
	<form class="form-inline" role="form" method="post" action="consultaGeral.php">
     	<div class="form-group">
     		<input type="number" class="form-control" id="ibuscacurso" name="ibuscacurso" placeholder="Insira o idCurso desejado">
     		<input type="submit" class="btn btn-primary"  id="buscaCurso" name="buscaCurso" value="Buscar">
  			<input type="number" class="form-control" id="ibuscamatricula" name="ibuscamatricula" placeholder="Insira a matrícula desejada">
  			<input type="submit" class="btn btn-primary"  id="buscaMatricula" name="buscaMatricula" value="Buscar">
  			<input type="number" class="form-control" id="ibuscainscricao" name="ibuscainscricao" placeholder="Insira a inscrição desejada">
  			<input type="submit" class="btn btn-primary"  id="buscaInscricao" name="buscaInscricao" value="Buscar">
  			<input type="submit" class="btn btn-primary" id="normal" name="normal" value="Normal">
  		</div>
  	</form>
  	<hr />
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        	<!--Se fizer busca traz as tuplas que satisfazem a condição-->
		        	<!--Os documentos são iguais para todos os tipos de curso-->
		        	<!--Não precisa Incluir, pois todos alunos precisam entregar documentos-->
		        <?php
		        	if($_POST['normal']){
		        		$sql = "SELECT * FROM alunos_matriculados";
						$busca = mysql_query($sql) or die(mysql_error());
					}else if($_POST['buscaCurso']){
		        		$idCurso=$_POST['ibuscacurso'];
		        		$sql = "SELECT * FROM alunos_matriculados WHERE curso='$idCurso'";
						$busca = mysql_query($sql) or die(mysql_error());
					}else if($_POST['buscaMatricula']){
		        		$idMat=$_POST['ibuscamatricula'];
		        		$sql = "SELECT * FROM alunos_matriculados WHERE matricula='$idMat'";
						$busca = mysql_query($sql) or die(mysql_error());
					}else if($_POST['buscaInscricao']){
		        		$idIns=$_POST['ibuscainscricao'];
		        		$sql = "SELECT * FROM alunos_matriculados WHERE inscricao='$idIns'";
						$busca = mysql_query($sql) or die(mysql_error());
		        	}else{
		        		$sql = "SELECT * FROM alunos_matriculados";
						$busca = mysql_query($sql) or die(mysql_error());
					}
				?> 
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
    				<?php while ($row = mysql_fetch_array($busca))
            		{ ?>
	            	<tr> <!--Alimenta Banco de Dados/Se já recebeu desmarca botão-->
		                <td><?php echo $row['Inscricao'];?></td>
		                <td><?php echo $row['Matricula'];?></td>
		                <td><?php echo $row['Nome'];?></td>
		                <td><?php echo $row['CPF'];?></td>
		                <td><?php echo $row['Curso'].' - '.$row['tipo']. ' - '.$row['turno'];?></td>
		                <?php if($row['matRecebido']==1){ ?>
		                <td><input type="checkbox" class="checkthis" disabled="disabled" checked="checked"/></td>
		                <?php }else{ ?>
		                <td><input type="checkbox" class="checkthis" disabled="disabled"/></td>
		                <?php } ?>
		                <?php if($row['dtMatricula']==NULL){ ?>
		                <td><input type="checkbox" class="checkthis" disabled="disabled" /></td>
		                <?php }else{ ?>
		                <td><input type="checkbox" class="checkthis" disabled="disabled" checked="checked"/></td>
		                <?php } ?>
		              	<td><p><a href="detalheCadastroAluno.php" class="btn btn-primary btn-xs">Cadastro Aluno</a>
		              	<td><p><a href="alterarCadastroAluno.php" class="btn btn-warning btn-xs">Alterar</a>
		              	<td><p><a href="deletarCadastroAluno.php" class="btn btn-danger btn-xs">Excluir</a>
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