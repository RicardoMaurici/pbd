<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Alteração de Fornecedor</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
  		<div class="form-group">
    		<label for="lbrazaoSocial" class="col-sm-2 control-label">Razão Social</label>
    		<div class="col-sm-5">
      			<input type="text" class="form-control" id="irazaoSocial" placeholder="Informe a razão social da empresa">
    		</div>
    	</div>
    	<div class="form-group">
    		<label for="lbcnpj" class="col-sm-2 control-label">CNPJ</label>
    		<div class="col-sm-2">
      			<input type="text" class="form-control" id="icnpj" placeholder="Informe o CNPJ">
    		</div>
    		<div class="col-sm-4">
      			<label for="lbie" class="col-sm-2 control-label">IE</label>
      			<div class="col-sm-7">
      				<input type="text" class="form-control" id="iie" placeholder="Inscrição Estadual">
    			  </div>
    		</div>
    	</div>
      <div class="form-group">
        <label for="lbnomeFantasia" class="col-sm-2 control-label">Nome Fantasia</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="inomeFantasia" placeholder="Informe o nome fantasia da empresa">
        </div>
      </div>
      <div class="form-group">
        <label for="lbresponsavel" class="col-sm-2 control-label">Responsável</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="iresponsavel" placeholder="Nome do Responsável">
        </div>
        <div class="col-sm-4">
            <label for="lbtel" class="col-sm-2 control-label">Telefone</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="itel" placeholder="Telefone">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbpais" class="col-sm-2 control-label">País</label>
          <div class="col-sm-3">
            <select class="form-control" id="slpais"> <!--infomacao vem do banco-->
              <option>Brasil</option> 
              <option>Irlanda</option>
              <option>México</option>
            </select>
          </div>
          <div class="col-sm-4">
            <label for="lbuf" class="col-sm-2 control-label">UF</label>
            <div class="col-sm-4">
              <select class="form-control" id="sluf"><!--infomacao vem do banco-->
                <option>RS</option>
                <option>SC</option>
              </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbcidade" class="col-sm-2 control-label">Cidade</label>
          <div class="col-sm-5">
            <select class="form-control" id="slcidade"> <!--infomacao vem do banco-->
              <option>Florianópolis</option> 
              <option>Joinville</option>
              <option>São Bento do Sul</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbbairro" class="col-sm-2 control-label">Bairro</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="ibairro" placeholder="Bairro">
        </div>
        <div class="col-sm-4  ">
            <label for="lbcep" class="col-sm-2 control-label">CEP</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="icep" placeholder="CEP">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lblogradouro" class="col-sm-2 control-label">Logradouro</label>
        <div class="col-sm-5">
            <input type="text" class="form-control" id="ilogradouro" placeholder="Informe o logradouro">
        </div>
      </div>
      <div class="form-group">
        <label for="lbnresidencia" class="col-sm-2 control-label">Nº Residência</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="inresidencia" placeholder="Nº">
        </div>
        <label for="lbcomplemento" class="col-sm-2 control-label">Complemento</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="icomplemento" placeholder="Complemento">
        </div>
      </div>
      <div class="form-group">
        <label for="lbemail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-5">
          <input type="email" class="form-control" id="iemail" placeholder="Informe Email">
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
      <button type="button" class="btn btn-warning" style="width: 25%;" id="alterar">alterar</button>
      <!--<button type="button" class="btn btn-warning" id="alterar">Alterar</button>
      <button type="button" class="btn btn-danger" id="cancelar">Excluir</button>-->
    </div>
	</form>
  </div>
</div>  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>