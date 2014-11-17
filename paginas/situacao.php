<?php
require '../includes/header.html';
require '../includes/menuAluno.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Situação da minha Matrícula</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
      </div>
        <div class="alert alert-success" style="width: 500px; margin-left:350px;">
          <p>Caro Aluno,</p>
          <p>Pedido de matrícula para o curso: Extensivo; Noturno; 2014</p>
          <p>Todos os documentos foram entregues</p>
          <h3 style="text-align:center;">BEM VINDO AO CURSO</h3>
      </div>
      <div class="alert alert-warning" style="width: 500px; margin-left:350px;">
          <!--Caso ainda nao entregou todos os docs-->
          <p>Caro Candidato,</p>
          <h4 style="text-align:center;">Sua matrícula ainda não foi efetivada</h4>
          <hr />
          <p>Pedido de matrícula para o curso: Extensivo; Noturno; 2014</p>
          <p>Data Fim para Entregar Documentos: 02/02/2014</p>
          <p>Documentos Entregue:</p>
			<ul><!--informacao do bd-->
            <li>Cópia RG</li>
            <li>Cópia CPF</li>
          </ul>
          <p>Documentos Faltantes:</p>
          <ul>
          	<li>Comprovante de residência</li>
          </ul>
          <p>É obrigatório a entrega de todos os documentos, caso contrário a matrícula é indeferida</p>
          <h4 style="text-align:center;">ATENÇÃO AO PRAZO!</h4>
        </div>

        <div class="alert alert-danger" style="width: 500px; margin-left:350px;">
          <!--Caso ainda nao entregou todos os docs-->
          <p>Caro Aluno,</p>
          <h4 style="text-align:center;">Sua matrícula foi desativada do curso</h4>
          <p>Você foi marcado como Aluno Desistente.</p>
        </div>
    </form>
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>