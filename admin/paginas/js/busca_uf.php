<?php
include('../../../conecta.php');

   	$idpais = $_GET['pais'];
	$result = mysql_query("SELECT*FROM UF where idPais=$idpais");

    while($row = mysql_fetch_array($result) ){
    	echo "<option value=$row[idUF]>$row[nomeUF]</option>";
    	
       }


?>
