<?php
include('../../../conecta.php');

	$idDI=$_GET['idD'];
	$idPI=$_GET['idP'];
	$idHI=$_GET['idH'];
		
	$sqlT="SELECT idTurma FROM Turma WHERE idPessoa='$idPI' and idDisciplina='$idDI' and idHorario='$idHI'";
	$resultT=mysql_query($sqlT) or die (mysql_error());
	$turma=mysql_fetch_array($resultT);
	if($turma['idTurma']==NULL){
		$sql="DELETE FROM aula WHERE idDisciplina='$idDI' and idPessoa='$idPI' and idHorario='$idHI'";
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../deletarAula.php?idP='.$idPI.'&idD='.$idDI.'&idH='.$idHI.'">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../gerenciaAula.php">';
			echo '<script>alert("Exclusão realizada com sucesso!")</script>';
		}
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../deletarAula.php?idP='.$idPI.'&idD='.$idDI.'&idH='.$idHI.'">';
		echo '<script>alert("Não é possível deletar essa aula, há turma associada a ela")</script>';
	}
