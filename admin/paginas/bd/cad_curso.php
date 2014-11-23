<?php
include('../../../conecta.php');

if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../index.php");
}else{
	if(isset($_POST['cadastrar'])){
		$tipo = $_POST['tipoCurso'];
		$turno = $_POST['turnoCurso'];
		$vagas = $_POST['vagasCurso'];
		$inicioMat = date('Y-m-d',strtotime(str_replace('/', '-', $_POST['inicioMatCurso'])));
		$terminoMat = date('Y-m-d',strtotime(str_replace('/', '-', $_POST['terminoMatCurso'])));
		$inicioInsc = date('Y-m-d',strtotime(str_replace('/', '-', $_POST['inicioInscCurso'])));
		$terminoInsc = date('Y-m-d',strtotime(str_replace('/', '-', $_POST['terminoInscCurso'])));


		$sql="INSERT INTO `Curso`(`turno`, `vagas`, `tipo`, `dtInicioMatricula`, `dtFimMatricula`, `dtInicioInscricao`, `dtFimInscricao`) 
			VALUES ('$turno',$vagas,'$tipo','$inicioMat','$terminoMat','$inicioInsc','$terminoInsc')";
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../cadastroCurso.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../cadastroCurso.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
		} 
	}
}

?>