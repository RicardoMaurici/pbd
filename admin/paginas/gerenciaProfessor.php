<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Gerenciar Professores</h3>
  </div>
  <div class="panel-body">
  <a href="cadastroProfessor.php" class="btn btn-primary">Cadastrar</a>
  <div class="row">    
    <div class="col-md-12">
        <div class="table-responsive"> 
        <?php   
              $sql = "SELECT * FROM professor";
              $busca = mysql_query($sql) or die(mysql_error());
        ?>  
          <table id="mytable" class="table table-bordred table-striped">    
            <thead>
              <th>Nome</th>
              <th>CPF</th>
              <th>Email</th>
              <th>Dt Nascimento</th>
              <th>Alterar</th>
              <th>Excluir</th>
            </thead>
            <tbody>
            <?php while ($row = mysql_fetch_array($busca))
            {
              $dtNascimento=date('d/m/Y',strtotime(str_replace('/', '-', $row['dtNascimento'])));
            ?>
              <tr> <!--Alimenta Banco de Dados-->
                <td><?php echo $row['nomeCompleto'];?></td>
                <td><?php echo $row['CPF'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $dtNascimento;?></td>
                <td><p><?php echo '<a class="btn btn-warning btn-xs" href="alterarProfessor.php?id='.$row['idPessoa'].'">Alterar</a>';?></p></td>
                <!--<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>-->
                <td><p><?php echo '<a href="deletarProfessor.php?id='.$row['idPessoa'].'" class="btn btn-danger btn-xs">Deletar</a>';?></p></td>
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