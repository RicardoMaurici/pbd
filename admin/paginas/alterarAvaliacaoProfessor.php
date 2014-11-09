<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Avaliação - Professor - </h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
		<div class="form-group">
  			<label for="lbdoador" class="col-sm-2 control-label">Professor</label>
			<div class="col-sm-5">
    			<select class="form-control" id="sldoador">
      				<option>Manoel</option>
      				<option>Zacarias</option>
    			</select>
  			</div>
		</div>
		<hr />
		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Expectativa Atendida</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaexpectativa" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Planejamento Aula</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaplanejamento" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Atendimento</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaatendimento" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Transmissão Materia</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliatransmissao" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Pontualidade</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliapontualidade" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Apresentação da Aula</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaapresentacao" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Sugestões</label>
			<div class="col-sm-5">
				<textarea class="form-control" rows="3">Deixa aqui suas sugestões para o professor</textarea>
			</div>
		</div>

		<hr />
	</div>
	<div class="form-group">
    	<div class="col-sm-2">
        </div>
      	<button type="button" class="btn btn-warning" style="width: 25%;" id="gerarContrato">Alterar Avaliação</button>
    </div>

</form>
</div>
</div>

<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>
	