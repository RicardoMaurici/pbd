<?php
include('../../conecta.php');
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro Avaliação de Professor</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form" method="post" action="bd/cad_avali_prof.php">
		<div class="form-group">
  			<label for="lbprofessor" class="col-sm-2 control-label">Professor</label>
			<div class="col-sm-5">
    			<select class="form-control" id="slprofessor" name="sqlprofessor">
              <?php
              $sql="SELECT*FROM professor";
              $result=mysql_query($sql);
              while($row=mysql_fetch_array($result)){
              ?>
              <option value=<?php echo $row['idPessoa'];?>><?php echo $row['nomeCompleto']; ?></option>
              <?php } ?>
    			</select>
  			</div>
		</div>
		<hr />
		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Expectativa Atendida</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao0" value="0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao1" value="1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao2" value="2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao3" value="3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao4" value="4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao5" value="5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao6" value="6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao7" value="7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao8" value="8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao9" value="9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao10" value="10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Planejamento Aula</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao0" value="0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao1" value="1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao2" value="2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao3" value="3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao4" value="4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao5" value="5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao6" value="6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao7" value="7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao8" value="8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao9" value="9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao10" value="10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Atendimento</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao0" value="0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao1" value="1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao2" value="2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao3" value="3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao4" value="4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao5" value="5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao6" value="6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao7" value="7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao8" value="8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao9" value="9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao10" value="10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Transmissão Materia</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao0" value="0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao1" value="1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao2" value="2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao3" value="3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao4" value="4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao5" value="5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao6" value="6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao7" value="7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao8" value="8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao9" value="9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao10" value="10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Pontualidade</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao0" value="0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao1" value="1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao2" value="2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao3" value="3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao4" value="4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao5" value="5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao6" value="6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao7" value="7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao8" value="8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao9" value="9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao10" value="10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Apresentação da Aula</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao0" value="0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao1" value="1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao2" value="2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao3" value="3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao4" value="4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao5" value="5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao6" value="6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao7" value="7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao8" value="8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao9" value="9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao10" value="10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Sugestões</label>
			<div class="col-sm-5">
				<textarea class="form-control" rows="3" name="sugestao" id="sugestao">Deixa aqui suas sugestões para o professor</textarea>
			</div>
		</div>

		<hr />
	</div>
	<div class="form-group">
    	<div class="col-sm-2">
        </div>
        <input name="cadastrar" type="submit" class="btn btn-primary" style="width:25%;" id="cadastrar" value="Cadastrar Avaliação">
    </div>

</form>
</div>
</div>

<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>
	