<?php
include('../conecta.php');
require '../includes/header.html';
//Pagina principal após o login
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('#pais').change(function(){
        $('#ufs').load('js/busca_uf.php?pais='+$('#pais').val() ); 
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#ufs').change(function(){
        $('#cidade').load('js/busca_cidades.php?uf='+$('#ufs').val() ); 
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#cidade').change(function(){
        $('#bairro').load('js/busca_bairros.php?cidade='+$('#cidade').val() ); 
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#bairro').change(function(){
        $('#logradouro').load('js/busca_logradouros.php?bairro='+$('#bairro').val() ); 
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#logradouro').change(function(){
        $('#endereco').load('js/busca_enderecos.php?logradouro='+$('#logradouro').val() ); 
    });
  });
</script>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Candidato</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form" method="post" action="bd/cad_candidato.php">
  		<div class="form-group">
    		<label for="lbnomeCompleto" class="col-sm-2 control-label">Nome Completo</label>
    		<div class="col-sm-4">
      			<input type="text" class="form-control" required id="inomeCompleto" name="inomeCompleto" placeholder="Informe o nome completo">
    		</div>
    	</div>
    	<div class="form-group">
    		<label for="lbcpf" class="col-sm-2 control-label">CPF</label>
    		<div class="col-sm-2">
      			<input type="number" class="form-control" required id="icpf" name="icpf" placeholder="Informe o CPF">
    		</div>
    		<div class="col-sm-3">
      			<label for="lbrg" class="col-sm-2 control-label">RG</label>
      			<div class="col-sm-6">
      				<input type="number" class="form-control" id="irg" name="irg" placeholder="RG">
    			  </div>
    		</div>
    	</div>
      <div class="form-group">
        <label for="lbdtNascimento" class="col-sm-2 control-label">Data Nascimento</label>
        <div class="col-sm-2">
            <input type="date" class="form-control" id="idtNascimento" name="idtNascimento" placeholder="Data de nascimento">
        </div>
        <div class="col-sm-3">
            <label for="lbsexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-4">
              <select class="form-control"  id="slsexo" name="slsexo">
                <option value='F'>F</option>
                <option value='M'>M</option>
              </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbtel1" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="itel1" name="itel1" placeholder="Residêncial">
        </div>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="itel2" name="itel2" placeholder="Celular">
        </div>
        <div class="col-sm-1">
            <input type="text" class="form-control" id="itel3" name="itel3" placeholder="Outro">
        </div>
      </div>
      <div class="form-group">
        <label for="lbescolaridade" class="col-sm-2 control-label">Escolaridade</label>
          <div class="col-sm-4">
            <select class="form-control"  id="slescolaridade" name="slescolaridade"> <!--infomacao vem do banco-->
              <?php
              $sql="SELECT*FROM escolaridade WHERE idEscolaridade>2";
              $result=mysql_query($sql);
              while($row=mysql_fetch_array($result)){
              ?>
              <option value=<?php echo $row['idEscolaridade'];?>><?php echo $row['nivelEscolar']; ?></option>
              <?php } ?>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbeleitor" class="col-sm-2 control-label">Título de Eleitor</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="ieleitor" name="ieleitor" placeholder="Título de Eleitor">
        </div>
      </div>
      <hr />
      <div class="form-group">
        <label for="lbpais" class="col-sm-2 control-label">País</label>
          <div class="col-sm-2">
            <select class="form-control"  name="pais" id="pais"> <!--infomacao vem do banco-->
            <?php
              $sql="SELECT*FROM pais";
              $result=mysql_query($sql);
              while($row=mysql_fetch_array($result)){
            ?>
              <option value=<?php echo $row[0];?>><?php echo $row[1]; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="col-sm-4">
            <label for="lbuf" class="col-sm-2 control-label">UF</label>
            <div class="col-sm-4">
              <select class="form-control"  id="ufs" name="ufs"><!--infomacao vem do banco-->
                <option value="0" >Selecione a UF</option>
              </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbcidade" class="col-sm-2 control-label">Cidade</label>
          <div class="col-sm-4">
            <select class="form-control" id="cidade" name="cidade" > <!--infomacao vem do banco-->
              <option value="0" >Selecione a cidade</option>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbbairro" class="col-sm-2 control-label">Bairro</label>
        <div class="col-sm-3">
            <select class="form-control" id="bairro" name="bairro" > <!--infomacao vem do banco-->
              <option value="0" >Selecione o bairro</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="lblogradouro" class="col-sm-2 control-label">Logradouro</label>
        <div class="col-sm-4">
            <select class="form-control" id="logradouro" name="logradouro" > <!--infomacao vem do banco-->
              <option value="0" >Selecione o logradouro</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="lbnresidencia" class="col-sm-2 control-label">Endereço </label>
        <div class="col-sm-4">
            <select class="form-control" id="endereco" name="endereco" > <!--infomacao vem do banco-->
              <option value="0" >Selecione o endereço</option>
            </select>
        </div>
      </div>
      <hr />
      <div class="form-group">
        <label for="lbemail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="iemail" name="iemail" placeholder="Informe Email">
        </div>
      </div>
      <div class="form-group">
        <label for="lbsenha" class="col-sm-2 control-label">Senha</label>
        <div class="col-sm-2">
            <input type="password" class="form-control" required id="isenha" name="isenha" placeholder="Senha">
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <input name="cadastrar" type="submit" class="btn btn-primary" style="width:25%;" id="cadastrar" value="Cadastrar">
      </div>
    </form>
  </div>
  </div>  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>