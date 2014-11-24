<?php
include('../../../conecta.php');

if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../index.php");
}else{
	if(isset($_POST['cadastrar'])){
		$tipo = $_POST['tipoCurso'];
		$turno = $_POST['turnoCurso'];
		$vagas = $_POST['vagasCurso'];

		$dtIMat = strtotime(str_replace('/', '-', $_POST['inicioMatCurso']));
		$dtTMat = strtotime(str_replace('/', '-', $_POST['terminoMatCurso']));
		$dtIinsc = strtotime(str_replace('/', '-', $_POST['inicioInscCurso']));
		$dtTinsc = strtotime(str_replace('/', '-', $_POST['terminoInscCurso']));

		if(time() < $dtIMat AND $dtIMat  < $dtTMat  AND $dtTMat < $dtIinsc AND $dtIinsc < $dtTinsc){

			$inicioMat = date('Y-m-d',$dtIMat);
			$terminoMat = date('Y-m-d',$dtTMat);
			$inicioInsc = date('Y-m-d',$dtIinsc);
			$terminoInsc = date('Y-m-d',$dtTinsc);


			$sql="INSERT INTO `Curso`(`turno`, `vagas`, `tipo`, `dtInicioMatricula`, `dtFimMatricula`, `dtInicioInscricao`, `dtFimInscricao`) 
				VALUES ('$turno',$vagas,'$tipo','$inicioMat','$terminoMat','$inicioInsc','$terminoInsc')";
			
			$result=mysql_query($sql);
			if(!$result){
				echo '<meta http-equiv="refresh" content="0;url=../cadastroCurso.php">';
				echo '<script>alert("'.mysql_error().'")</script>';
			}else{
				echo '<meta http-equiv="refresh" content="0;url=../gerenciaCurso.php">';
				echo '<script>alert("Cadastro realizado com sucesso!")</script>';
			} 
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../cadastroCurso.php">';
			echo '<script>alert("Datas não seguem ordem cronológica!")</script>';
		}
	}
}

?>