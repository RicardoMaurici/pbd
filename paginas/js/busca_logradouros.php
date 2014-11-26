<?php
include('../../conecta.php');

   	$idbairro= $_GET['bairro'];
	$result = mysql_query("SELECT*FROM Logradouro where idBairro=$idbairro");

    while($row = mysql_fetch_array($result) ){
    	echo "<option value=$row[idLogradouro]>$row[nomeRua]</option>";
    	
       }


?>
