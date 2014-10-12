<?php
require 'includes/header.html';
if($_SERVER['REQUEST_METHOD'])
	echo $_POST["login"];
?>

<div class="container">

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