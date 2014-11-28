<?php
include ('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Detalhes Cadastro de Aluno</h3>
  </div>
  <div class="panel-body">
    <?php 
                  $idPessoa=$_GET['id'];

                  $sql="SELECT * FROM candidato WHERE idPessoa='$idPessoa'";
                  $result=mysql_query($sql) or die (mysql_error());
                  $info=mysql_fetch_array($result);
    ?>
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="lbnomeCompleto" class="col-sm-2 control-label">Nome Completo</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="inomeCompleto" disabled placeholder="Informe o nome completo" value="<?php echo "$info[nomeCompleto]"?>">
        </div>
      </div>
      <div class="form-group">
        <label for="lbcpf" class="col-sm-2 control-label">CPF</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="icpf" disabled placeholder="Informe o CPF" value="<?php echo "$info[CPF]"?>">
        </div>
        <div class="col-sm-3">
            <label for="lbrg" class="col-sm-2 control-label">RG</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="irg" disabled placeholder="RG" value="<?php echo "$info[RG]"?>">
            </div>
        </div>
      </div>
      <div class="form-group">
        <label for="lbdtNascimento" class="col-sm-2 control-label">Data Nascimento</label>
        <div class="col-sm-2">
          <?php $dtNasc=date('d/m/Y',strtotime(str_replace('-', '/', $info['dtNascimento']))); ?>
            <input type="text" class="form-control" id="idtNascimento" disabled placeholder="Data de nascimento" value="<?php echo "$dtNasc"?>">
        </div>
        <div class="col-sm-3">
            <label for="lbsexo" class="col-sm-2 control-label">Sexo</label>
            <div class="col-sm-4">
              <select class="form-control" disabled id="slsexo">
                <?php 
                if($info['sexo']=='F'){
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
            <input type="text" class="form-control" id="itel1" disabled placeholder="Residêncial" value="<?php echo "$info[telefone1]"?>">
        </div>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="itel2" disabled placeholder="Celular" value="<?php echo "$info[telefone2]"?>">
        </div>
      </div>
      <div class="form-group">
        <label for="lbescolaridade" class="col-sm-2 control-label">Escolaridade</label>
          <div class="col-sm-4">
            <select class="form-control" disabled id="slescolaridade"> <!--infomacao vem do banco-->
              <?php
                $sql="SELECT*FROM escolaridade WHERE idEscolaridade>2";
                $result=mysql_query($sql);
                while($row=mysql_fetch_array($result)){
                  if($row['idEscolaridade']==$info['idEscolaridade']){
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
        <label for="lbeleitor" class="col-sm-2 control-label">Título de Eleitor</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" id="ieleitor" disabled placeholder="Título de Eleitor" value="<?php echo "$info[tituloEleitor]"?>">
        </div>
      </div>
      <hr />
            <div class="form-group">
        <label for="lbpais" class="col-sm-2 control-label">Endereço Antigo:</label>
        <div class="col-sm-4">
        <?php
        $endereco=$info['idEndereco'];
        
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
        <label for="lbcomplemento" desabled class="col-sm-2 control-label">Complemento</label>
        <div class="col-sm-2">
            <input type="text" class="form-control" disabled id="icomplemento" name="icomplemento" placeholder="Complemento" value="<?php echo "$info[complemento]"?>">
        </div>
      </div>
      <hr />
      <div class="form-group">
        <label for="lbemail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-4">
          <input type="email" class="form-control" id="iemail" disabled placeholder="Informe Email" value="<?php echo "$info[email]"?>">
        </div>
      </div>
      <div class="form-group">
        <label for="lbsenha" class="col-sm-2 control-label">Senha</label>
        <div class="col-sm-2">
            <input type="password" class="form-control" id="isenha" disabled placeholder="Senha" value="<?php echo "$info[senha]"?>">
        </div>
      </div>
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
      <a href="consultaGeral.php" class="btn btn-primary" style="width: 25%;" id="retornaCunsultaGeral">Voltar</a>
    </div>
  </form>
  </div>
  </div>  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>