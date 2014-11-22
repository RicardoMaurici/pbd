<?php
include('../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../paginas/gerenciaDisciplina.php");
}else{
	if(isset($_POST['cadastrar'])){
		$disciplina=$_POST['iDisciplina'];
		$material=$_POST['materiais'];
		
		$sql="INSERT INTO disciplina (idDisciplina, nome)
		VALUES ('5', '$disciplina')";
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../paginas/cadastroDisciplina.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			$sql="INSERT INTO disciplina_material (idDisciplina, idMaterial)
			VALUES ('5', '$material')";
		
			$result=mysql_query($sql);
			echo '<meta http-equiv="refresh" content="0;url=../paginas/gerenciaDisciplina.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
		}
	}
}