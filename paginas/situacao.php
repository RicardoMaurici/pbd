<?php
require '../includes/header.html';
require '../includes/menuAluno.php';
include ('../conecta_aluno.php');
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Situação da minha Matrícula</h3>
  </div>
  <div class="panel-body">
    <?php
      session_start();
      $cpf=$_SESSION['login'];
      $sqluser="SELECT idPessoa FROM candidato WHERE cpf=$cpf";
      $temp=mysql_query($sqluser) or die(mysql_error());
      $pessoa=mysql_fetch_array($temp);
      $idPessoa=$pessoa[0]; 
      
      $sql="SELECT i.idCurso idC, i.idInscricao idI, i.idMatricula idM, c.turno turno, c.tipo tipo, m.dtMatricula dt, m.desistente d
      FROM inscricao i JOIN curso c ON i.idCurso=c.idCurso JOIN matricula m ON i.idMatricula=m.idMatricula
      WHERE i.idPessoa='$idPessoa'";
      $result=mysql_query($sql);
      if(!$result){
          echo '<script>alert("'.mysql_error().'")</script>';
      }
      $info=mysql_fetch_array($result);
    ?>
  	<form class="form-horizontal" role="form">
      </div>
        <?php if($info['dt']!=null and $info['d']==0){ ?>
        <div class="alert alert-success" style="width: 500px; margin-left:350px;">
          <p>Caro Aluno,</p>
          <p>Pedido de matrícula para o curso: <?php echo $info['tipo'].'; '.$info['turno']; ?></p>
          <p>Todos os documentos foram entregues</p>
          <h3 style="text-align:center;">BEM VINDO AO CURSO</h3>
        </div>
        <?php } else if($info['d']==1){ ?>
          <div class="alert alert-danger" style="width: 500px; margin-left:350px;">
          <!--Caso ainda nao entregou todos os docs-->
          <p>Caro Aluno,</p>
          <h4 style="text-align:center;">Sua matrícula foi desativada do curso</h4>
          <p>Você foi marcado como Aluno Desistente.</p>
        </div>
      
        <?php } else{ 
          $idM=$info['idM'];
          $sqlDoc="SELECT d.tipoDocumento nome, md.entregue entregue 
          FROM matricula_doc md JOIN documentacao d ON md.idDocumentacao=d.idDocumentacao
          WHERE md.idMatricula='$idM'";
          $resultDoc=mysql_query($sqlDoc) or die (mysql_error());
        ?>
        <div class="alert alert-warning" style="width: 500px; margin-left:350px;">
          <!--Caso ainda nao entregou todos os docs-->
          <p>Caro Candidato,</p>
          <h4 style="text-align:center;">Sua matrícula ainda não foi efetivada</h4>
          <hr />
          <p>Pedido de matrícula para o curso: <?php echo $info['tipo'].'; '.$info['turno']; ?></p>
          <!--informacao do bd-->
             <?php while ($row = mysql_fetch_array($resultDoc)){ 
              if($row['entregue']==1){ ?>
              <ul>
              <li><strong>Entregue: </strong><?php echo $row['nome'] ?></li>
              <?php } else{?>
              <ul>
              <li><strong>Falta: </strong><?php echo $row['nome'] ?></li>
              <?php } ?>
          </ul>
          <?php } ?>
          <p>É obrigatório a entrega de todos os documentos, caso contrário a matrícula é indeferida</p>
          <h4 style="text-align:center;">ATENÇÃO AO PRAZO!</h4>
        </div>
        <?php } ?>
    </form>
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>