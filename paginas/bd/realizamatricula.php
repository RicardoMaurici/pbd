<?php
include('../../conecta.php');


		$id=$_GET['id'];
		
		$sql="INSERT INTO matricula (desistente)
		VALUES (0)";	
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../gerenciaMinhasInscricoes.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			$idMat=mysql_insert_id();
			$sqlI="UPDATE inscricao SET idMatricula='$idMat' WHERE idInscricao='$id'";
			mysql_query($sqlI) or die (mysql_error());
			$sqlTemp="SELECT idCurso FROM inscricao WHERE idInscricao='$id'";
			$temp=mysql_query($sqlTemp) or die (mysql_error());
			$tempa=mysql_fetch_array($temp);
			$idC=$tempa['idCurso'];

			mysql_query("CALL verificaMaterialObrigatorio('$idMat','$idC'");

				echo '<meta http-equiv="refresh" content="0;url=../gerenciaMinhasInscricoes.php">';
				echo '<script>alert("Cadastro realizado com sucesso!")</script>';

		}
	
