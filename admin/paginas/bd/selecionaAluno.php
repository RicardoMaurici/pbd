<?php
include('../../../conecta.php');

	$idInscricao=$_GET['id'];

	$sql="UPDATE inscricao SET selecionado=1 
		WHERE idInscricao='$idInscricao'";


		
	$result=mysql_query($sql);
	if(!$result){
		echo '<meta http-equiv="refresh" content="0;url=../selecionarAlunos.php?id='.$idInscricao.'">';
		echo '<script>alert("'.mysql_error().'")</script>';
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../selecionarAlunos.php">';
		echo '<script>alert("Cadastro realizado com sucesso!")</script>';
	}