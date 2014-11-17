<?php
require '../includes/header.html';
require '../includes/menuAdmin.php';
//Pagina principal após o login
?>

<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-heading">
    <h3 class="panel-title">Alteração de Turma</h3>
  </div>
  <div class="panel-body">
  	<form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="lbcurso" class="col-sm-2 control-label">Curso</label>
          <div class="col-sm-5">
            <select class="form-control" id="slcurso"> <!--infomacao vem do banco-->
              <option>1 - Extensivo - Noturno 2014</option> 
              <option>2 - Intensivo - Matutino 2014</option>
            </select>
        </div>
      </div>
  		<div class="form-group">
  		<label for="lbtipo" class="col-sm-2 control-label">Sala</label>
          <div class="col-sm-2">
            <select class="form-control" id="sltipo"> <!--infomacao vem do banco-->
              <option>Sala - 1</option> 
              <option>Sala - 2</option>
              <option>Sala - 3</option>
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
            <select class="form-control" id="sldisc1"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc2"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc3"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc4"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc5"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc6"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc7"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc8"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc9"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-2">
        </div>  
        <div class="col-sm-5">
            <select class="form-control" id="sldisc10"> <!--infomacao vem do banco; Concatena ids-->
              <option>Biologia; José; 08:20 - 10:00; Segunda-Feira</option> 
              <option>História; João; 08:20 - 10:00; Terça-Feira</option>
              <option>Português; Manoel; 08:20 - 10:00; Quarta-Feira</option>
              <option>Física; Luiz; 08:20 - 10:00; Quinta-Feira</option>
              <option>Geografia; Emiliano; 08:20 - 10:00; Sexta-Feira</option>
              <option>Matemática A; Maria; 10:20 - 12:00; Segunda-Feira</option> 
              <option>Redação/Literatura; Ana; 10:20 - 12:00; Terça-Feira</option>
              <option>Química A; Jaco; 10:20 - 12:00; Quarta-Feira</option>
              <option>Matemática B; Alfredo; 10:20 - 12:00; Quinta-Feira</option>
              <option>Química B; Izabella; 10:20 - 12:00; Sexta-Feira</option>
            </select>
        </div>
      </div>
      <hr />
      &nbsp&nbsp&nbsp&nbsp
      <div class="form-group">
        <div class="col-sm-2">
        </div>
        <a href="gerenciaTurma.php" class="btn btn-warning" style="width: 25%;" id="cadastrar">Alterar</a>
    </div>
	</form> 
  </div>
</div>
  
 
<?php   
require '../includes/rodape.html';
require '../includes/footer.html';
?>