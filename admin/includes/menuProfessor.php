<?php
session_start();
header('Content-Type: text/html; charset=utf-8'); 
?>
<!-- Menu com seus devidos links -->
<nav id="navbar-example" class="navbar navbar-default navbar-static col-md-10 col-md-offset-1" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
          	<a class="navbar-brand" href="../paginasProf/mainProfessor.php">HOME</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Aulas<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="gradeHorario.php">Horário</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Atendimento<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroAtendimento.php">Registrar</a></li>                                
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Avaliação<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroAvaliacaoCurso.php">Curso</a></li>                                
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