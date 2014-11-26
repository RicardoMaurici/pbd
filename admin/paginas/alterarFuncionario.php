<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
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
    <h3 class="panel-title">Alteração de Funcionário</h3>
  </div>
  <div class="panel-body">
    <?php $id=$_GET['id']; ?>
    <form class="form-horizontal" role="form" method="post" action="bd/alt_funcionario.php?id=<?php echo $id?>">
      <?php
        $sqlf="SELECT*FROM funcionario WHERE idPessoa='$id'";
        $resultf=mysql_fetch_array(mysql_query($sqlf));
      ?>
      <div class="form-group">
        <label for="lbnomeCompleto" class="col-sm-2 control-label">Nome Completo</label>
        <div class="col-sm-3">
            <input type="text" class="form-control" required id="inomeCompleto" name="inomeCompleto" placeholder="Informe o nome completo" value="<?php echo "$resultf[nomeCompleto]"?>">
        </div>
        <div class="col-sm-2">
          <label>
            <?php
            if($resultf[privilegio]==1){ ?>
              Admin <input type="checkbox" id="acessoAdmin" checked name="acessoAdmin">
            <?php }else{ ?>
              Admin <input type="checkbox" id="acessoAdmin" name="acessoAdmin">
            <?php } ?>
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="lbcpf" class="col-sm-2 control-label">CPF</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" required id="icpf" name="icpf" placeholder="Informe o CPF" value="<?php echo "$resultf[CPF]"?>">
        </div>
        <div class="col-sm-3">
            <label for="lbrg" class="col-sm-2 control-label">RG</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="irg" name="irg" placeholder="RG" value="<?php echo "$resultf[RG]"?>">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbdtNascimento" class="col-sm-2 control-label">Data Nascimento</label>
        <div class="col-sm-2">
            <?php $dtNasc=date('d/m/Y',strtotime(str_replace('-', '/', $resultf['dtNascimento']))); ?>
            <input type="date" class="form-control" required id="idtNascimento" name="idtNascimento" placeholder="dd/mm/yyyy" value="<?php echo "$dtNasc"?>">
        </div>
        <div class="col-sm-3">
            <label for="lbsexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-4">
              <select class="form-control" id="slsexo" name="slsexo">
                <?php 
                if($resultf['sexo']=='F'){
                  echo '<option value="F" selected>F</option>';
                  echo '<option value="M" >M</option>';
                }else{
                  echo '<option value="F">F</option>';
                  echo '<option value="M" selected>M</option>';
                }
                ?>
              </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbtel1" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="itel1" name="itel1" placeholder="Residêncial" value="<?php echo "$resultf[telefone1]"?>">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="itel2" name="itel2" placeholder="Celular" value="<?php echo "$resultf[telefone2]"?>">
        </div>
      </div>
      <div class="form-group">
        <label for="lbpispasep" class="col-sm-2 control-label">Nº PIS/PASEP</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="ipispasep" name="ipispasep" placeholder="Informe o PIS/PASEP" value="<?php echo "$resultf[PISPASEP]"?>">
        </div>
        <div class="col-sm-4">
            <label for="lbsalario" class="col-sm-2 control-label">Salário</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" required id="isalario" name="isalario" placeholder="Salário" value="<?php echo "$resultf[salario]"?>">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbescolaridade" class="col-sm-2 control-label">Escolaridade</label>
          <div class="col-sm-4">
            <select class="form-control" id="slescolaridade" name="slescolaridade"> <!--infomacao vem do banco-->
              <?php
                $sql="SELECT*FROM escolaridade";
                $result=mysql_query($sql);
                while($row=mysql_fetch_array($result)){
                  if($row['idEscolaridade']==$resultf['idEscolaridade']){
              ?>
                    <option selected value=<?php echo $row['idEscolaridade'];?>><?php echo $row['nivelEscolar']; ?></option>
              <?php
                }else{ ?>
                  <option value=<?php echo $row['idEscolaridade'];?>><?php echo $row['nivelEscolar']; ?></option>
              <?php }} ?>
            </select>
          </div>
      </div>
      <div class="form-group">
        <label for="lbescolaridade" class="col-sm-2 control-label">Cargo</label>
          <div class="col-sm-4">
            <select class="form-control" id="cargo" name="cargo"> <!--infomacao vem do banco-->
              <?php
                $sql="SELECT*FROM cargo";
                $result=mysql_query($sql);
                while($row=mysql_fetch_array($result)){
                  if($row['idFuncao']==$resultf['idFuncao']){
              ?>
                    <option selected value=<?php echo $row['idFuncao'];?>><?php echo $row['descricao']; ?></option>
              <?php
                }else{ ?>
                  <option value=<?php echo $row['idFuncao'];?>><?php echo $row['descricao']; ?></option>
              <?php }} ?>
            </select>
          </div>
      </div>
      <hr />
      <div class="form-group">
        <label for="lbpais" class="col-sm-2 control-label">Endereço Antigo:</label>
        <div class="col-sm-4">
        <?php
        $endereco=$resultf['idEndereco'];
        
        $logradouro=mysql_fetch_array(mysql_query("SELECT l.idLogradouro, l.nomeRua, e.nResidencia, e.cep FROM endereco e INNER JOIN logradouro l 
          ON e.idLogradouro=l.idLogradouro and e.idEndereco='$endereco'"));
        $end="CEP: ".$logradouro[3]."; Nº: ".$logradouro[2];
        
        $bairro=mysql_fetch_array(mysql_query("SELECT b.idBairro, b.nomeBairro FROM logradouro l INNER JOIN bairro b 
          ON l.idBairro=b.idBairro and l.idLogradouro='$logradouro[0]'"));
        
        $cidade=mysql_fetch_array(mysql_query("SELECT c.idCidade, c.nomeCidade FROM bairro b INNER JOIN cidade c
         ON b.idCidade=c.idCidade and b.idBairro='$bairro[0]'"));
        
        $uf=mysql_fetch_array(mysql_query("SELECT u.idUF, u.nomeUF FROM cidade c INNER JOIN uf u 
          ON c.idUF=u.idUF and c.idCidade='$cidade[0]'"));
        
        $pais=mysql_fetch_array(mysql_query("SELECT p.nomePais FROM pais p INNER JOIN uf 
          ON p.idPais=uf.idPais and uf.idUF='$uf[0]'"));
        
        echo '<br />';
        echo "País: $pais[0] <br />
        UF: $uf[1] <br />
        Cidade: $cidade[1]<br />
        Bairro: $bairro[1] <br />
        Logradouro: $logradouro[1]<br />
        Endereço: $end<br />";
        ?>

      </div>
      </div>
      <hr />
      <div class="form-group">
        <label for="lbpais" class="col-sm-2 control-label">País</label>
          <div class="col-sm-2">
            <select class="form-control" name="pais" id="pais"> <!--infomacao vem do banco-->
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
              <select class="form-control" id="ufs" name="ufs"><!--infomacao vem do banco-->
                <option value="0" >Selecione a UF</option>
              </select>
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbcidade" class="col-sm-2 control-label">Cidade</label>
          <div class="col-sm-4">
            <select class="form-control" id="cidade" name="cidade"> <!--infomacao vem do banco-->
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
      <div class="form-group">
        <label for="lbcomplemento" class="col-sm-2 control-label">Complemento</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="icomplemento" name="icomplemento" placeholder="Complemento" value="<?php echo "$resultf[complemento]"?>">
        </div>
      </div>
      <div class="form-group">
        <label for="lbemail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="iemail" name="iemail" placeholder="Informe Email" value="<?php echo "$resultf[email]"?>">
        </div>
      </div>
      <div class="form-group">
        <label for="lblogin" class="col-sm-2 control-label">Nome Usuário</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" required id="ilogin" name="ilogin" placeholder="Login" value="<?php echo "$resultf[nomeUsuario]"?>">
        </div>
        <label for="lbsenha" class="col-sm-1 control-label">Senha</label>
        <div class="col-sm-1">
            <input type="password" class="form-control" required id="isenha" name="isenha" placeholder="Senha" value="<?php echo "$resultf[senha]"?>">
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
      <input type="submit" class="btn btn-warning" style="width: 25%;" id="alterar" name="alterar" value="Alterar">
    </div>
  </form>
  </div>
  </div>  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>