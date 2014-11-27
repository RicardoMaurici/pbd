<?php
include ('../conecta_aluno.php');
require '../includes/header.html';
require '../includes/menuAluno.php';
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Aviso Matrícula </h3>
  </div>
  <div class="panel-body">
    <?php $id=$_GET['id']; ?>
  	<form class="form-horizontal" role="form" >
      </div>
        <div class="alert alert-warning" style="width: 500px; margin-left:350px;">
          <p>Caro candidato,</p>
          <p>Para a matrícula ser efetivada é necessário trazer ao Curso os seguintes documentos antes do término do período de matrícula:</p>
          <p><ul><!--informacao do bd-->
          <?php 
                $sql = "SELECT * FROM documentacao";
                $busca = mysql_query($sql) or die(mysql_error());
                while ($row = mysql_fetch_array($busca)){
          ?>
            <li><?php echo $row['tipoDocumento'];?></li>
            <?php } ?>
          </ul></p> 
          <?php echo '<a class="btn btn-primary btn-xs" id="ok" href="bd/realizamatricula.php?id='.$id.'">OK</a>';?>
        </div>
    </form>
    </div>
</div>

<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>