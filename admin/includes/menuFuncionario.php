<?php
session_start();
header('Content-Type: text/html; charset=utf-8'); 
?>
<!-- Menu com seus devidos links -->
<nav id="navbar-example" class="navbar navbar-default navbar-static col-md-10 col-md-offset-1" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
          	<a class="navbar-brand" href="../paginasFunc/mainFuncionario.php" >HOME</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Registros<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="recebimentoMaterial.php">Recebimento Material</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="recebimentoDocumentoAluno.php">Recebimento Documento Aluno</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroEntregaMaterialAluno.php">Entrega Material Aluno</a></li>             
                <li role="presentation"><a role="menuitem" tabindex="-1" href="pedidoMaterial.php">Pedido Material</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroDoacao.php">Doação</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroFornecedor.php">Fornecedor</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroParceiro.php">Parceiro</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php 
              $user=$_SESSION['login'];
            ?>
            <li><?php echo '<a href="../index.php">Sair  ['.$user.'] </a>'?></li>
          </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container-fluid -->
</nav> <!-- /navbar-example -->