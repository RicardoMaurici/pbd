<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');

if(isset($_GET['altera'])){
	$idDoc = $_GET['idDocumentacao'];
	$idMat = $_GET['idMatricula'];

	$s = "UPDATE `matricula_doc` SET `entregue`= 1 WHERE `idMatricula` = $idMat AND `idDocumentacao` = $idDoc";
	$r = mysql_query($s);
	if(!$r){
		echo '<script>alert("'.mysql_error().'")</script>';
	}else{
		echo '<script>alert("Recebimento registrado com sucesso!")</script>';
	}
}
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Recebimento de Documento do Aluno</h3>
  </div>
  <div class="panel-body">

  	<div class="row">    
   		<div class="col-md-12">
	        <div class="table-responsive">  
		        	<!--Se fizer busca traz as tuplas que satisfazem a condição-->
		        	<!--Os documentos são iguais para todos os tipos de curso-->
		        	<!--Não precisa Incluir, pois todos alunos precisam entregar documentos-->
	          <table id="mytable" class="table table-bordred table-striped">    
	            <thead>
	              <th>Recebido</th>
	              <th>Matrícula</th>
	              <th>Nome Aluno</th>
	              <th>CPF</th>
	              <th>Documento</th>
	              <th>Entregue</th>
	            </thead>
	           <tbody>
<?php 
	$sql = "SELECT c.`nomeCompleto` nomeCandidato,c.`CPF` cpf,i.`idMatricula` idMatricula FROM `Candidato` c join `Inscricao` i on c.`idPessoa` = i.`idPessoa`";
	$result=mysql_query($sql);
    while($row=mysql_fetch_array($result)){
    	if($row['idMatricula'] > 0){
    		$idM = $row['idMatricula'];
    		$query = "SELECT md.`entregue`, d.`tipoDocumento`, md.`idDocumentacao`  FROM `matricula_doc` md join `Documentacao` d on md.`idDocumentacao`=d.`idDocumentacao` WHERE `idMatricula` = $idM";
    		$rquery = mysql_query($query);
    		while($x=mysql_fetch_array($rquery)){
    			if($x['entregue']){
    				$recebido = 'checked="checked"';
   					$botao = 'disabled="disabled"';
   				}else{
   					$recebido = '';
   					$botao = '';
   				}
   				$pmts = '?idMatricula='.$idM.'&idDocumentacao='.$x['idDocumentacao'].'&altera=true';
?>    	
	            	<tr> <!--Alimenta Banco de Dados/Se já recebeu desmarca botão-->
		                <td><input type="checkbox" class="checkthis" disabled="disabled" <?php echo $recebido; ?> /></td>
		                <td><?php echo $row['idMatricula']; ?></td>
		                <td><?php echo $row['nomeCandidato']; ?></td>
		                <td><?php echo $row['cpf']; ?></td>
		                <td><?php echo $x['tipoDocumento']; ?></td>
		              	<td><p><a href="recebimentoDocumentoAluno.php<?php echo $pmts; ?>" class="btn btn-warning btn-xs" <?php echo $botao; ?>>Sim</a></p></td>
		            </tr>
<?php
			}
		}

	}
?>
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