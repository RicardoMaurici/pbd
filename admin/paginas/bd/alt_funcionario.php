<?php
include('../../../conecta.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../gerenciaFuncionario.php");
}else{
	if(isset($_POST['alterar'])){
		$idF=$_GET['id'];
		$nomecompleto=$_POST['inomeCompleto'];
		$admin=$_POST['acessoAdmin'];
		$cpf=$_POST['icpf'];
		$rg=$_POST['irg'];
		$dtNascimento=date('Y-m-d',strtotime(str_replace('/', '-', $_POST['idtNascimento'])));
		$sexo=$_POST['slsexo'];
		$tel1=$_POST['itel1'];
		$tel2=$_POST['itel2'];
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
			$sql="UPDATE funcionario SET CPF='$cpf',RG='$rg', nomeCompleto='$nomecompleto', email='$email', dtNascimento='$dtNascimento', senha='$senha', sexo='$sexo', salario='$salario', PISPASEP='$pis', nomeUsuario='$login', privilegio='$admin', complemento='$complemento', idFuncao='$cargo', idEndereco='$endereco', idEscolaridade='$escolaridade', telefone1='$tel1', telefone2='$tel2'
			WHERE idPessoa='$idF'";
		}else{
			$sql="UPDATE funcionario SET CPF='$cpf',RG='$rg', nomeCompleto='$nomecompleto', email='$email', dtNascimento='$dtNascimento', senha='$senha', sexo='$sexo', salario='$salario', PISPASEP='$pis', nomeUsuario='$login', privilegio='$admin', complemento='$complemento', idFuncao='$cargo', idEndereco=NULL, idEscolaridade='$escolaridade', telefone1='$tel1', telefone2='$tel2'
			WHERE idPessoa='$idF'";
		}
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../alterarFuncionario.php?id='.$idF.'">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
			echo '<meta http-equiv="refresh" content="0;url=../gerenciaFuncionario.php">';
			echo '<script>alert("Alteração realizada com sucesso!")</script>';
		}
	}else{
		echo '<meta http-equiv="refresh" content="0;url=../alterarFuncionario.php?id='.$idF.'">';
		echo '<script>alert("Salário Inválido - precisa ser positivo e diferente de zero")</script>';
	}
	}
}
