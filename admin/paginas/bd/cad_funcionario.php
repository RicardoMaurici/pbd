<?php
include('../../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../index.php");
}else{
	if(isset($_POST['cadastrar'])){
		$nomecompleto=$_POST['inomeCompleto'];
		$admin=$_POST['acessoAdmin'];
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
		$cargo=$_POST['cargo'];
		$pais=$_POST['pais'];
		$ufs=$_POST['ufs'];
		$cidade=$_POST['cidade'];
		$bairro=$_POST['bairro'];
		$endereco=$_POST['endereco'];
		$complemento=$_POST['icomplemento'];
		$email=$_POST['iemail'];
		$login=$_POST['ilogin'];
		$senha=$_POST['isenha'];

		if($admin==null)
			$admin=0;
		else
			$admin=1;

		if($salario>0){
		if($endereco!=0){
			$sql="INSERT INTO funcionario (CPF,RG, nomeCompleto, email, dtNascimento, senha, sexo, salario, PISPASEP,
			nomeUsuario, privilegio, complemento, idFuncao, idEndereco, idEscolaridade)
			VALUES ('$cpf', '$rg', '$nomecompleto', '$email', '$dtNascimento', '$senha', '$sexo', '$salario', '$pis', '$login', '$admin', '$complemento', '$cargo', '$endereco','$escolaridade')";
		}else{
			$sql="INSERT INTO funcionario (CPF,RG, nomeCompleto, email, dtNascimento, senha, sexo, salario, PISPASEP,
			nomeUsuario, privilegio, complemento, idFuncao, idEscolaridade)
			VALUES ('$cpf', '$rg', '$nomecompleto', '$email', '$dtNascimento', '$senha', '$sexo', '$salario', '$pis', '$login', '$admin', '$complemento', '$cargo', '$escolaridade')";
		}
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../cadastroFuncionario.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../gerenciaFuncionario.php">';
			echo '<script>alert("Cadastro realizado com sucesso!")</script>';
		}
			
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../cadastroFuncionario.php">';
		echo '<script>alert("Salário Inválido - precisa ser positivo e diferente de zero")</script>';
	}
}
}
