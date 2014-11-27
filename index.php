<?php
include('conecta_aluno.php');
//Verifica o login e redireciona a pagina 
if(isset($_POST['login'])){
	$login = addslashes(trim($_POST['login']));
	$senha = addslashes(trim($_POST['senha']));
	if(empty($login)){
		echo '<script>alert("Login incorreto!")</script>';
		echo '<script>history.back()</script>';
	}elseif(empty($senha)){
		echo '<script>alert("Senha incorreta!")</script>';
		echo '<script>history.back()</script>';
	}
	else{
		$login=(!get_magic_quotes_gpc()) ? addslashes($login):$login;
		$senha=(!get_magic_quotes_gpc()) ? addslashes($senha):$senha;
	}
	$sql = "SELECT * FROM candidato WHERE CPF = '$login' AND senha = '$senha'";
	$result=mysql_query($sql) or die (mysql_error());
	if(mysql_num_rows($result)==0){
		echo '<script>alert ("Login e/ou senha incorretos!")</script>';
		echo '<script>history.back()</script>';
	}else{
		session_start();
		$_SESSION['login']=$login;
		$_SESSION['senha']=$senha;
		header("Location:paginas/mainAluno.php");
	}
	
}
require 'includes/headerInicio.html';
?>

<div class="container">
	<a href="admin/index.php" class="label label-success" style="margin-left:1000px;" id="restrito">Acesso Restrito</a>
	<!-- Login para area de admin, funcionarios ou professores -->
	<div class="row">
		<div class="col-md-3 col-md-offset-4">
			<form role="form" class="form-signin" action="index.php" method="post">
        		<h2 class="form-signin-heading" style="text-align: center;">Autenticação Aluno</h2>
        		<input type="text" autofocus="" name="login" required="" placeholder="Login (CPF)" class="form-control">
        		<input type="password" name="senha"  placeholder="Senha" class="form-control">
        		</br>
        		<!--<a href="paginas/mainAluno.php" class="btn btn-lg btn-primary btn-block" name="acesso">Entrar</a>-->
        		<button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
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