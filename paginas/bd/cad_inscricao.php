<?php
include('../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../mainAluno.php");
}else{
	if(isset($_POST['cadastrar'])){
		$idCurso=$_GET['id'];
		$nomepai=$_POST['inomePai'];
		$nomeMae=$_POST['inomeMae'];
		$trabalha=$_POST['sltrabalha'];
		$filhos=$_POST['filhos'];
		$nacionalidade=$_POST['nacionalidade'];
		$estadocivil=$_POST['slestadocivil'];
		$renda=$_POST['slrenda'];

		session_start();
		$cpf=$_SESSION['login'];
        $sql="SELECT idPessoa FROM candidato WHERE cpf=$cpf";
        $temp=mysql_query($sql) or die(mysql_error());
        $pessoa=mysql_fetch_array($temp);
        $idPessoa=$pessoa[0];

		if(!($filhos<0)){
			$sql="INSERT INTO inscricao (nomePai,nomeMae, dtInscricao, trabalha, filhos, nacionalidade, idRenda, idPessoa, idCurso, idEstadoCivil)
			VALUES ('$nomepai', '$nomeMae', CURDATE(), '$trabalha', '$filhos', '$nacionalidade', '$renda', '$idPessoa', '$idCurso', '$estadocivil')";
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../cadastraInscricao.php?id='.$idCurso.'">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../mainAluno.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
		}
			
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../cadastraInscricao.php?id='.$idCurso.'">';
		echo '<script>alert("Filho não pode ser negativo")</script>';
	}
}
}
