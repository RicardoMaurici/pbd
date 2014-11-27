<?php
include('../conecta_aluno.php');

   	$idcidade = $_GET['cidade'];
	$result = mysql_query("SELECT*FROM Bairro where idCidade=$idcidade");

    while($row = mysql_fetch_array($result) ){
    	echo "<option value=$row[idBairro]>$row[nomeBairro]</option>";
    	
       }


?>
