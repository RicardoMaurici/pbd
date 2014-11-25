<?php
include('../../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../gerenciaDisciplina.php");
}else{
	if(isset($_POST['cadastrar'])){
		$disciplina=$_POST['iDisciplina'];
		//$material=$_POST['materiais'];
		
		$sql="INSERT INTO disciplina (nome)
		VALUES ('$disciplina')";
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../cadastroDisciplina.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			$idDisciplina=mysql_insert_id();
			foreach($_POST['materiais'] as $material) {
				$sql="INSERT INTO disciplina_material (idDisciplina, idMaterial)
				VALUES ('".$idDisciplina."','$material')";
				$result=mysql_query($sql);
			}
			if(!$result){
				echo '<meta http-equiv="refresh" content="0;url=../cadastroDisciplina.php">';
				echo '<script>alert("'.mysql_error().'")</script>';
			}else{
				echo '<meta http-equiv="refresh" content="0;url=../gerenciaDisciplina.php">';
				echo '<script>alert("Cadastro realizado com sucesso!")</script>';
			}

		}
	}
}