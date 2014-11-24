<?php
include('../../../conecta.php');

   	$idlogradouro= $_GET['logradouro'];
	$result = mysql_query("SELECT*FROM Endereco where idLogradouro=$idlogradouro");
	echo "<option value=0></option>";
    while($row = mysql_fetch_array($result) ){
    	echo "<option value=$row[idEndereco]>CEP: $row[CEP], N Residencia: $row[nResidencia]</option>";
    	
       }


?>
