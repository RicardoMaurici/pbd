<?php
include('../../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../index.php");
}else{
	if(isset($_POST['alterar'])){
		$idDI=$_GET['idD'];
		$idPI=$_GET['idP'];
		$idHI=$_GET['idH'];
		$temp=$_POST['profDisc'];
		$temp1=explode(".",$temp);
		$idP=$temp1[0];
		$idD=$temp1[1];
		$idH=$_POST['hrSemana'];
		
		//precisa verificar se o mesmo prof nao esta lecionando outra disc no mesmo horario
		$sqlTemp="SELECT * FROM aula";
		$resultTemp=mysql_query($sqlTemp);
		while($row=mysql_fetch_array($resultTemp)){
			$existe=false;
			if($row['idPessoa']==$idP){
				if($row['idHorario']==$idH){
					$existe=true;
					break;
				}
			}
		}
		if($existe==false){
			$sql="INSERT INTO aula (idPessoa,idDisciplina, idHorario)
			VALUES ('$idP', '$idD', '$idH')";

			$sql="UPDATE aula SET idPessoa='$idP', idDisciplina='$idD', idHorario='$idH' 
			WHERE idDisciplina='$idDI' and idPessoa='$idPI' and idHorario='$idHI'";
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../alterarAula.php?idP='.$idPI.'&idD='.$idDI.'&idH='.$idHI.'">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../gerenciaAula.php">';
			echo '<script>alert("Alteração realizada com sucesso!")</script>';
		
		}
			
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../alterarAula.php?idP='.$idPI.'&idD='.$idDI.'&idH='.$idHI.'">';
		echo '<script>alert("Professor já está lecionando nesse horário")</script>';
	}
}
}
