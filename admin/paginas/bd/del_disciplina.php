<?php
include('../../../conecta.php');

	$idD=$_GET['id'];
		
	$sql="DELETE FROM disciplina WHERE idDisciplina='$idD'";
		
	$result=mysql_query($sql);
	if(!$result){
		echo '<meta http-equiv="refresh" content="0;url=../deletarDisciplina.php?id='.$idD.'">';
		echo '<script>alert("'.mysql_error().'")</script>';
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../gerenciaDisciplina.php">';
		echo '<script>alert("Exclusão realizada com sucesso!")</script>';
	}
