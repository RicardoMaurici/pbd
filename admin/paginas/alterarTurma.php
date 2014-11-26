<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
include('../../conecta.php');
//Pagina principal após o login
if(isset($_GET['turma'])){

          $t = $_GET['turma'];
          $s= "SELECT  idCurso,idSala  FROM Turma WHERE idTurma = $t limit 1";
          $c = mysql_fetch_array(mysql_query($s));

          $sq = "SELECT `idPessoa`,`idDisciplina`,`idHorario` FROM `Turma` WHERE `idTurma` = $t";
          $rs = mysql_query($sq);
          $e_turma =  array();
          $z = 0;
          while($row=mysql_fetch_array($rs)){
            $e_turma[$z][0] = $row['idPessoa'];
            $e_turma[$z][1] = $row['idDisciplina'];
            $e_turma[$z][2] = $row['idHorario'];
            $z++;
          }
}
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Alteração de Turma</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" role="form" method="post" action="gerenciaTurma.php">
      <input type="hidden" name="alterar">
      <input type="hidden" name="idTurma" value="<?php echo $t; ?>">
      <div class="form-group">
        <label for="lbcurso" class="col-sm-2 control-label">Curso</label>
          <div class="col-sm-5">

           <select name="idCurso" class="form-control" id="slcurso"> <!--infomacao vem do banco-->
<?php
          
           $sql = "SELECT  idCurso, concat(idCurso,' - ',tipo,' - ',turno,' ', year(dtInicioInscricao)) FROM Curso ";
           $result = mysql_query($sql);
           while($row=mysql_fetch_array($result)){
                $s = '';
              if($row['idCurso'] == $c['idCurso'])
                $s = 'selected';
?>
              <option <?php echo $s.' value='. $row['idCurso'];?>><?php echo $row[1]; ?></option>
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
              $s = '';
              if($row['idSala'] == $c['idSala'])
                $s = 'selected';
?>
              <option <?php echo $s.' value='. $row['idSala'];?>><?php echo'Sala - '. $row['idSala']; ?></option>
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
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(0, $e_turma)){
                $ax = array_diff($e_turma[0], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="2" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(1, $e_turma)){
                $ax = array_diff($e_turma[1], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="3" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(2, $e_turma)){
                $ax = array_diff($e_turma[2], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="4" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(3, $e_turma)){
                $ax = array_diff($e_turma[3], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="5" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(4, $e_turma)){
                $ax = array_diff($e_turma[4], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="6" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(5, $e_turma)){
                $ax = array_diff($e_turma[5], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="7" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(6, $e_turma)){
                $ax = array_diff($e_turma[6], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="8" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(7, $e_turma)){
                $ax = array_diff($e_turma[7], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="9" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(8, $e_turma)){
                $ax = array_diff($e_turma[8], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>
             <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
           <select name="10" class="form-control" id="sldisc1" style="text-align:center;" > <!--infomacao vem do banco; Concatena ids-->
            
<?php
           $sql="SELECT a.`idPessoa`, p.nomeCompleto, a.`idDisciplina`, d.nome,a.`idHorario`, concat(DATE_FORMAT(h.hrInicio,'%H:%i'), ' - ',DATE_FORMAT(h.hrFim,'%H:%i')) as horario,
            ds.nomeDia FROM Aula a inner join Professor p on p.idPessoa = a.idPessoa join Disciplina d on a.`idDisciplina` = d.`idDisciplina` join 
            horario h on a.`idHorario` = h.`idHorario` join horario_dia hd on hd.`idHorario` = a.`idHorario` join DiaSemana ds on ds.`idDia` = hd.`idDia`";
           $result=mysql_query($sql);
           $x;
           $auxSelect = true;
           while($row=mysql_fetch_array($result)){
              $s = '';
              $x = array($row['idPessoa'],$row['idDisciplina'],$row['idHorario']);
              if(array_key_exists(9, $e_turma)){
                $ax = array_diff($e_turma[9], $x);
                if(sizeof($ax) == 0){
                  $s = 'selected';
                  $auxSelect = false;
                }
              }
?>
              <option <?php echo $s.' value='.$row['idPessoa'].','.$row['idDisciplina'].','.$row['idHorario'];?>><?php echo $row['nome'].'; '.$row['nomeCompleto'].'; '.$row['horario'].'; '.$row['nomeDia']; ?></option>
<?php              
            }

            if($auxSelect)
              echo '<option selected >Selecione aqui</option>';        
?>
          </select>   
        </div>
      </div>


      <hr />
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <button type="submit" class="btn btn-warning" style="width: 25%;" id="cadastrar">Alterar</button>
    </div>
	</form> 
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>