<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Cadastro de Avaliação - Curso - </h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
		<div class="form-group">
  			<label for="lbdoador" class="col-sm-2 control-label">Curso</label>
			<div class="col-sm-5">
    			<select class="form-control" id="sldoador">
      				<option>1 - Extensivo - Noturno - 2014/2</option>
      				<option>2 - Intensivo - Matutino - 2014</option>
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
			<label for="lbexpectativa" class="col-sm-2 control-label">Espaço do Curso</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliaespaco" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Material</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliamaterial" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Grade de Horários</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliagrade" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Disciplinas</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliadisciplina" id="avaliacao10" value="option10"> 10
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
			<label for="lbexpectativa" class="col-sm-2 control-label">Sistema de Inscrição</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao0" value="option0" checked="checked"> 0
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao1" value="option1"> 1
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao2" value="option2"> 2
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao3" value="option3"> 3
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao4" value="option4"> 4
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao5" value="option5"> 5
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao6" value="option6"> 6
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao7" value="option7"> 7
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao8" value="option8"> 8
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao9" value="option9"> 9
			</label>
			<label class="radio-inline">
  				<input type="radio" name="avaliasistema" id="avaliacao10" value="option10"> 10
			</label>
		</div>

		<div class="form-group">
			<label for="lbexpectativa" class="col-sm-2 control-label">Sugestões</label>
			<div class="col-sm-5">
				<textarea class="form-control" rows="3">Deixa aqui suas sugestões para o curso</textarea>
			</div>
		</div>

		<hr />
	</div>
	<div class="form-group">
    	<div class="col-sm-2">
        </div>
      	<button type="button" class="btn btn-primary" style="width: 25%;" id="gerarContrato">Cadastrar Avaliação</button>
    </div>

</form>
</div>
</div>

<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>
	