<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Alteração de Funcionário</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
  		<div class="form-group">
    		<label for="lbnomeCompleto" class="col-sm-2 control-label">Nome Completo</label>
    		<div class="col-sm-3">
      			<input type="text" class="form-control" id="inomeCompleto" placeholder="Informe o nome completo">
    		</div>
        <div class="col-sm-2">
          <label>
            Admin <input type="checkbox" id="acessoAdmin">
          </label>
        </div>
    	</div>
    	<div class="form-group">
    		<label for="lbcpf" class="col-sm-2 control-label">CPF</label>
    		<div class="col-sm-2">
      			<input type="text" class="form-control" id="icpf" placeholder="Informe o CPF">
    		</div>
    		<div class="col-sm-3">
      			<label for="lbrg" class="col-sm-2 control-label">RG</label>
      			<div class="col-sm-6">
      				<input type="text" class="form-control" id="irg" placeholder="RG">
    			  </div>
    		</div>
    	</div>
      <div class="form-group">
        <label for="lbdtNascimento" class="col-sm-2 control-label">Data Nascimento</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="idtNascimento" placeholder="Data de nascimento">
        </div>
        <div class="col-sm-3">
            <label for="lbsexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-4">
              <select class="form-control" id="slsexo">
                <option>F</option>
                <option>M</option>
              </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbtel1" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="itel1" placeholder="Residêncial">
        </div>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="itel2" placeholder="Celular">
        </div>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="itel3" placeholder="Outro">
        </div>
      </div>
      <div class="form-group">
        <label for="lbpispasep" class="col-sm-2 control-label">Nº PIS/PASEP</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="ipispasep" placeholder="Informe o PIS/PASEP">
        </div>
        <div class="col-sm-4">
            <label for="lbsalario" class="col-sm-2 control-label">Salário</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="isalario" placeholder="Salário">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbescolaridade" class="col-sm-2 control-label">Escolaridade</label>
          <div class="col-sm-4">
            <select class="form-control" id="slescolaridade"> <!--infomacao vem do banco-->
              <option>Superior</option> 
              <option>Mestrado</option>
              <option>Doutorado</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbescolaridade" class="col-sm-2 control-label">Cargo</label>
          <div class="col-sm-4">
            <select class="form-control"> <!--infomacao vem do banco-->
              <option>Secretária</option> 
              <option>Monitor</option>
              <option>Diretor</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbpais" class="col-sm-2 control-label">País</label>
          <div class="col-sm-2">
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
          <div class="col-sm-4">
            <select class="form-control" id="slcidade"> <!--infomacao vem do banco-->
              <option>Florianópolis</option> 
              <option>Joinville</option>
              <option>São Bento do Sul</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbbairro" class="col-sm-2 control-label">Bairro</label>
        <div class="col-sm-2">
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
        <div class="col-sm-4">
            <input type="text" class="form-control" id="ilogradouro" placeholder="Informe o logradouro">
        </div>
      </div>
      <div class="form-group">
        <label for="lbnresidencia" class="col-sm-2 control-label">Nº Residência</label>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="inresidencia" placeholder="Nº">
        </div>
        <label for="lbcomplemento" class="col-sm-1 control-label">Complemento</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="icomplemento" placeholder="Complemento">
        </div>
      </div>
      <div class="form-group">
        <label for="lbemail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="iemail" placeholder="Informe Email">
        </div>
      </div>
      <div class="form-group">
        <label for="lblogin" class="col-sm-2 control-label">Nome Usuário</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="ilogin" placeholder="Login">
        </div>
        <label for="lbsenha" class="col-sm-1 control-label">Senha</label>
        <div class="col-sm-1">
            <input type="password" class="form-control" id="isenha" placeholder="Senha">
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
      <button type="button" class="btn btn-warning" style="width: 25%;" id="cadastrar">Alterar</button>
      <!--<button type="button" class="btn btn-warning" id="alterar">Alterar</button>
      <button type="button" class="btn btn-danger" id="cancelar">Excluir</button>-->
    </div>
	</form>  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>