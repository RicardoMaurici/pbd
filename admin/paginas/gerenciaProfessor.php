<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Gerenciar Professores</h3>
  </div>
  <div class="panel-body">
<div class="container">
  <button class="btn btn-primary" data-title="Cadastrar" data-toggle="modal" data-target="#cadastrar" data-placement="top" rel="tooltip">Cadastrar</button>
  <div class="row">    
    <div class="col-md-12">
        <div class="table-responsive">  
          <table id="mytable" class="table table-bordred table-striped">    
            <thead>
              <th><input type="checkbox" id="ckselecao" /></th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Email</th>
              <th>Dt Nascimento</th>
              <th>Alterar</th>
              <th>Excluir</th>
            </thead>
            <tbody>
    
              <tr> <!--Alimenta Banco de Dados-->
                <td><input type="checkbox" class="checkthis" /></td>
                <td>José</td>
                <td>999.999.999-99</td>
                <td>jose@email.com</td>
                <td>01/01/1081</td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip">Alt</button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Del</button></p></td>
              </tr>
              
              <tr>
                <td><input type="checkbox" class="checkthis" /></td>
                <td>Maria</td>
                <td>111.111.111-11</td>
                <td>maria@email.com</td>
                <td>02/02/1982</td>
                <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip">Alt</button></p></td>
                <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip">Del</button></p></td>
              </tr>
            </tbody>       
          </table>     
        </div>
      </div>
  </div>
</div>
</div>
</div>

<!--Cadastrar Professor-->
<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Cadastrar Professor</h4>
        <div class="panel panel-default col-md-12 col-md-offset+1">
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label for="lbnomeCompleto" class="col-sm-4 control-label">Nome Completo</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="inomeCompleto" placeholder="Informe o nome completo">
              </div>
            </div>
            <div class="form-group">
              <label for="lbcpf" class="col-sm-2 control-label">CPF</label>
              <div class="col-sm-4">
                  <input type="text" class="form-control" id="icpf" placeholder="Informe o CPF">
              </div>
              <div class="col-sm-6">
                  <label for="lbrg" class="col-sm-3 control-label">RG</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="irg" placeholder="RG">
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="lbdtNascimento" class="col-sm-4 control-label">Data Nascimento</label>
              <div class="col-sm-3">
                  <input type="text" class="form-control" id="idtNascimento" placeholder="Nascimento">
              </div>
              <div class="col-sm-5">
                  <label for="lbsexo" class="col-sm-5 control-label">Sexo</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="slsexo">
                      <option>F</option>
                      <option>M</option>
                    </select>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="lbpispasep" class="col-sm-4 control-label">Nº PIS/PASEP</label>
              <div class="col-sm-3">
                  <input type="text" class="form-control" id="ipispasep" placeholder="Informe o PIS/PASEP">
              </div>
              <div class="col-sm-5">
                  <label for="lbsalario" class="col-sm-5 control-label">Salário</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="isalario" placeholder="Salário">
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="lbescolaridade" class="col-sm-4 control-label">Escolaridade</label>
                <div class="col-sm-8">
                  <select class="form-control" id="slescolaridade"> <!--infomacao vem do banco-->
                    <option>Superior</option> 
                    <option>Mestrado</option>
                    <option>Doutorado</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label for="lbescolaridade" class="col-sm-4 control-label">Áreas de Interesse</label>
                <div class="col-sm-8">
                  <select multiple class="form-control"> <!--infomacao vem do banco-->
                    <option>Biologia</option> 
                    <option>Geografia</option>
                    <option>História</option>
                    <option>Inglês</option>
                    <option>Matemática</option>
                    <option>Português</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label for="lbpais" class="col-sm-4 control-label">País</label>
                <div class="col-sm-3">
                  <select class="form-control" id="slpais"> <!--infomacao vem do banco-->
                    <option>Brasil</option> 
                    <option>Irlanda</option>
                    <option>México</option>
                  </select>
                </div>
                <div class="col-sm-5">
                  <label for="lbuf" class="col-sm-5 control-label">UF</label>
                  <div class="col-sm-6">
                    <select class="form-control" id="sluf"><!--infomacao vem do banco-->
                      <option>RS</option>
                      <option>SC</option>
                    </select>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="lbcidade" class="col-sm-4 control-label">Cidade</label>
                <div class="col-sm-8">
                  <select class="form-control" id="slcidade"> <!--infomacao vem do banco-->
                    <option>Florianópolis</option> 
                    <option>Joinville</option>
                    <option>São Bento do Sul</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label for="lbbairro" class="col-sm-4 control-label">Bairro</label>
              <div class="col-sm-3">
                  <input type="text" class="form-control" id="ibairro" placeholder="Bairro">
              </div>
              <div class="col-sm-5  ">
                  <label for="lbcep" class="col-sm-5 control-label">CEP</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" id="icep" placeholder="CEP">
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="lblogradouro" class="col-sm-4 control-label">Logradouro</label>
              <div class="col-sm-8">
                  <input type="text" class="form-control" id="ilogradouro" placeholder="Informe o logradouro">
              </div>
            </div>
            <div class="form-group">
              <label for="lbnresidencia" class="col-sm-4 control-label">Nº Residência</label>
              <div class="col-sm-2">
                  <input type="text" class="form-control" id="inresidencia" placeholder="Nº">
              </div>
              <div class="col-sm-6">
                <label for="lbcomplemento" class="col-sm-6 control-label">Complemento</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="icomplemento" placeholder="Complemento">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="lbemail" class="col-sm-4 control-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" id="iemail" placeholder="Informe Email">
              </div>
            </div>
            <div class="form-group">
              <label for="lblogin" class="col-sm-4 control-label">Nome Usuário</label>
              <div class="col-sm-4">
                  <input type="text" class="form-control" id="ilogin" placeholder="Login">
              </div>
              <div class="col-sm-4">
                <label for="lbsenha" class="col-sm-4 control-label">Senha</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="isenha" placeholder="Senha">
                </div>
              </div>
            </div>
      </form>
  </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">Cadastrar</button>
      </div>
    </div>
  </div>
</div>
</div>




<!--Formulário de alteracao-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Alterando o cadastro</h4>
        <div class="panel panel-default col-md-12 col-md-offset+1">
        <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="lbnomeCompleto" class="col-sm-4 control-label">Nome Completo</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="inomeCompleto" placeholder="Informe o nome completo">
        </div>
      </div>
      <div class="form-group">
        <label for="lbcpf" class="col-sm-2 control-label">CPF</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="icpf" placeholder="Informe o CPF">
        </div>
        <div class="col-sm-6">
            <label for="lbrg" class="col-sm-3 control-label">RG</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="irg" placeholder="RG">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbdtNascimento" class="col-sm-4 control-label">Data Nascimento</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="idtNascimento" placeholder="Nascimento">
        </div>
        <div class="col-sm-5">
            <label for="lbsexo" class="col-sm-5 control-label">Sexo</label>
            <div class="col-sm-6">
              <select class="form-control" id="slsexo">
                <option>F</option>
                <option>M</option>
              </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbpispasep" class="col-sm-4 control-label">Nº PIS/PASEP</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="ipispasep" placeholder="Informe o PIS/PASEP">
        </div>
        <div class="col-sm-5">
            <label for="lbsalario" class="col-sm-5 control-label">Salário</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="isalario" placeholder="Salário">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbescolaridade" class="col-sm-4 control-label">Escolaridade</label>
          <div class="col-sm-8">
            <select class="form-control" id="slescolaridade"> <!--infomacao vem do banco-->
              <option>Superior</option> 
              <option>Mestrado</option>
              <option>Doutorado</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbescolaridade" class="col-sm-4 control-label">Áreas de Interesse</label>
          <div class="col-sm-8">
            <select multiple class="form-control"> <!--infomacao vem do banco-->
              <option>Biologia</option> 
              <option>Geografia</option>
              <option>História</option>
              <option>Inglês</option>
              <option>Matemática</option>
              <option>Português</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbpais" class="col-sm-4 control-label">País</label>
          <div class="col-sm-3">
            <select class="form-control" id="slpais"> <!--infomacao vem do banco-->
              <option>Brasil</option> 
              <option>Irlanda</option>
              <option>México</option>
            </select>
          </div>
          <div class="col-sm-5">
            <label for="lbuf" class="col-sm-5 control-label">UF</label>
            <div class="col-sm-6">
              <select class="form-control" id="sluf"><!--infomacao vem do banco-->
                <option>RS</option>
                <option>SC</option>
              </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbcidade" class="col-sm-4 control-label">Cidade</label>
          <div class="col-sm-8">
            <select class="form-control" id="slcidade"> <!--infomacao vem do banco-->
              <option>Florianópolis</option> 
              <option>Joinville</option>
              <option>São Bento do Sul</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbbairro" class="col-sm-4 control-label">Bairro</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" id="ibairro" placeholder="Bairro">
        </div>
        <div class="col-sm-5  ">
            <label for="lbcep" class="col-sm-5 control-label">CEP</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="icep" placeholder="CEP">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lblogradouro" class="col-sm-4 control-label">Logradouro</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="ilogradouro" placeholder="Informe o logradouro">
        </div>
      </div>
      <div class="form-group">
        <label for="lbnresidencia" class="col-sm-4 control-label">Nº Residência</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="inresidencia" placeholder="Nº">
        </div>
        <div class="col-sm-6">
          <label for="lbcomplemento" class="col-sm-6 control-label">Complemento</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="icomplemento" placeholder="Complemento">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbemail" class="col-sm-4 control-label">Email</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" id="iemail" placeholder="Informe Email">
        </div>
      </div>
      <div class="form-group">
        <label for="lblogin" class="col-sm-4 control-label">Nome Usuário</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="ilogin" placeholder="Login">
        </div>
        <div class="col-sm-4">
          <label for="lbsenha" class="col-sm-4 control-label">Senha</label>
          <div class="col-sm-8">
            <input type="password" class="form-control" id="isenha" placeholder="Senha">
          </div>
        </div>
      </div>
    </form>
  </div>
      <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">Alterar</button>
      </div>
    </div>
  </div>
</div>
</div>
<!--Formulario para alterar-->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Deletar cadastro</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning"> Você tem certeza que deseja deletar esse cadastro?</div>  
      </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-warning" >Sim</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Não</button>
        </div>
      </div>
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>