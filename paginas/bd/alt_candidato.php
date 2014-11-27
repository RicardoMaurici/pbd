<?php
include('../../conecta_aluno.php');

//pega dados form e coloca no banco
if(getenv("REQUEST_METHOD")!="POST"){
	header("Location: ../meuCadastro.php");
}else{
	if(isset($_POST['alterar'])){
		$id=$_GET['id'];
		$nomecompleto=$_POST['inomeCompleto'];
		
		$rg=$_POST['irg'];
		$dtNascimento=date('Y-m-d',strtotime(str_replace('/', '-', $_POST['idtNascimento'])));
		$sexo=$_POST['slsexo'];
		$tel1=$_POST['itel1'];
		$tel2=$_POST['itel2'];
		$escolaridade=$_POST['slescolaridade'];
		$eleitor=$_POST['ieleitor'];
		$endereco=$_POST['endereco'];
		$complemento=$_POST['icomplemento'];
		$email=$_POST['iemail'];
		$senha=$_POST['isenha'];

		if($endereco!=0){
			$sql="UPDATE candidato SET RG='$rg', nomeCompleto='$nomecompleto', email='$email', dtNascimento='$dtNascimento', senha='$senha', sexo='$sexo', tituloEleitor='$eleitor', complemento='$complemento', idEndereco='$endereco', idEscolaridade='$escolaridade', telefone1='$tel1', telefone2='$tel2'
			WHERE idPessoa='$id'";
		}else{
			$sql="UPDATE candidato SET RG='$rg', nomeCompleto='$nomecompleto', email='$email', dtNascimento='$dtNascimento', senha='$senha', sexo='$sexo', tituloEleitor='$eleitor', complemento='$complemento', idEndereco=NULL, idEscolaridade='$escolaridade', telefone1='$tel1', telefone2='$tel2'
			WHERE idPessoa='$id'";
		}
		
		$result=mysql_query($sql);
		if(!$result){
			echo '<meta http-equiv="refresh" content="0;url=../alteraCadastroAluno.php">';
			echo '<script>alert("'.mysql_error().'")</script>';
		}else{
		echo '<meta http-equiv="refresh" content="0;url=../meuCadastro.php">';
		echo '<script>alert("Alteração realizada com sucesso!")</script>';
		}
	}
}
