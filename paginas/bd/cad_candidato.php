<?php
include('../../conecta.php');

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
		$escolaridade=$_POST['slescolaridade'];
		$eleitor=$_POST['ieleitor'];
		$pais=$_POST['pais'];
		$ufs=$_POST['ufs'];
		$cidade=$_POST['cidade'];
		$bairro=$_POST['bairro'];
		$endereco=$_POST['endereco'];
		$complemento=$_POST['icomplemento'];
		$email=$_POST['iemail'];
		$senha=$_POST['isenha'];

		if($endereco!=0){
		$sql="INSERT INTO candidato (CPF,RG, nomeCompleto, email, dtNascimento, senha, sexo, telefone1, telefone2, tituloEleitor, complemento, idEndereco, idEscolaridade, dtCadastro)
		VALUES ('$cpf', '$rg', '$nomecompleto', '$email', '$dtNascimento', '$senha', '$sexo','$tel1','$tel2', '$eleitor', '$complemento', '$endereco','$escolaridade', CURDATE())";
		}else{
			$sql="INSERT INTO candidato (CPF,RG, nomeCompleto, email, dtNascimento, senha, sexo, telefone1, telefone2, tituloEleitor, complemento, idEscolaridade, dtCadastro)
		VALUES ('$cpf', '$rg', '$nomecompleto', '$email', '$dtNascimento', '$senha', '$sexo', '$tel1','$tel2', '$eleitor', '$complemento', '$escolaridade', CURDATE())";
		}

		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../cadastroCandidato.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../mainAluno.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
			session_start();
			$_SESSION['login']=$cpf;
			$_SESSION['senha']=$senha;
		}
	}
}