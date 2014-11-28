<?php
include('../conecta_aluno.php');
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
		    <?php
		    	//Pega idPessoa do usuario conectado  
		        session_start();
              	$cpf=$_SESSION['login'];
                $sqluser="SELECT idPessoa FROM candidato WHERE cpf=$cpf";
                $temp=mysql_query($sqluser) or die(mysql_error());
                $pessoa=mysql_fetch_array($temp);
                $idPessoa=$pessoa[0]; 

              	$sql = "SELECT * FROM inscricao i JOIN curso c ON i.idCurso=c.idCurso WHERE i.idPessoa='$idPessoa'";
              	$busca = mysql_query($sql) or die(mysql_error());
        	?> 
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>ID</th>
	              <th>Tipo</th>
	              <th>Turno</th>
	              <th>Início Inscrições</th>
	              <th>Término Inscrições</th>
	              <th>Início Matrículas</th>
	              <th>Término Matrículas</th>
	              <th>Selecionado</th>
	              <th>Matriculado</th>
	            </thead>
	           <tbody>
    			<?php while ($row = mysql_fetch_array($busca)){ ?>
	            	<tr> <!--Alimenta Banco de Dados-->
		                <td><?php echo $row['idInscricao'];?></td>
		                <td><?php echo $row['tipo'];?></td>
		                <td><?php echo $row['turno'];?></td>
		               	<td><?php echo $row['dtInicioInscricao'];?></td>
		                <td><?php echo $row['dtFimInscricao'];?></td>
		                <td><?php echo $row['dtInicioMatricula'];?></td>
		                <td><?php echo $row['dtFimMatricula'];?></td>
		                <!--Se ja esta matriculado desmarca botao-->
		                <?php if($row['selecionado']==1){ ?>
		              		<td><input type="checkbox" class="checkthis" disabled="disabled" checked="checked"/></td>
		              	<?php }else{ ?>
		              		<td><input type="checkbox" class="checkthis" disabled="disabled"/></td>
		              	<?php } ?>
		              	<?php if($row['idMatricula']<>NULL){ ?>
		              		<td><input type="checkbox" class="checkthis" disabled="disabled" checked="checked"/></td>
		              	<?php }else{ ?>
		              		<td><input type="checkbox" class="checkthis" disabled="disabled"/></td>
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