<?php
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
  <!--<button class="btn btn-primary" data-title="Cadastrar" data-toggle="modal" data-target="#cadastrar" data-placement="top" rel="tooltip">Cadastrar</button>-->
  <div class="row">    
    <div class="col-md-12">
        <div class="table-responsive">  
          <table id="mytable" class="table table-bordred table-striped">    
            <thead>
              <th></th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Email</th>
              <th>Dt Nascimento</th>
              <th>Alterar</th>
              <th>Excluir</th>
            </thead>
            <tbody>
    
              <tr> <!--Alimenta Banco de Dados-->
                <td><input type="checkbox" class="checkthis" /></td>
                <td>José</td>
                <td>999.999.999-99</td>
                <td>jose@email.com</td>
                <td>01/01/1081</td>
                <td><p><a href="alterarProfessor.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
                <!--<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>-->
                <td><p><a href="deletarProfessor.php" class="btn btn-danger btn-xs">Deletar</a></p></td>
              </tr>
              
              <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Maria</td>
                <td>111.111.111-11</td>
                <td>maria@email.com</td>
                <td>02/02/1982</td>
                <td><p><a href="alterarProfessor.php" class="btn btn-warning btn-xs">Alterar</a></p></td>
                <td><p><a href="deletarProfessor.php" class="btn btn-danger btn-xs">Deletar</a></p></td>
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