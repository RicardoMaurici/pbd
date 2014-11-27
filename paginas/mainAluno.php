<?php
include ('../conecta.php');
require '../includes/header.html';
require '../includes/menuAluno.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">BEM VINDO - Cursos Abertos</h3>
  </div>
  <div class="panel-body">
  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        <!--APENAS MOSTRA CURSOS COM INSCRICOES ABERTAS-->
		       	<?php   
              		$sql = "SELECT * FROM cursos_disponiveis";
              		$busca = mysql_query($sql) or die(mysql_error());
              		session_start();
              		$cpf=$_SESSION['login'];
                  $sqluser="SELECT idPessoa FROM candidato WHERE cpf=$cpf";
                  $temp=mysql_query($sqluser) or die(mysql_error());
                  $pessoa=mysql_fetch_array($temp);
                  $idPessoa=$pessoa[0];
              		$sqlCursosInsc = "SELECT i.idPessoa idP, i.idCurso idC FROM candidato u INNER JOIN inscricao i  ON i.idPessoa=u.idPessoa
              		INNER JOIN curso c ON c.idCurso=i.idCurso WHERE i.idPessoa=$idPessoa ORDER BY idC";
              		$result = mysql_query($sqlCursosInsc);
              		if(!$result){
              			echo '<meta http-equiv="refresh" content="0;url=mainAluno.php>';
						        echo '<script>alert("'.mysql_error().'")</script>';
              		}
        		?> 
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>ID</th>
	              <th>Tipo</th>
	              <th>Turno</th>
	              <th>Vagas</th>
	              <th>Início Inscrições</th>
	              <th>Término Inscrições</th>
	              <th>Início Matrículas</th>
	              <th>Término Matrículas</th>
	              <th>Inscrição</th>
	            </thead>
	           <tbody>
    			<?php while ($row = mysql_fetch_array($busca)){
              		$dtIinsc=date('d/m/Y',strtotime(str_replace('/', '-', $row['dtInicioInscricao'])));
              		$dtFinsc=date('d/m/Y',strtotime(str_replace('/', '-', $row['dtFimInscricao'])));
              		$dtImat=date('d/m/Y',strtotime(str_replace('/', '-', $row['dtInicioMatricula'])));
              		$dtFmat=date('d/m/Y',strtotime(str_replace('/', '-', $row['dtFimMatricula'])));

              		$inscrito=false;

              		$result = mysql_query($sqlCursosInsc);
              		while ($linha = mysql_fetch_array($result)){
              			if($row['idCurso']==$linha[1]){
              				$inscrito=true;
              				break;
              			}
              		}
            	?>
	            	<tr> <!--Alimenta Banco de Dados-->
		                <td><?php echo $row['idCurso'];?></td>
		                <td><?php echo $row['tipo'];?></td>
		                <td><?php echo $row['turno'];?></td>
		                <td><?php echo $row['vagas'];?></td>
		                <td><?php echo $dtIinsc;?></td>
		                <td><?php echo $dtFinsc;?></td>
		                <td><?php echo $dtImat;?></td>
		                <td><?php echo $dtFmat;?></td>
		                <!--Se ja esta inscrito desmarca botao-->
		                <?php if($inscrito==true){ ?> 
		              	<td><p><?php echo '<a disabled class="btn btn-warning btn-xs" href="cadastraInscricao.php?id='.$row['idCurso'].'">Quero me candidatar</a>';?></td>
		            	<?php }else{ ?>
		              	<td><p><?php echo '<a class="btn btn-warning btn-xs" href="cadastraInscricao.php?id='.$row['idCurso'].'">Quero me candidatar</a>';?></td>
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