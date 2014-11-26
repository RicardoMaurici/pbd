<?php
include('../conecta.php');
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

	$sql = "SELECT * FROM funcionario WHERE nomeUsuario = '$login' AND senha = '$senha'";
	$result=mysql_query($sql) or die (mysql_error());
	if(mysql_num_rows($result)==0){
		$sql = "SELECT * FROM professor WHERE nomeUsuario = '$login' AND senha = '$senha'";
		$result=mysql_query($sql) or die (mysql_error());
		if(mysql_num_rows($result)==0){
			echo '<script>alert ("Login e/ou senha incorretos!")</script>';
			echo '<script>history.back()</script>';
		}else{
			session_start();
			$_SESSION['login']=$login;
			$_SESSION['senha']=$senha;
			header("Location:paginasProf/mainProfessor.php");	
		}
	}else{
		$temp=mysql_fetch_array($result);
		$adm=$temp['privilegio'];
		if($adm==1){
			session_start();
			$_SESSION['login']=$login;
			$_SESSION['senha']=$senha;
			echo '<script>alert("'.$_SESSION['login'].'")</script>';
			header("Location:paginas/mainAdmin.php");
		}else{
			session_start();
			$_SESSION['login']=$login;
			$_SESSION['senha']=$senha;
			header("Location:paginasFunc/mainFuncionario.php");
		}
	}
	
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
        		<input type="password" name="senha"  placeholder="Senha" class="form-control">
        		</br>
        		<button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
      		</form>
		</div>      
	</div>

</div>

<?php    
require 'includes/footer.html';
?>