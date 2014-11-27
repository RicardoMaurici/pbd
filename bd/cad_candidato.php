<?php
include('../conecta_aluno.php');

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
		$tel3=$_POST['itel3'];
		$escolaridade=$_POST['slescolaridade'];
		$eleitor=$_POST['ieleitor'];
		$pais=$_POST['pais'];
		$ufs=$_POST['ufs'];
		$cidade=$_POST['cidade'];
		$bairro=$_POST['bairro'];
		$endereco=$_POST['endereco'];
		$email=$_POST['iemail'];
		$senha=$_POST['isenha'];

		$sql="INSERT INTO candidato (idPessoa, CPF,RG, nomeCompleto, email, dtNascimento, senha, sexo, tituloEleitor, idEndereco, idEscolaridade)
		VALUES ('5', '$cpf', '$rg', '$nomecompleto', '$email', '$dtNascimento', '$senha', '$sexo', '$eleitor', '$endereco','$escolaridade')";
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../paginas/cadastroCandidato.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../paginas/mainAluno.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
		}
	}
}