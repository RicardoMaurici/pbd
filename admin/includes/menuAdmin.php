<?php 
session_start();
header('Content-Type: text/html; charset=utf-8'); 
?>
<!-- Menu com seus devidos links -->
<nav id="navbar-example" class="navbar navbar-default navbar-static col-md-10 col-md-offset-1" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
          	<a class="navbar-brand" href="../paginas/mainAdmin.php">HOME</a>
        </div>
        <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li class="dropdown">
              <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Curso<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="gerenciaCurso.php">Gerenciar Curso</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="gerenciaDisciplina.php">Gerenciar Disciplinas</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="gerenciaTurma.php">Gerenciar Turma</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="gerenciaAula.php">Gerenciar Aula</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Gerência Inscrições<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="consultaGeral.php">Consulta Geral</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="selecionarAlunos.php">Selecionar Alunos</a></li>                 
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Colaboradores<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="gerenciaProfessor.php">Gerenciar Professor</a></li>
                <!--<li role="presentation"><a role="menuitem" tabindex="-1" href="cadastroProfessor.php">Cadastrar Professor</a></li>-->
                <li role="presentation"><a role="menuitem" tabindex="-1" href="gerenciaFuncionario.php">Gerenciar Funcionário</a></li>                 
              </ul>
            </li>

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

             <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Avaliação<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroAvaliacaoCurso.php">Curso</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="registroAvaliacaoProfessor.php">Professor</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Relatórios<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="relatorioSelecSemMat.php">Alunos Selecionados sem Matrícula</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="relatorioQtdInscritos.php">Quantidade de Alunos Inscritos por Curso</a></li>
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