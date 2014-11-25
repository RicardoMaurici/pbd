<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Turma</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form" method="post" action="gerenciaTurma.php">
      <input type="hidden" name="cadastrar">
      <div class="form-group">
        <label for="lbcurso" class="col-sm-2 control-label">Curso</label>
          <div class="col-sm-5">
           <select name="idCurso" class="form-control" id="slcurso"> <!--infomacao vem do banco-->
<?php
           $sql="SELECT  idCurso, concat(idCurso,' - ',tipo,' - ',turno,' ', year(dtInicioInscricao)) FROM Curso ";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option  value=<?php echo $row['idCurso'];?>><?php echo $row[1]; ?></option>
<?php }
?>
            </select>
        </div>
      </div>
  		<div class="form-group">
  		<label for="lbtipo" class="col-sm-2 control-label">Sala</label>
          <div class="col-sm-2">
            <select name="idSala" class="form-control" id="sltipo"> <!--infomacao vem do banco-->
<?php
           $sql="SELECT  idSala FROM Sala ";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option  value=<?php echo $row['idSala'];?>><?php echo'Sala - '. $row['idSala']; ?></option>
<?php }
?>
            </select>
          </div>
		</div>
    <hr />
    <div class="form-group">
        <label for="lblistdisc" class="col-sm-2 control-label">Disciplinas da Turma:</label>
    </div>
      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="1" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            <option selected >Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php }
?>
      
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="2" class="form-control" id="sldisc2" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="3" class="form-control" id="sldisc3" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="4" class="form-control" id="sldisc4" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="5" class="form-control" id="sldisc5" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="6" class="form-control" id="sldisc6" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="7" class="form-control" id="sldisc7" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="8" class="form-control" id="sldisc8" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="9" class="form-control" id="sldisc9" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select name="10" class="form-control" id="sldisc10" style="text-align:center;"> <!--infomacao vem do banco; Concatena ids-->
              <option selected>Selecione aqui</option>
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           while($row=mysql_fetch_array($result)){
?>
              <option value=<?php echo $row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['nome'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option><?php }
?>
            </select>
        </div>
      </div>
      <hr />
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <button type="submit"  class="btn btn-primary" style="width: 25%;" id="cadastrar">Cadastrar</button>
    </div>
	</form> 
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>