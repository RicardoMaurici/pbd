<?php
$host = "localhost";
$user = "root";
$pass = "1234";

$db   = "pbd";

mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($db) or die('Erro ao conectar ao banco de dados');
mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');


$result = mysql_query("SELECT * FROM UF");

while ($row = mysql_fetch_array($result) {
    printf("ID: %s  Name: %s", $row);  
}




?>