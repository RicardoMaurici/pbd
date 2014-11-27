<?php
include('../conecta_aluno.php');

   	$iduf = $_GET['uf'];
	$result = mysql_query("SELECT*FROM Cidade where idUF=$iduf");

    while($row = mysql_fetch_array($result) ){
    	echo "<option value=$row[idCidade]>$row[nomeCidade]</option>";
    	
       }


?>
