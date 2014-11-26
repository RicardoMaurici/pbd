<?php
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
	        <h3>Período de matrícula em aberto e selecionado:</h3> 
	        <h5>* Caro candidato, caso você já tenha se matrículado em algum outro curso, seu pedido de matrícula será indeferido.</h5> 
		        	<!--Retorna cursos que alunos esta inscrito, e ativa botao matricula se estiver no periodo-->
		    <?php
		    	//Pega idPessoa do usuario conectado  
		        session_start();
              	$cpf=$_SESSION['login'];
                $sqluser="SELECT idPessoa FROM candidato WHERE cpf=$cpf";
                $temp=mysql_query($sqluser) or die(mysql_error());
                $pessoa=mysql_fetch_array($temp);
                $idPessoa=$pessoa[0]; 

              	$sql = "SELECT * FROM aluno_selec_sem_mat WHERE dtFimMatricula>CURDATE() and idPessoa='$idPessoa'";
              	$busca = mysql_query($sql) or die(mysql_error());
        	?> 
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>ID</th>
	              <th>Tipo</th>
	              <th>Turno</th>
	              <th>Início Matrículas</th>
	              <th>Término Matrículas</th>
	              <th>Matrícula</th>
	            </thead>
	           <tbody>
    			<?php while ($row = mysql_fetch_array($busca)){ ?>
	            	<tr> <!--Alimenta Banco de Dados-->
		                <td><?php echo $row['idInscricao'];?></td>
		                <td><?php echo $row['tipo'];?></td>
		                <td><?php echo $row['turno'];?></td>
		                <td><?php echo $row['dtInicioMatricula'];?></td>
		                <td><?php echo $row['dtFimMatricula'];?></td>
		                <!--Se ja esta matriculado desmarca botao-->
		                <?php if($row['idMatricula']<>NULL){ ?>
		              		<td><p><a href="pedidoMatricula.php" disabled class="btn btn-warning btn-xs">Já possui alguma matrícula no curso</a></td>
		              	<?php }else{ ?>
		              		<td><p><?php echo '<a href="pedidoMatricula.php?id='.$row['idInscricao'].'" class="btn btn-warning btn-xs">Fazer minha matrícula</a>';?></td>
		              	<?php } ?>
		            </tr>
		            <?php } ?>
           		</tbody>       
       		  </table>     
    		</div>
    		<hr />
    		<div class="table-responsive"> 
	        <h3>Período de matrícula encerrado:</h3> 
		        	<!--Retorna cursos que alunos esta inscrito, e ativa botao matricula se estiver no periodo e selecionado-->
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