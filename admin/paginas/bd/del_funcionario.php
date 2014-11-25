<?php
include('../../../conecta.php');

	$idF=$_GET['id'];
		
	$sql="DELETE FROM funcionario WHERE idPessoa='$idF'";
		
	$result=mysql_query($sql);
	if(!$result){
		echo '<meta http-equiv="refresh" content="0;url=../deletarFuncionario.php?id='.$idF.'">';
		echo '<script>alert("'.mysql_error().'")</script>';
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../gerenciaFuncionario.php">';
		echo '<script>alert("Exclusão realizada com sucesso!")</script>';
	}
