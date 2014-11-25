<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Exclusão de Funcionário</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
      <?php $idF=$_GET['id']; ?>
      </div>
        <div class="alert alert-warning" style="width: 500px; margin-left:350px;"><p>Você tem certeza que deseja excluir esse cadastro? </p> 
     		     <?php echo '<a href="bd/del_funcionario.php?id='.$idF.'" style="width: 80px; margin-left: 280px; margin-top: 20px;" class="btn btn-danger" id="deletar" name="deletar">SIM</a>';?>
          	 <a href="gerenciaFuncionario.php" style="width: 80px; margin-left: 20px; margin-top: 20px;" class="btn btn-warning">Não</a>
        </div>
    </form>
    </div>
</div>

<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>