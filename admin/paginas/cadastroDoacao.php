<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Doação/Contrato</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
    <div class="form-group">
        <label for="lbdoador" class="col-sm-2 control-label">Doador</label>
          <div class="col-sm-5">
            <select class="form-control" id="sldoador"> <!--infomacao vem do banco-->
              <option>José ME</option> 
              <option>Maria LTDA</option>
            </select>
          </div>
      </div>
  		<div class="form-group">
    		<label for="lbrazaoSocial" class="col-sm-2 control-label">Valor</label>
    		<div class="col-sm-1">
      			<input type="text" class="form-control" id="irazaoSocial" placeholder="Doar">
    		</div>
        <label for="lbpagamento" class="col-sm-2 control-label">Pagamento</label>
          <div class="col-sm-2">
            <select class="form-control" id="slpagamento"> <!--infomacao vem do banco-->
              <option>Boleto</option> 
              <option>Cartão</option>
            </select>
          </div>
      </div>
    	<div class="form-group">
        <label for="lbtestemunhaNome" class="col-sm-2 control-label">Testemunha Nome</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="itestemunhaNome" placeholder="Nome da Testemunha">
        </div>
        <div class="col-sm-7">
            <label for="lbcpf" class="col-sm-2 control-label">Testemunha CPF</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="icpf" placeholder="Testemunha CPF">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbmotivacao" class="col-sm-2 control-label">Motivação</label>
        <div class="col-sm-5">
            <textarea class="form-control" id="imotivacao" rows="3" placeholder="Motivação para Doação"> </textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="lbfuncionario" class="col-sm-2 control-label">Funcionário Responsável</label>
          <div class="col-sm-5">
            <select class="form-control" id="slfuncionario"> <!--infomacao vem do banco-->
              <option>José</option> 
              <option>Maria</option>
            </select>
          </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
      <button type="button" class="btn btn-primary" style="width: 25%;" id="gerarContrato">Gerar Contrato</button>
      <!--<button type="button" class="btn btn-warning" id="alterar">Alterar</button>
      <button type="button" class="btn btn-danger" id="cancelar">Excluir</button>-->
    </div>
	</form>  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>