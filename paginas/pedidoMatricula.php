<?php
require '../includes/header.html';
require '../includes/menuAluno.php';
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Aviso Matrícula </h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
      </div>
        <div class="alert alert-warning" style="width: 500px; margin-left:350px;">
          <p>Caro candidato,</p>
          <p>Para a matrícula ser efetivada é necessário trazer ao Curso os seguintes documentos antes do término do período de matrícula:</p>
          <p><ul><!--informacao do bd-->
            <li>Cópia RG</li>
            <li>Cópia CPF</li>
            <li>Comprovante de residência</li>
          </ul></p> 
          <a href="gerenciaMinhasInscricoes.php" class="btn btn-primary" style="width: 80px; margin-left: 380px; margin-top: 20px;">OK</a>
        </div>
    </form>
    </div>
</div>

<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>