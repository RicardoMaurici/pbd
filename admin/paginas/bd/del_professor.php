<?php
include('../../../conecta.php');

	$idP=$_GET['id'];
		
	$sql="DELETE FROM professor WHERE idPessoa='$idP'";
		
	$result=mysql_query($sql);
	if(!$result){
		echo '<meta http-equiv="refresh" content="0;url=../deletarProfessor.php?id='.$idP.'">';
		echo '<script>alert("'.mysql_error().'")</script>';
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../gerenciaProfessor.php">';
		echo '<script>alert("Exclusão realizada com sucesso!")</script>';
	}
