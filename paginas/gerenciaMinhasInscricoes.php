<?php
include('../conecta.php');
require '../includes/header.html';
require '../includes/menuAluno.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Minhas inscrições, onde fui selecionado</h3>
  </div>
  <div class="panel-body">
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive"> 
	        <h3>Período de matrícula em aberto e selecionado:</h3> 
	        <h5>* Caro candidato, caso você já tenha se matrículado em algum outro curso, não será possível fazer outro pedido.</h5> 
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

              	$sqlTemp = "SELECT idInscricao FROM inscricao WHERE idPessoa='$idPessoa' and idMatricula is not null";
              	$buscaTemp = mysql_query($sqlTemp) or die(mysql_error());
              	$buscaTemp2 = mysql_fetch_array($buscaTemp);
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
		                <?php if($buscaTemp2!=null){ ?>
		              		<td><p><a href="pedidoMatricula.php" disabled class="btn btn-warning btn-xs">Já possui alguma matrícula no curso</a></td>
		              	<?php }else{ ?>
		              		<td><p><?php echo '<a href="pedidoMatricula.php?id='.$row['idInscricao'].'" class="btn btn-warning btn-xs">Fazer minha matrícula</a>';?></td>
		              	<?php } ?>
		            </tr>
		            <?php } ?>
           		</tbody>       
       		  </table>     
    		</div>
    		<br />
    		<hr />
    		<div class="table-responsive"> 
	        <h3>Período de matrícula encerrado:</h3> 
		     <!--Retorna cursos que alunos esta inscrito, e foi selecionado com a matricula encerrada-->
		    <?php
		    	//Pega idPessoa do usuario conectado  
		        session_start();
              	$cpf=$_SESSION['login'];
                $sqluser="SELECT idPessoa FROM candidato WHERE cpf=$cpf";
                $temp=mysql_query($sqluser) or die(mysql_error());
                $pessoa=mysql_fetch_array($temp);
                $idPessoa=$pessoa[0]; 

              	$sql = "SELECT * FROM aluno_selec_sem_mat WHERE dtFimMatricula<CURDATE() and idPessoa='$idPessoa'";
              	$busca = mysql_query($sql) or die(mysql_error());
        	?> 
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>ID</th>
	              <th>Tipo</th>
	              <th>Turno</th>
	              <th>Início Matrículas</th>
	              <th>Término Matrículas</th>
	            </thead>
	           <tbody>
    
    			<?php while ($row = mysql_fetch_array($busca)){ ?>
	            	<tr> <!--Alimenta Banco de Dados-->
		                <td><?php echo $row['idInscricao'];?></td>
		                <td><?php echo $row['tipo'];?></td>
		                <td><?php echo $row['turno'];?></td>
		                <td><?php echo $row['dtInicioMatricula'];?></td>
		                <td><?php echo $row['dtFimMatricula'];?></td>
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