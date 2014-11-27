<?php
include('../../conecta_aluno.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../registroAvaliacaoProfessor.php");
}else{
	if(isset($_POST['cadastrar'])){
		$avaliaexpectativa=$_POST['avaliaexpectativa'];
		$avaliaespaco=$_POST['avaliaespaco'];
		$avaliamaterial=$_POST['avaliamaterial'];
		$avaliagrade=$_POST['avaliagrade'];
		$avaliadisciplina=$_POST['avaliadisciplina'];
		$avaliaatendimento=$_POST['avaliaatendimento'];
		$avaliasistema=$_POST['avaliasistema'];
		$sugestao=$_POST['sugestao'];
		$slcurso=$_POST['slcurso'];
		$sql="INSERT INTO avaliacaocurso (idCurso,dtAvaliacao, sugestao, expectativa, espaco, material, gradeHorario, disciplina, atendimento, sistema)
		VALUES ('$slcurso', CURDATE(), '$sugestao', '$avaliaexpectativa', '$avaliaespaco', '$avaliamaterial', '$avaliagrade','$avaliadisciplina','$avaliaatendimento', '$avaliasistema')";

		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../cadastroAvaliacaoCurso.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../mainAluno.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
		}
	}
}