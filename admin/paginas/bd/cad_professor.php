<?php
include('../../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../index.php");
}else{
	if(isset($_POST['cadastrar'])){
		$nomecompleto=$_POST['inomeCompleto'];
		$cpf=$_POST['icpf'];
		$rg=$_POST['irg'];
		$dtNascimento=date('Y-m-d',strtotime(str_replace('/', '-', $_POST['idtNascimento'])));
		$sexo=$_POST['slsexo'];
		$tel1=$_POST['itel1'];
		$tel2=$_POST['itel2'];
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
			$sql="INSERT INTO professor (CPF,RG, nomeCompleto, email, dtNascimento, senha, sexo, telefone1, telefone2, salario, PISPASEP,
			nomeUsuario, complemento, idEndereco, idEscolaridade)
			VALUES ('$cpf', '$rg', '$nomecompleto', '$email', '$dtNascimento', '$senha', '$sexo','$tel1','$tel2', '$salario', '$pis', '$login', '$complemento', '$endereco','$escolaridade')";
		}else{
			$sql="INSERT INTO professor (CPF,RG, nomeCompleto, email, dtNascimento, senha, sexo, telefone1, telefone2, salario, PISPASEP,
			nomeUsuario, complemento, idEscolaridade)
			VALUES ('$cpf', '$rg', '$nomecompleto', '$email', '$dtNascimento', '$senha', '$sexo','$tel1','$tel2', '$salario', '$pis', '$login', '$complemento', '$escolaridade')";
		}
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../cadastroProfessor.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			$idPessoa=mysql_insert_id();
			foreach($areas as $area) {
				$sql="INSERT INTO areas_professor (idAreas, idPessoa)
				VALUES ('$area','$idPessoa')";
				$result = mysql_query($sql) or die(mysql_error());
			}
			foreach($disciplinas as $disciplina) {
				$sql="INSERT INTO professor_disciplina (idPessoa, idDisciplina)
				VALUES ('$idPessoa','$disciplina')";
				$result = mysql_query($sql) or die(mysql_error());
			}
			echo '<meta http-equiv="refresh" content="0;url=../gerenciaProfessor.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
		
		}
			
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../cadastroProfessor.php">';
		echo '<script>alert("Salário Inválido - precisa ser positivo e diferente de zero")</script>';
	}
}
}
