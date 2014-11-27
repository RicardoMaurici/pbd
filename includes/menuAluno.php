<?php 
include ('../conecta.php');
session_start();
header('Content-Type: text/html; charset=utf-8'); 
?> 
<!-- Menu com seus devidos links -->
<nav id="navbar-example" class="navbar navbar-default navbar-static col-md-10 col-md-offset-1" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
          	<a class="navbar-brand" href="../paginas/mainAluno.php">HOME</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
              <a id="drop1" role="button" class="dropdown-toggle" href="gerenciaMinhasInscricoes.php" >Fazer Matrícula</a>
            </li>

            <li class="dropdown">
              <a id="drop2" role="button" class="dropdown-toggle" href="situacao.php">Situação</a>
            </li>

            <li class="dropdown">
              <a id="drop2" role="button" class="dropdown-toggle" href="gradeHorario.php">Grade de Horários</a>
            </li>

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Avaliação<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroAvaliacaoCurso.php">Curso</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroAvaliacaoProfessor.php">Professor</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a id="drop2" role="button" class="dropdown-toggle" href="meuCadastro.php">Meu Cadastro</a>
            </li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php 
              $cpf=$_SESSION['login'];
              $sql="SELECT nomeCompleto,idPessoa FROM candidato WHERE cpf=$cpf";
              $temp=mysql_query($sql) or die(mysql_error());
              $nome=mysql_fetch_array($temp);
              $_SESSION['idAluno'] = $nome['idPessoa'];
            ?>
            <li><?php echo '<a href="../index.php">Sair  ['.$nome[0].'] </a>'?></li>
          </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container-fluid -->
</nav> <!-- /navbar-example -->