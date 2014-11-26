<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Exclusão de Turma</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" role="form" method="post" action="gerenciaTurma.php">
<?php
  echo '<input type="hidden" name="idTurma" value='.$_GET['turma'].'>';
  echo '<input type="hidden" name="idPessoa" value='.$_GET['professor'].'>';
  echo '<input type="hidden" name="idDisciplina" value='.$_GET['disciplina'].'>';
  echo '<input type="hidden" name="idHorario" value='.$_GET['horario'].'>';
  echo '<input type="hidden" name="deletar">';

?>
      </div>
        <div class="alert alert-warning" style="width: 500px; margin-left:350px;"><p>Você tem certeza que deseja excluir esse cadastro? </p> 
          <button  type="submit" style="width: 80px; margin-left: 280px; margin-top: 20px;" class="btn btn-danger">Sim</button>
          <a href="gerenciaTurma.php" style="width: 80px; margin-left: 20px; margin-top: 20px;" class="btn btn-warning">Não</a>
        </div>
    </form>
    </div>
</div>

<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>