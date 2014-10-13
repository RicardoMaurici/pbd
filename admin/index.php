<?php
// Verifica o login e redireciona a pagina conforme o tipo de login
if(isset($_POST['login'])){
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
	$extra = 'paginas/main.php';
	header("Location: http://$host$uri/$extra");
	exit;
}
require 'includes/header.html';
?>

<div class="container">
	<!-- Login para area de admin, funcionarios ou professores -->
	<div class="row">
		<div class="col-md-3 col-md-offset-4">
			<form role="form" class="form-signin" action="index.php" method="post">
        		<h2 class="form-signin-heading">&nbsp&nbsp&nbsp&nbsp Autenticação</h2>
        		<input type="text" autofocus="" name="login" required="" placeholder="Login" class="form-control">
        		<input type="password" name="senha" required="" placeholder="Senha" class="form-control">
        		</br>
        		<button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
      		</form>
		</div>      
	</div>

</div>

<?php    
require 'includes/footer.html';
?>