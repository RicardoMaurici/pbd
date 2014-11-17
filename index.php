<?php
// Verifica o login e redireciona a pagina conforme o tipo de login
/*if(isset($_POST['login'])){
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

	if($_POST['login'] == admin)
		$extra = 'paginas/mainAdmin.php';
	elseif($_POST['login'] == funcionario)
		$extra = 'paginas/mainFuncionario.php';
	elseif($_POST['login'] == professor)
		$extra = 'paginas/mainProfessor.php';
	
	header("Location: http://$host$uri/$extra");
	exit;
}*/
require 'includes/headerInicio.html';
?>

<div class="container">
	<!-- Login para area de admin, funcionarios ou professores -->
	<div class="row">
		<div class="col-md-3 col-md-offset-4">
			<form role="form" class="form-signin" action="index.php" method="post">
        		<h2 class="form-signin-heading" style="text-align: center;">Autenticação Aluno</h2>
        		<input type="text" autofocus="" name="login" required="" placeholder="Login" class="form-control">
        		<input type="password" name="senha"  placeholder="Senha" class="form-control">
        		</br>
        		<a href="paginas/mainAluno.php" class="btn btn-lg btn-primary btn-block" name="acesso">Entrar</a>
        		<!--<button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>-->
        		<hr />
        		<div class="form-group">
        			<label for="lbcurso" class="col-sm-6 control-label">É novo aqui?</label>
          			<a href="paginas/cadastroCandidato.php" class="btn btn-primary" style="width: 50%;" id="cadastrar">Cadastre-se</a>
      			</div>
      		</form>
		</div>      
	</div>

</div>

<?php    
require 'includes/footerInicio.html';
?>