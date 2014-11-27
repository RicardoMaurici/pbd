<?php
include('../../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../registroAvaliacaoProfessor.php");
}else{
	if(isset($_POST['cadastrar'])){
		$avaliaexpectativa=$_POST['avaliaexpectativa'];
		$avaliaplanejamento=$_POST['avaliaplanejamento'];
		$avaliaatendimento=$_POST['avaliaatendimento'];
		$avaliatransmissao=$_POST['avaliatransmissao'];
		$avaliapontualidade=$_POST['avaliapontualidade'];
		$avaliaapresentacao=$_POST['avaliaapresentacao'];
		$sugestao=$_POST['sugestao'];
		$sqlprofessor=$_POST['sqlprofessor'];
		$sql="INSERT INTO avaliacaoprofessor (idPessoa,dtAvaliacao, sugestao, expectativa, planejamento, atendimento, transmissao, pontualidade, apresentacao)
		VALUES ('$sqlprofessor', CURDATE(), '$sugestao', '$avaliaexpectativa', '$avaliaplanejamento', '$avaliaatendimento', '$avaliatransmissao','$avaliapontualidade','$avaliaapresentacao')";

		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../cadastroAvaliacaoProfessor.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../registroAvaliacaoProfessor.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
		}
	}
}