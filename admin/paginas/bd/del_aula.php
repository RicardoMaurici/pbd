<?php
include('../../../conecta.php');

	$idDI=$_GET['idD'];
	$idPI=$_GET['idP'];
	$idHI=$_GET['idH'];
		
	$sql="DELETE FROM aula WHERE idDisciplina='$idDI' and idPessoa='$idPI' and idHorario='$idHI'";
		
	$result=mysql_query($sql);
	if(!$result){
		echo '<meta http-equiv="refresh" content="0;url=../deletarAula.php?idP='.$idPI.'&idD='.$idDI.'&idH='.$idHI.'">';
		echo '<script>alert("'.mysql_error().'")</script>';
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../gerenciaAula.php">';
		echo '<script>alert("Exclusão realizada com sucesso!")</script>';
	}
