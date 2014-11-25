<?php
include('../../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../gerenciaProfessor.php");
}else{
	if(isset($_POST['alterar'])){
		$idP=$_GET['id'];
		$nomecompleto=$_POST['inomeCompleto'];
		$cpf=$_POST['icpf'];
		$rg=$_POST['irg'];
		$dtNascimento=date('Y-m-d',strtotime(str_replace('/', '-', $_POST['idtNascimento'])));
		$sexo=$_POST['slsexo'];
		$tel1=$_POST['itel1'];
		$tel2=$_POST['itel2'];
		$tel3=$_POST['itel3'];
		$pis=$_POST['ipispasep'];
		$salario=$_POST['isalario'];
		$escolaridade=$_POST['slescolaridade'];
		$areas=$_POST['areas'];
		$disciplinas=$_POST['disciplinas'];
		$pais=$_POST['pais'];
		$ufs=$_POST['ufs'];
		$cidade=$_POST['cidade'];
		$bairro=$_POST['bairro'];
		$endereco=$_POST['endereco'];
		$complemento=$_POST['icomplemento'];
		$email=$_POST['iemail'];
		$login=$_POST['ilogin'];
		$senha=$_POST['isenha'];

		if($salario>0){
		if($endereco!=0){
			$sql="UPDATE professor SET CPF='$cpf',RG='$rg', nomeCompleto='$nomecompleto', email='$email', dtNascimento='$dtNascimento', senha='$senha', sexo='$sexo', salario='$salario', PISPASEP='$pis', nomeUsuario='$login', complemento='$complemento', idEndereco='$endereco', idEscolaridade='$escolaridade'
			WHERE idPessoa='$idP'";
		}else{
			$sql="UPDATE professor SET CPF='$cpf',RG='$rg', nomeCompleto='$nomecompleto', email='$email', dtNascimento='$dtNascimento', senha='$senha', sexo='$sexo', salario='$salario', PISPASEP='$pis', nomeUsuario='$login', complemento='$complemento', idEndereco=NULL, idEscolaridade='$escolaridade'
			WHERE idPessoa='$idP'";
		}
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../alterarProfessor?id='.$idP.'">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			$sqlA="DELETE FROM areas_professor WHERE idPessoa='$idP'";
			$resultA=mysql_query($sqlA) or die(mysql_error()); 
			foreach($areas as $area) {
				$sql="INSERT INTO areas_professor (idAreas, idPessoa)
				VALUES ('$area','$idP')";
				$result = mysql_query($sql) or die(mysql_error());
			}
			$sqlD="DELETE FROM professor_disciplina WHERE idPessoa='$idP'";
			$resultD=mysql_query($sqlD) or die(mysql_error());
			foreach($disciplinas as $disciplina) {
				$sql="INSERT INTO professor_disciplina (idPessoa, idDisciplina)
				VALUES ('$idP','$disciplina')";
				$result = mysql_query($sql) or die(mysql_error());
			}
			echo '<meta http-equiv="refresh" content="0;url=../gerenciaProfessor.php">';
			echo '<script>alert("Alteração realizada com sucesso!")</script>';
		}
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../alterarProfessor.php?id='.$idP.'">';
		echo '<script>alert("Salário Inválido - precisa ser positivo e diferente de zero")</script>';
	}
	}
}
