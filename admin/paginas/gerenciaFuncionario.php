<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Gerenciar Funcionários</h3>
  </div>
  <div class="panel-body">
	<a href="cadastroFuncionario.php" class="btn btn-primary">Cadastrar</a>
  	<div class="row">    
   			<div class="col-md-12">
		        <div class="table-responsive"> 
		        <?php   
             		$sql = "SELECT * FROM funcionario";
              		$busca = mysql_query($sql) or die(mysql_error());
        		?>   
		          <table id="mytable" class="table table-bordred table-striped">    
		            <thead>
		              <th>Nome</th>
		              <th>CPF</th>
		              <th>Email</th>
		              <th>Dt Nascimento</th>
		              <th>Cargo</th>
		              <th>Privilégio</th>
		              <th>Alterar</th>
		              <th>Excluir</th>
		            </thead>
		            <tbody>
                	<?php while ($row = mysql_fetch_array($busca))
            			{
              			$dtNascimento=date('d/m/Y',strtotime(str_replace('/', '-', $row['dtNascimento'])));
              			$cargo=mysql_fetch_array(mysql_query("SELECT * FROM cargo WHERE idFuncao=".$row['idFuncao']));
              			session_start();
              			$user=$_SESSION['login'];
              			if($row['privilegio']==0)
              				$privilegio="Não";
              			else
              				$privilegio="Sim";
            		?>
		            	<tr> <!--Alimenta Banco de Dados-->
			                <td><?php echo $row['nomeCompleto'];?></td>
			                <td><?php echo $row['CPF'];?></td>
			                <td><?php echo $row['email'];?></td>
			                <td><?php echo $dtNascimento;?></td>
			                <td><?php echo $cargo[3];?></td>
			                <td><?php echo $privilegio;?></td>
			        <?php
			        	if($user==$row['nomeUsuario']){ ?>
			              	<td><p><?php echo '<a class="btn btn-warning btn-xs" disabled href="alterarFuncionario.php?id='.$row['idPessoa'].'">Alterar</a>';?></p></td>
               				<td><p><?php echo '<a disabled href="deletarFuncionario.php?id='.$row['idPessoa'].'" class="btn btn-danger btn-xs">Deletar</a>';?></p></td>
			            </tr>
			            <?php }else{ ?>
			            	<td><p><?php echo '<a class="btn btn-warning btn-xs" href="alterarFuncionario.php?id='.$row['idPessoa'].'">Alterar</a>';?></p></td>
               				<td><p><?php echo '<a href="deletarFuncionario.php?id='.$row['idPessoa'].'" class="btn btn-danger btn-xs">Deletar</a>';?></p></td>
			            <?php }} ?>
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