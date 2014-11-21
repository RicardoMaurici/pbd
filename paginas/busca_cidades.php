<?php
include('../conexao.class.php');
$minhaConexao = new Conexao();
$minhaConexao->open();

   	$iduf = $_GET['uf'];
	$result = pg_query("SELECT*FROM Cidade where idUF=$iduf");

    while($row = pg_fetch_array($result) ){
    	echo "<option value=$row[0]>$row[1]</option>";
    	
       }


?>
