<?php
include('../../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../paginas/gerenciaDisciplina.php");
}else{
	if(isset($_POST['alterar'])){
		$idD=$_GET['id'];
		$disciplina=$_POST['iDisciplina'];
		
		$sql="UPDATE disciplina SET nome='$disciplina' WHERE idDisciplina='$idD'";
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../alterarDisciplina.php?id='.$idD.'">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			$sqlD="DELETE FROM disciplina_material WHERE idDisciplina='$idD'";
			$resultD=mysql_query($sqlD) or die(mysql_error()); 
			foreach($_POST['materiais'] as $material) {
				$sql="INSERT INTO disciplina_material (idDisciplina, idMaterial)
				VALUES ('".$idD."','$material')";
				$result=mysql_query($sql);
			}
			if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../alterarDisciplina.php?id='.$idD.'">';
			echo '<script>alert("'.mysql_error().'")</script>';
			}else{
			echo '<meta http-equiv="refresh" content="0;url=../gerenciaDisciplina.php">';
			echo '<script>alert("Alteracao realizada com sucesso!")</script>';
			}

		}
	}
}